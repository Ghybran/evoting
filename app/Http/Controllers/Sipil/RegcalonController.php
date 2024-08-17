<?php

namespace App\Http\Controllers\Sipil;

use App\Http\Controllers\Controller;
use App\Models\Categorycalon;
use App\Models\Regcalon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegcalonController extends Controller
{
    function regcalon()
    {
        $calon=Categorycalon::all();
     return view('Sipil.regcalon',compact('calon'));
    }
    function datac()
    {
     $reg= New Regcalon([
        'user_id' => Auth::user()->id,
        'visi'=>request('visi'),
        'misi'=>request('misi'),
        'category'=>request('category')
     ]);
     $reg->save();
     return redirect()->back();
    }
}
