@extends('layouts/sidebar')

@section('title')
Admin
@endsection

@section('contain')
<div class="welcome">
    <div class="welcomeContent">
        <span class="icon"><i class="fas fa-exclamation-circle"></i></span>
        <span class="item">Selamat Datang, {{$user->nama}}</span>
    </div>
</div>
<br><br>
<div class="mx-auto pull-right" style="width: 92%;">
    <div class="d-flex justify-content-end">
        <form action="{{ route('admin.search') }}" method="post" role="search">
            @csrf
            <div class="input-group">
                <select name="unit_id"
                    class='w-40 h-10 mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'>
                    <option value="1">Semua</option>
                    <option value="2">Unit Pengelolaan dan Pengendalian Program</option>
                    <option value="3">Unit Komunikasi Publik</option>
                    <option value="4">Unit Layanan Hukum dan Pengelolaan Risiko</option>
                    <option value="5">Kepala Subbagian Administrasi Sekretaris Institut</option>
                </select>
                <button type="submit" class="btn btn-primary" name="simpan" value="Cari"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
</div>
<div class="dataEvaluasi">
    <table class="table table-striped custab">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Unit</th>
                <th>Tanggal</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        @foreach ($list as $evaluasi) <tbody class="bg-white">
            <tr>
                <th scope="row">{{ $evaluasi->judul }}</th>
                <td>{{ $evaluasi->users->jabatan }}</td>
                <td>{{ $evaluasi->tanggal }}</td>
                <td class="text-center">
                    <a class='badge badge-primary' href="{{ route('admin.detail', ['id' => $evaluasi->id]) }}"
                        style="background-color : #007BFF">DETAIL</a>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
<div class="mt-4 d-flex justify-content-center">
    <br>
    {{-- pagination --}}
    {!! $list->links() !!}
</div>


@endsection
