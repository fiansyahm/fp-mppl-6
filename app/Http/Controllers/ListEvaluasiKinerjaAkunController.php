<?php

namespace App\Http\Controllers;

use App\Models\Evaluasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Untuk User
class ListEvaluasiKinerjaAkunController extends Controller
{
    //
    public function index()
    {

        // return view('user.index');

        $user = Auth::user();
        $isAdmin = Auth::user()->isAdmin;
        $unit_id = Auth::user()->id;
        $list = Evaluasi::where('unit_id', $unit_id)
                    ->get();

        if($isAdmin==0){
            return view('user.index', compact('user', 'list'));
        }
        else{
            return view('admin.index', compact('user', 'list'));
        }
    }
}
