@extends('layouts/sidebar')
@section('contain')
<div class="detail1">
    <h3>Detail Evaluasi</h3>
</div>


<div class="bg-white p-5">
    <div class="row">
        <div class="col-md-8">
            <table class="table docsData">
                <tr>
                    <!-- <td>Judul Evaluasi</td> -->
                    <?php
                            echo "<td>Judul Evaluasi</td>"
                        ?>
                        <td>:</td>
                        <td>Contact Not Linked</td>
                </tr>
                <tr>
                    <td>Unit</td>
                    <td>:</td>
                    <td>Kinerja Peningkatan Institusi</td>
                </tr>
                <tr>
                    <td>Tanggal Pembuatan</td>
                    <td>:</td>
                    <td>25 Desember 2021</td>
                </tr>
                <tr></tr>
                <td>Dokumen Evaluasi Kinerja</td>
                <td>:</td>
                <td>
                    <img src="https://venngage-wordpress.s3.amazonaws.com/uploads/2021/05/Standard-Business-Proposal-Template.jpg" width="120" height="180">
                </td>
                </tr>
                <tr></tr>
                <td>Komentar</td>
                <td>:</td>
                <td>
                    <textarea rows="4" cols="30">
                        </textarea>
                </td>
                </tr>
            </table>
        </div>
        <div class="col-md-4" style="padding-top:50%;">
            <button type="submit" class="btn btn-primary ml-5">Submit1</button>
            <button type="submit" class="btn btn-primary ml-4">Submit2</button>
        </div>
    </div>

</div>
@endsection