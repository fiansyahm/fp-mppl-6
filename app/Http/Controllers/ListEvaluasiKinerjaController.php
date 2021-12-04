<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Evaluasi;

// Untuk Admin
class ListEvaluasiKinerjaController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $isAdmin = Auth::user()->isAdmin;
        $list = Evaluasi::paginate(5);

        if($isAdmin==1){
            return view('admin.index', compact('user','list'));
        }
        else{
            return view('user.index',  compact('user','list'));
        }
    }
}
