<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function admin()
    {
     return view('dashboard');
    }
    function sipil()
    {
     return view('Sipil.dashboar-sipil');
    }
}
