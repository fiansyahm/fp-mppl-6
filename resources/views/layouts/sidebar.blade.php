<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') Page</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
</head>

<body>
    <div class="container">

    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar">
                <div class="profile">
                    <!--Profile Image-->
                    <br>
                    <h3>{{$user->jabatan}}</h3>
                    @if($user->isAdmin==1)
                    <img src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2021/07/Dr-Umi-Laili-Yuhana-SKom-MSc-Sekretaris-Institut-Teknologi-Sepuluh-Nopember-SEKITS.jpeg"
                        alt="profile_picture" class="avatar img-fluid rounded-circle" height="200px">
                    @else
                    <img src="https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg"
                        alt="profile_picture" class="avatar img-fluid rounded-circle">
                    @endif
                    <br><br>
                    <p>{{$user->nama}}</p>
                    <!--Profile Title & Descruption-->
                </div>
                <!--Menu item-->
                <div class="menuContainer">
                    <ul>
                        <li class="mt-3">
                            @if($user->isAdmin==1)
                            <a href="/admin">
                                @else
                                <a href="/user">
                                    @endif
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    <span class="item">Home</span>
                                </a>
                        </li>
                        <li class="mt-3">
                            <a href="/dashboard">

                                <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                                <!-- <span class="item">Sign Out</span> -->
                                <span class="item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <div :href="route('logout')" style="color: white;" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </div>
                                    </form>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            @yield('contain')
        </div>
    </div>
</body>

</html>
