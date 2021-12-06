@extends('layouts/sidebar')


@section('title')
User
@endsection

@section('contain')
{{ $list }}
<div class="detail">
    <h3>Detail Evaluasi</h3>
</div>
<div class="docs">
    <div class="content">
        <?php
            // if($list->status==1){
            //     echo "<b>Udah di approve</b>";
            // }
            // else{
            //     echo "<b>Belum di approve</b>";
            // }
            echo "
            <div class='bg-success' style='height:10%; width:100%;'>

            </div>
            ";
        ?>
        <div class="row">
            <div class="col-md-9">


                <table class="table docsData">
                    <tr>
                        <!-- <td>Judul Evaluasi</td> -->
                        <?php
                            echo "<td>Judul Evaluasi</td>"
                        ?>
                        <td>:</td>
                        <td>{{ $list->judul }}</td>
                    </tr>
                    <tr>
                        <td>Unit</td>
                        <td>:</td>
                        <td>{{ $list->users->jabatan }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Pembuatan</td>
                        <td>:</td>
                        <td>{{ $list->tanggal}}</td>
                    </tr>
                    <tr></tr>
                    <td>Dokumen Evaluasi Kinerja</td>
                    <td>:</td>
                    <td>
                        {{-- <img
                            src="https://venngage-wordpress.s3.amazonaws.com/uploads/2021/05/Standard-Business-Proposal-Template.jpg"
                            width="120" height="180"> --}}
                        {{-- <div id='outerdiv' style="width:800px; overflow-x:hidden;">
                            <iframe
                                src="https://venngage-wordpress.s3.amazonaws.com/uploads/2021/05/Standard-Business-Proposal-Template.jpg"
                                width="120" height="180" frameborder="0" id='inneriframe' scrolling=no>
                            </iframe>
                        </div> --}}
                    </td>
                    </tr>
                    <tr></tr>
                    <td>Komentar</td>
                    <td>:</td>
                    <td>{{ $list->komentar }}
                    </td>
                    </tr>
                </table>
            </div>
            <!-- <div style="margin-right: 3%;"><button type="button" class="align-self-end btn btn-lg btn-primary"
                style="background-color: #009818">Approve</button>
        </div> -->
        </div>

    </div>

    @endsection
