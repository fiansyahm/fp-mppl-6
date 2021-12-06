<?php

namespace App\Http\Controllers;

use App\Models\Evaluasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailEvaluasiKinerja extends Controller
{
    //
    public function index()
    {
        $user =Auth::user();
        $isAdmin =Auth::user()->isAdmin;
        $unit_id=Auth::user()->id;

        if($isAdmin==0){

        }
    }
}
