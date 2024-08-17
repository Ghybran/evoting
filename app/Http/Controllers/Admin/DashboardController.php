<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorycalon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
     $cat=Categorycalon::all();
     return view('Admin.dashboard',compact('cat'));
    }
}
