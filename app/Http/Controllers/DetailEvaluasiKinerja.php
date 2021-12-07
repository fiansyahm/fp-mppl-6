<?php

namespace App\Http\Controllers;

use App\Models\Evaluasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailEvaluasiKinerja extends Controller
{
    //
    public function index($id)
    {
        $user =Auth::user();
        $isAdmin =Auth::user()->isAdmin;
        $list =  Evaluasi::find($id);

        if($isAdmin==1){
            return view('admin.index', compact('user','list'));
        }
        else{
            return view('user.detail',  compact('user','list'));
        }
    }

}
