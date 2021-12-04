{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
           <div class="mt-4">
                <x-label for="username" :value="__('Username')" />

                <x-input id="username" class="block w-full mt-1" type="text" name="username" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card> --}}

    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign in &bullet; myITS Online Test</title>
        <link rel="icon" type="image/png" sizes="16x16" href="https://my.its.ac.id/assets/media/favicons/favicon-web.png">
        <link rel="stylesheet" type="text/css" href="https://my.its.ac.id/assets/css/its-login.css">
        <link rel="stylesheet" type="text/css" href="https://my.its.ac.id/assets/plugins/nprogress/nprogress.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            .alert-error {
                color: #f1c40f !important;
                padding: 10px;
                border-radius: 3px;
                text-align: center;
            }

            .btn-eye {
                background-color: transparent;
                padding: 5px;
                border: none;
            }

            .btn-eye:hover {
                cursor: pointer;
            }
        </style>

    </head>

    <body>
        <div class="wrapper">
            <div class="box">
                <img srcset="https://my.its.ac.id/assets/media/img/@2x/logo.png 2x, https://my.its.ac.id/assets/media/img/logo.png 1x"
                    src="https://my.its.ac.id/assets/media/img/logo.png" alt="Logo ITS" class="logo">
                <div class="description">
                    <!-- <img srcset="https://my.its.ac.id/assets/media/img/@2x/myits-sso-white.png 2x, https://my.its.ac.id/assets/media/img/myits-sso-white.png 1x" src="https://my.its.ac.id/assets/media/img/myits-sso-white.png" alt="myITS" class="myits"> -->
                </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        {{-- <input type="hidden" name="_token" value="wnpEBBj0n4ciM3EpXClQF3tromrn3BmVHBhnXxBH"> --}}
                        <div class="text-orange" style="min-height: 20px; font-weight: bold; margin-bottom: 15px; text-align: center">
                            <small class="notification_caps" style="display: none;">Caps lock is on!</small>
                            <small class="my_its_id_required" style="display: none;">Email is required</small>
                        </div>

                        <div id="inputusername" class="inputbox">
                            <input type="text" id="username" name="username" value="" required autocomplete="off">
                            <label for="username">Username</label>
                        </div>

                        <div id="inputpassword" class="inputbox">
                            <input type="password" name="password" id="password" required autocomplete="off">
                            <label for="password">Password</label>
                        </div>
                        <div class="inputbox">
                            <button id="login" type="submit" class="btn btn-block bg-orange">Sign in</button>
                        </div>
                    </form>

            </div>
            <footer class="m-t-30">&copy; 2020 Institut Teknologi Sepuluh Nopember. <em>v2.2.6</em></footer>
        </div>

        <script src="https://my.its.ac.id/assets/js/core/jquery.min.js"></script>
        <script src="https://my.its.ac.id/assets/plugins/nprogress/nprogress.js"></script>


        <script src="https://my.its.ac.id/assets/js/common.min.js"></script>
        <script src="https://my.its.ac.id/assets/js/jsencrypt.min.js"></script>

        {{-- <script>
            const autofillContent = `"${String.fromCharCode(0xFEFF)}"`;
    function checkAutofill(input) {
        if (!input.value) {
            const style = window.getComputedStyle(input);
            if (style.content !== autofillContent)
                return false;
        }
        // the autofill was detected
        username.classList.add('filled');
        password.classList.add('filled');
        return true;
    }

    const username = document.querySelector("input[type=text]");
    const password = document.querySelector("input[type=password]");



    $("#inputpassword").on('keydown', function (e) {
        if (e.keyCode == 13) {
    		submitForm();
        }
    });

    function submitForm() {
    	var encrypted = encrypt();
    	$("#encrypted").val(encrypted);

    	$("#form-login").submit();
    }

    function encrypt() {
    	var encryptor = new JSEncrypt();
    	encryptor.setPublicKey($('#pubkey').val());
    	var username = $("#username").val();
    	var password = $("#password").val();
    	var device_method = $("#device_method").val();
    	var password_state = $("#password_state").val();
    	var plaintext = { u : username, p : password, dm: device_method, ps: password_state};
    	var myJSON = JSON.stringify(plaintext);
    	var encrypted = encryptor.encrypt(myJSON);

    	return encrypted;
    }

    $(function() {
    	$(window).keydown(function(event){
    		if(event.keyCode == 13) {
    			event.preventDefault();
    		}
    	});

    	loader = `<i class="fa fa-spinner fa-pulse"></i>`;
    	button = `Lanjutkan`;
    	$("#login").click(function(){
    		submitForm();
    	});
    });
        </script> --}}

    </body>

    </html>
{{-- </x-guest-layout> --}}

