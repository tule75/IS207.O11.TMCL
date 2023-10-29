<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account - Login </title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Logo_UIT_updated.svg/1200px-Logo_UIT_updated.svg.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/sign.css">
    <link rel="stylesheet" href="../css/home.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="cartier">
       <div class="heading-section">
            <div class="logo-signin">
                <img class="logo-img-sign" src="{{asset('img/Screenshot_2023-10-16_121457-removebg.png')}}" alt="">
            </div>
            <div class="register-button">
                <a class="register-acc has-acc has-link-sign " href="">
                    ALREADY REGISTERED?
                </a>
                <a class="register-acc hasnt has-link-sign " href="{{ route('register') }}">
                    CREATE YOUR ACCOUNT
                </a>
            </div>
       </div>
        <div class="login-wrapper">
            <div class="login-content">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="login-box">
                        <h3 class="note">If you are already registered with Cartier, login here:</h3>
                        
                        <div class="content-item">
                            <p class="request-notice">Required field*</p>
                            <input type="email" value="" placeholder="Email Address*" name="email" required class="js-input-login login-input has-email">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <div class="content-item">
                            <input type="password" value="" placeholder="Password*" name="password" required class="js-input-login login-input has-password">
                            <button class="show-pass">Show</button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        @if (Route::has('password.request'))
                        <a class="forgotpass has-link-sign " href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                        @endif
                        <p class="read-more">Read the <a class="term has-link-sign " href="">Privacy Policy</a> for further information</p>

                        <x-primary-button class="ml-3 submitform">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>


         <!-- footer start -->
         <div class="footer">
            <ul class="footer-list">
                <li class="footer-list--item"><h3>CUSTOMER CARE</h3></li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <ul class="footer-list">
                <li class="footer-list--item"><h3>CUSTOMER CARE</h3></li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <ul class="footer-list">
                <li class="footer-list--item"><h3>CUSTOMER CARE</h3></li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <div class="footer-list hasnt-flex">
                <h3 class="footer-list--item">FOLLOW US</h3>
                <div class="icon-link">
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-facebook-f"></i></a>
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-youtube-play"></i></a>
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-instagram"></i></a>
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-twitter"></i></a>

                </div>
            </div>
        </div>
        <!-- footer end -->
    </div>
</body>
</html>