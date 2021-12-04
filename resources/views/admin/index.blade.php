<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2a07548216.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <title>Hello, world!</title>

    <style>
        .welcome {
            height: 70px;
        }

        .abu {
            background-color: #a0a0a0;
        }

        .no-bullets {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .main-wrapper {
            height: 100vh;
        }

        .fa-home,
        .fa-sign-out-alt {
            color: white;
        }

        .bg-abu {
            c0c0c0
        }
    </style>
</head>


<body class="abu m-0 p-0 main-wrapper">

    <div class="row main-wrapper">

        <div class="col-md-3 bg-dark">
            <div class="profile text-center">
                <h3 class="text-white">Kepala Unit</h3>
                <img src="https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg"
                    alt="profile_picture" class="avatar img-fluid rounded-circle" height="200" width="200">
                <br><br>
                <p class="text-white">Nama Kepala Unit</p>
            </div>
            <div class="container">
                <ul class="no-bullets text-white">
                    <li class="mt-3">
                        <a href="">
                            <span class="icon"><i class="fas fa-home"></i></span>
                            <span class="item text-white">Home</span>
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="">
                            <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                            <span class="item text-white">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 bg-abu">
            <div class="m-5 bg-white welcome rounded">
                <div href="">
                    <span class="icon"><i class="fas fa-exclamation-circle"></i></span>
                    <span class="item text-white"><b>Selamat datang, [nama user1]</b></span>
                </div>
            </div>


            <div class="m-5 table-evaluasi">
                <table class="table">
                    <thead>
                        <tr class="text-white bg-primary">
                            <th scope="col">Judul</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    @for ($i = 0; $i < 10; $i++)
                    <tbody class="bg-white">
                        <tr>
                            <th scope="row">Contact Email</th>
                            <td>Tom Cruise</td>
                            <td>04 Desember 2021</td>
                            <td>
                                <a href="/user" class="badge badge-primary">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                    @endfor

                </table>
            </div>

        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>