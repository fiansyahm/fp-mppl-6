@extends('layouts/sidebar')


@section('title')
User
@endsection



@section('contain')
<div class="welcome">
    <div class="welcomeContent">
        <span class="icon"><i class="fas fa-exclamation-circle"></i></span>
        <span class="item">Selamat Datang, {{$user->nama}}</span>
    </div>
</div>
<br><br>
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
                    <a class='badge badge-primary' href="{{ route('user.detail') }}" style="background-color : #007BFF">DETAIL</a>
            </tr>
            </tbody>
        @endforeach
    </table>
</div>

<div class="modal-footer" style="margin-right: 3%;">
    <a class="inline-flex items-center h-8 px-4 m-2 text-sm text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800"
        href="{{ route('user.tambah') }}">Tambah Evaluasi</a>
</div>
@endsection
