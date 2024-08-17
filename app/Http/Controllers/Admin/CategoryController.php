<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorycalon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function insert()
    {
        $reg= new Categorycalon([
            'category'=>request('category')
        ]);
        $reg->save();
        return redirect()->back();

    }
}
