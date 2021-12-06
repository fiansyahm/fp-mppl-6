<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminDetailKinerjaController extends Controller
{
    //
    public function index($id)
    {
        $user = Auth::user();
        $isAdmin = Auth::user()->isAdmin;
        $list =  Evaluasi::find($id);

        if($isAdmin==1){
            return view('admin.detail', compact('user','list'));
        }
        else{
            return view('user.index',  compact('user','list'));
        }
    }
}
