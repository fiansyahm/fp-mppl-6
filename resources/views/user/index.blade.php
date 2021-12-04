@extends('layouts/sidebar')
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
                    <a class='badge badge-primary' href="#" style="background-color : #007BFF">DETAIL</a>
            </tr>
            </tbody>
        @endforeach
    </table>
</div>

<div class="modal-footer" style="margin-right: 3%;"><button type="button" class="btn btn-primary"
        style="background-color: #009818; width: 20%;">ADD</button></div>
@endsection