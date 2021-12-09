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

        if ($isAdmin == 1) {
            return view('admin.index', compact('user', 'list'));
        } else {
            return view('user.index',  compact('user', 'list'));
        }
    }

    public function search(Request $request)
    {
        //dd($request);
        $user = Auth::user();
        if ($request->unit_id == 1) {
            $list = Evaluasi::paginate(5);
            return view('admin.index', compact('user', 'list'));
        } else {
            $list = Evaluasi::where('unit_id', $request->unit_id)
                ->paginate(2);
            // echo $list;
            return view('admin.index', compact('user', 'list'));
        }
    }

    public function delete($id)
    {
        $evaluasi = Evaluasi::find($id);
        $evaluasi->delete();

        return redirect()->route('admin.home');
    }
}
