@extends('layouts/sidebar')


@section('title')
Admin
@endsection

@section('contain')
<div class="detail">
    <h3>Detail Evaluasi</h3>
</div>
<div class="back">
    <a href="{{ route('user.home') }}">&lt; <- Kembali</a>
</div>

<div class="docs">
    <div class="pt-10 docsContent">
        <!-- <div class="row"> -->
        <table class="table docsData">
            <colgroup>
                <col span="1" style="width: 20%;">
                <col span="1" style="width: 5%;">
                <col span="1" style="width: 75%;">
            </colgroup>
            <tr>
                @if($list->status == 1)
                <td class="bg-success" colspan="3" style="text-align: left; color: white;">
                    Data Evaluasi telah disetujui!
                </td>
                @elseif ($list->status == -1)
                <td class="bg-danger" colspan="3" style="text-align: left; color: white;">
                    Data Evaluasi tidak disetujui!
                </td>
                @endif
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
                <td>
                    <div>
                        <object data="{{ asset('storage/'. $list->dokumen) }}" type="application/pdf">
                            <iframe src="{{ asset('storage/'. $list->dokumen) }}" width="40%" height="30%"
                                frameborder="0" marginwidth="0" marginheight="0" scrolling="no"
                                style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;"
                                allowFullScreen> </iframe>
                        </object>
                    </div>

                </td>
            </tr>

            </tr>
            <tr>
                <td>Komentar</td>
                <td>:</td>
                <td>
                    <textarea id="komen" cols="30" rows="4" readonly>{{ $list->komentar }}</textarea>
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection
