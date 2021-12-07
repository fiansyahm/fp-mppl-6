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

    public function store(Request $request, $id)
    {
        //dd($request);
        // echo $request->modalKomen;

        // $evaluasi = Evaluasi::where('id', $id)
        //              ->first();
        // echo $evaluasi;
        // $validateData['id'] = $id;
        // $validateData['unit_id'] = $request->modalUnit;
        // $validateData['judul'] = $evaluasi->judul;
        // $validateData['komentar'] = $request->modalKomen;
        // $validateData['status'] = $request->modalStatus;
        // $validateData['tanggal'] = now();

        // Evaluasi::where($validateData);
        // echo $request->modalStatus;
        $status = (int)$request->modalStatus;
        // // echo $status;
        Evaluasi::where('id', $id)
            ->update([
                'status' => $status,
                'komentar' => $request->modalKomen
            ]);
        // DB::table('evaluasis')
        //     ->where('unit_id', $requst->modalUnit)
        //     ->updateOrInsert(
        //         ['komentar' => $requst->modalKomen],
        //         ['status' => $requst->modalStatus]
        //     );

        return redirect()->back();
    }
}
