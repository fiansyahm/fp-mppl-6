@extends('layouts/sidebar')


@section('title')
Admin
@endsection

@section('contain')
<div class="detail">
    <h3>Detail Evaluasi</h3>
</div>
<div class="back">
    <a href="{{ route('admin.home') }}">&lt; <- Kembali</a>
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
                                allowfullscreen> </iframe>
                        </object>
                    </div>

                </td>
            </tr>

            </tr>
            <tr>
                <td>Komentar</td>
                <td>:</td>
                <td>
                    @if ($list->status == 0)
                    <textarea id="komen" cols="30" rows="4">{{ $list->komentar }}</textarea>
                    @else
                    <textarea readonly id="komen" cols="30" rows="4">{{ $list->komentar }}</textarea>
                    @endif

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
            @if($list->status == 0)
            <td><button id="decline" type="button" class="btn btn-danger" style="background-color: #F12B2C;"
                    data-val="-1" data-toggle="modal" data-target="#confirmModalCenter">Decline</button></td>
            <td><button id="approve" type="button" class="btn btn-success" data-toggle="modal" data-toggle="modal"
                    data-val="1" data-target="#confirmModalCenter">Approve</button></td>
            @endif
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
                <b>
                    <span>
                        Pastikan data yang Anda isi sudah
                        benar dan sesuai dengan
                        keinginanan Anda.
                    </span>
                </b>
            </div>
            <div class="modal-footer">
                <button type='button' class='btn btn-danger' data-dismiss='modal' name="decline">Batal</button>
                <form action="{{ route('admin.store', ['id' => $list->id]) }}" method="post" id="modalForm">
                    @csrf
                    <button type='submit' class='btn btn-primary' id="modalSave" name="modalSave">Simpan</button>
                    <input type="hidden" id="modalKomen" value="anjay" name="modalKomen">
                    <input type="hidden" id="modalStatus" value="anjay" name="modalStatus">
                    <input type="hidden" id="modalUnit" value="{{ $list->unit_id }}" name="modalUnit">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal " id="alertModalCenter" tabindex="-1" role="dialog" aria-labelledby="alertModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="alertModalLongTitle">Terjadi Kesalahan</h5>
                <button id="alertClose" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <b>
                    <span style="justify-content: center;">
                        Silahkan isi komentar terlebih dahulu.
                    </span>
                </b>
            </div>
            <!-- <div class="modal-footer">

            </div> -->
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    $('#confirmModalCenter').on('show.bs.modal', function (event) {
        $('#alertModalCenter').modal('hide');
        $('#modalSave').click(function () {
            var myVal = $(event.relatedTarget).data('val');
            if (document.getElementById("komen").value == "" && myVal == "-1") {
                myVal = undefined;
                $('#confirmModalCenter').modal('hide');
                $('#alertModalCenter').modal('show');
                $("#modalForm").submit(function(e){
                    return false;
                });
            } else{
                var komentar = $('#komen').val();
                // prompt(komentar);
                $('#modalKomen').val(komentar);
                $('#modalStatus').val(parseInt(myVal));
                $('#modalForm').submit();
            }
        });
    });


$('#alertClose').click(function () {
    location.reload();
    return false;
});


</script>

@endsection
