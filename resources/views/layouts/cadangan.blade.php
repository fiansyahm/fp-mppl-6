<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Main Page</title>
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
</head>

<body>
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar">
                <div class="profile">
                    <!--Profile Image-->
                    <br>
                    <h3>Kepala Unit</h3>
                    <img src="https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg"
                        alt="profile_picture" class="avatar img-fluid rounded-circle">
                    <br><br>
                    <p>Nama Kepala Unit</p>
                    <!--Profile Title & Descruption-->
                </div>
                <!--Menu item-->
                <div class="menuContainer">
                    <ul>
                        <li class="mt-3">
                            <a href="">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                <span class="item">Home</span>
                            </a>
                        </li>
                        <li class="mt-3">
                            <a href="">
                                <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                                <span class="item">Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="welcome">
                <div class="welcomeContent">
                    <span class="icon"><i class="fas fa-exclamation-circle"></i></span>
                    <span class="item">Selamat Datang, [Nama User]</span>
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
                    @for ($i = 0; $i < 6; $i++) <tbody class="bg-white">
                        <tr>
                            <th scope="row">Contact Email</th>
                            <td>Tom Cruise</td>
                            <td>{{10-$i}} Desember 2021</td>
                            <td class="text-center">
                                <a class='badge badge-primary' href="#" style="background-color : #007BFF">DETAIL</a>
                        </tr>
                        </tbody>
                        @endfor
                </table>
            </div>

            <div class="modal-footer" style="margin-right: 3%;"><button type="button" class="btn btn-primary" style="background-color: #009818">Add</button></div>
        </div>
    </div>
</body>

</html>