<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Regcalon;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class CalonController extends Controller
{
    function calon()
    {
    $calon = Regcalon::join('users', 'users.id', '=', 'regcalon.user_id')
        ->join('categorycalon', 'categorycalon.id', '=', 'regcalon.category')
        ->select(
            'users.name',
            'regcalon.visi',
            'regcalon.misi',
            'regcalon.status',
            'categorycalon.category',
        )
        ->get();

    // return $calon;
    $status= Status::all();
     return view('Admin.calon',compact('calon','status'));
    }

    function upd(Request $req)
    {
        $calon=Regcalon::find($req->input('id'));
        $calon->status=$req->input('status');
        $calon->save();
        return redirect()->back()->with('success','berhasil');
    }

}
