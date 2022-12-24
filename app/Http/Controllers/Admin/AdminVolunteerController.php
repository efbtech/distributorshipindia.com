<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\Admin\VolunteerServiceInterface;

class AdminVolunteerController extends Controller
{
    public function __construct(VolunteerServiceInterface $VolunteerServiceInterface) {
        $this->VolunteerServiceInterface = $VolunteerServiceInterface;
        $this->middleware('admin');
    }

    public function volunteerList() {
        $volunteer = $this->VolunteerServiceInterface->volunteerList();
        return view('admin.volunteer-list',compact('volunteer'));
    }
}
