@extends('layouts/sidebar')


@section('title')
Admin
@endsection

@section('contain')
<div class="detail">
    <h3>Detail Evaluasi</h3>
</div>
<div class="back">
    <a href="{{ url()->previous() }}">&lt; kembali</a>
</div>

<div class="docs">
    <div class="docsContent">
        <!-- <div class="row"> -->
        <table class="table docsData">
            <colgroup>
                <col span="1" style="width: 20%;">
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 75%;">
            </colgroup>
            <tr>
                <?php
                        if($list->status==1){
                            echo "
                            <td class='bg-success' colspan='3' style='text-align: left; color: white;'>
                                Data Evaluasi telah disetujui!
                            </td>
                            ";
                        }
                        else{
                            echo "
                            <td class='bg-failed' colspan='3' style='text-align: left; color: white;'>
                            Data Evaluasi tidak disetujui!
                        </td>
                        ";
                        }
                    ?>
            </tr>
            <tr>
                <td>Judul Evaluasi</td>
                <td>:</td>
                <td>{{ $list->judul }}</td>
            </tr>
            <tr>
                <td>Unit Kerja</td>
                <td>:</td>
                <td>{{ $list->users->jabatan }}</td>
            </tr>
            <tr>
                <td>Tanggal Pembuatan</td>
                <td>:</td>
                <td>{{ $list->tanggal }}</td>
            </tr>
            <tr>
                <td>Dokumen Evaluasi Kinerja</td>
                <td>:</td>
                <td></td>
            </tr>

            </tr>
            <tr>
                <td>Komentar</td>
                <td>:</td>
                <td>
                    <textarea cols="30" rows="4">{{ $list->komentar }}</textarea>
                </td>
            </tr>
        </table>
    </div>

    <!-- table tomnbol -->
    <table class="table" style=" text-align: left; border: hidden;">
        <colgroup>
            <col span="1" style="width: 35%;">
            <col span="1" style="width: 35%;">
            <col span="1" style="width: 15%;">
            <col span="1" style="width: 15%;">
        </colgroup>
        <tr>
            <td></td>
            <td></td>
            <td><button type="button" class="btn btn-danger" style="background-color: #F12B2C;" data-toggle="modal"
                    data-target="#confirmModalCenter">Decline</button></td>
            <td><button type="button" class="btn btn-success" data-toggle="modal" data-toggle="modal"
                    data-target="#confirmModalCenter">Approve</button></td>
        </tr>
    </table>
</div>

<div class="modal fade" id="confirmModalCenter" tabindex="-1" role="dialog" aria-labelledby="confirmModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLongTitle">Konfirmasi Aksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin melanjutkan ? <br><br>
                <b><span>Pastikan data yang Anda isi sudah
                        benar dan sesuai dengan
                        keinginanan Anda.</span>
                </b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

@endsection
