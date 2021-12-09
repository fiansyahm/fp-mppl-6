<?php

namespace App\Http\Controllers;

use App\Models\Evaluasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TambahEvaluasiController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        return view('user.tambahEvaluasi', compact('user'));
    }

    public function store(Request $request)
    {
        //ddd($request);

        $validateData = $request->validate([
            'judul' => 'required',
            'dokumen' => 'file',
        ]);

        $validateData['unit_id'] = Auth::user()->id;
        $validateData['tanggal'] = now();
        $validateData['status'] = 0;
        $validateData['dokumen'] = $request->file('dokumen')->store('dokumen');

        Evaluasi::create($validateData);

        return redirect()->route('user.home');
    }
}
