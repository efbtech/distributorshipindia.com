<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\Admin\QueryServiceInterface;

class AdminQueryController extends Controller
{
    public function __construct(QueryServiceInterface $QueryServiceInterface) {
        $this->QueryServiceInterface = $QueryServiceInterface;
        $this->middleware('admin');
    }

    public function queryList(Request $request) {
        $queries = $this->QueryServiceInterface->queryList($request->search);
        return view('admin.queries-list',compact('queries'));
    }

    public function singleMail(Request $request) {
        return $this->QueryServiceInterface->singleMail($request->id);
    }

    public function sendReply(Request $request) {
        $this->QueryServiceInterface->sendReply($request->all());
        if ($request->type == 'contactus') {
            return redirect('admin/queries-list');
        }
        if ($request->type == 'volunteer') {
            return redirect('admin/volunteer-list');
        }
    }
}
