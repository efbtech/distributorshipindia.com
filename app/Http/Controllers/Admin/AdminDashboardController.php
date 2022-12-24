<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\Admin\DashboardServiceInterface;

class AdminDashboardController extends Controller
{
    public function __construct(DashboardServiceInterface $DashboardServiceInterface) {
        $this->DashboardServiceInterface = $DashboardServiceInterface;
        $this->middleware('admin');
    }

    public function dashBoard() {
        return view('admin.dashboard');
    }
}