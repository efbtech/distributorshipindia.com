<?php

namespace App\Repository\Admin;

use App\Interfaces\Admin\QueryInterface;
use App\Models\Web\QueryModel;
use App\Mail\Admin\ReplyMail;
use Mail;

class QueryRepository implements QueryInterface
{
    public function queryList($search) {
        if ($search != '') {
            $query = QueryModel::select('*')
            ->where('apr_queries.fname', 'like', '%'.$search.'%')
            ->orWhere('apr_queries.lname', 'like', '%'.$search.'%')
            ->where('type','contactus')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
            $query->appends(['search' => $search]);
        } else {
            $query = QueryModel::select('*')
            ->where('type','contactus')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        }
        return $query;
    }
    
    public function singleMail($id) {
        return QueryModel::select('id','fname','lname','email','subject')->where('id',$id)->first();
    }

    public function sendReply($request) {
        if (isset($request['attachment'])) {
            if ($request['attachment'] != '') {
                $attachment = $request['attachment'];
                $ext = $attachment->extension();
                $attachment_move = str_replace(' ','_',$request['subject']).time().'.'.$ext;
                $temp = $request['attachment']->move(public_path('assets/admin/attachments/'), $attachment_move);
                $attachment_path = 'assets/admin/attachments/'.$attachment_move;
            }
            $mailData = [
                'fname' => $request['fname'], 
                'lname' => $request['lname'], 
                'subject' => $request['subject'], 
                'response' => $request['response'],
                'attachment' => $attachment_path
            ];
            QueryModel::where('id',$request['queryid'])->update(array('is_replied' => 'yes', 'sent_attachments' => $attachment_path));
        } else {
            $mailData = [
                'fname' => $request['fname'], 
                'lname' => $request['lname'], 
                'subject' => $request['subject'], 
                'response' => $request['response']
            ];
            QueryModel::where('id',$request['queryid'])->update(array('is_replied' => 'yes'));
        }
        Mail::to($request['sendemail'])->send(new ReplyMail($mailData));
    }
}
?>