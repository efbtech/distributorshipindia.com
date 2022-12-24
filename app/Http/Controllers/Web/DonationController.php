<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\Web\DonationServiceInterface;

class DonationController extends Controller
{
    private $DonationServiceInterface;

    public function __construct(DonationServiceInterface $DonationServiceInterface) {
        $this->DonationServiceInterface = $DonationServiceInterface;
    }

    public function donate() {
        return view('web.donate');
    }

    public function donationPaymentSuccessDetails() {
        return view('web.paymentdetails');
    }

    public function donationPayment(Request $request) {
        return redirect($this->DonationServiceInterface->donationPayment($request->all()));
    }

    public function donationPaymentMonthly(Request $request) {
        return redirect($this->DonationServiceInterface->donationPaymentMonthly($request->all()));
    }

    public function donationPaymentSuccess(Request $request) {
        return redirect($this->DonationServiceInterface->donationPaymentSuccess($request->all()));
    }
}