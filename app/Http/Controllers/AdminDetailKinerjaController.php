<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminDetailKinerjaController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $isAdmin = Auth::user()->isAdmin;
        $unit_id = Auth::user()->id;
        $list =  Evaluasi::where('unit_id', $unit_id)
                    ->get();

        if($isAdmin==1){
            return view('admin.detail', compact('user','list'));
        }
        else{
            return view('user.index',  compact('user','list'));
        }
    }


}
