<?php

namespace App\Repository\Web;

use App\Models\Web\DonationModel;
use App\Interfaces\Web\DonationInterface;
use App\Services\Images\ImageServices;
use Session;

class DonationRepository implements DonationInterface
{
    private $imageService;
    
    public function __construct(ImageServices $imageService ) {
        $this->imageService = $imageService;
    }

    public function donationcURLSetup($request) {
        if (isset($request['amountone'])) {
            $amount = $request['amountone'];
        }
        if (isset($request['amountmonth'])) {
            $amount = $request['amountmonth'] * $request['monthcount'];
        }
        if (isset($request['customamountmonth'])) {
            $amount = $request['customamountmonth'] * $request['monthcount'];
        }
        if (isset($request['customamount'])) {
            $amount = $request['customamount'];
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
        array("X-Api-Key:test_a55c0747aae0d58494999c680f2","X-Auth-Token:test_222420284d80b15d7dea46fb659"));
        $payload = Array(
            'purpose' => $request['purpose'],
            'amount' => $amount,
            'phone' => '8527930287',
            'buyer_name' => 'Anand Kumar',
            'redirect_url' => asset('web/donation-payment-success'),
            'send_email' => true,
            'send_sms' => true,
            'email' => 'phpexpert2021@gmail.com',
            'allow_repeated_payments' => false
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch); 
        $response = json_decode($response);
        return $response;
    }

    public function donationPayment($request) {
        $response = $this->donationcURLSetup($request);
        DonationModel::create([
            'type' => $request['purpose'],
            'amount' => $request['customamount'] != '' ? $request['customamount'] : $request['amountone'],
            'donation_type' => 'one-time',
            'doner_name' => 'Anand Kumar',
            'transaction_id' => $response->payment_request->id
        ]); 
        Session::put('TID', $response->payment_request->id);
        return $response->payment_request->longurl;
    }

    public function donationPaymentMonthly($request) {
        $response = $this->donationcURLSetup($request);
        DonationModel::create([
            'type' => $request['purpose'],
            'amount' => $request['customamountmonth'] != '' ? $request['customamountmonth'] * $request['monthcount'] : $request['amountmonth'] * $request['monthcount'],
            'donation_type' => $request['monthcount'].'-month',
            'doner_name' => 'Anand Kumar',
            'transaction_id' => $response->payment_request->id
        ]); 
        Session::put('TID', $response->payment_request->id);
        return $response->payment_request->longurl;
    }

    public function donationPaymentSuccess($request) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payments/'.$request['payment_id']);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
        array("X-Api-Key:test_a55c0747aae0d58494999c680f2","X-Auth-Token:test_222420284d80b15d7dea46fb659"));
        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch); 

        if ($err) {
            Session::put('error','Payment Failed, Try Again!!');
            return redirect()->route('payment');
        } else {
            $data = json_decode($response);
        }
        
        if($data->success == 1) {
            if($data->payment->status == 'Credit') {
                DonationModel::updateOrCreate(
                    ['transaction_id' => session('TID')],
                    [
                        'payment_status' => $data->payment->status,
                        'payment_id' => $request['payment_id']

                    ]);
                Session::flash('paysuccess','Payment Successfull!');
                return 'web/donation-payment-details';
            } else {
                DonationModel::updateOrCreate(['transaction_id' => session('TID')],['payment_status' => 'Failed']);
                Session::flash('payfailed','Payment Failed!');
                return 'web/donation-payment-details';
            }
        } else {
            DonationModel::updateOrCreate(['transaction_id' => session('TID')],['payment_status' => 'Failed']);
            Session::flash('payfailed','Payment Failed!');
            return 'web/donation-payment-details';
        }
    }
}
?>