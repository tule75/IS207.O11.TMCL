<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <!-- <link rel="stylesheet" href="{{asset('css/home.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/cart.css')}}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="{{asset('css/user.css')}}"> -->
    <link rel="stylesheet" href="{{ asset('css/profile.css')}}">
    <!-- Styles -->
        <!-- <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style> -->
<body>
    <div class="cartier">
        <!-- header start -->
        <div class="header">
            <div class="header-notice">
                <p>Enjoy wrap-gift standard shipping. <span class=""><a class="has-link return-link">Click here to learn
                            more about returns and exchanges.</a></span></p>
            </div>

            <div class="main-header">
                <ul class="nav-left">
                    <li class="nav-left--item"><a href="" class="has-link nav-hover">Home</a></li>
                    <li class="nav-left--item"><a href="" class="has-link nav-hover">Contact Us</a></li>
                    <li class="nav-left--item"><a href="" class="has-link nav-hover">Services</a></li>
                </ul>

                <div class="logo">
                    <a href="/"><img class="logo-img" src="{{ asset('img/Screenshot_2023-10-16_121457-removebg.png')}}" alt=""></a>
                </div>

                <div class="nav-right">
                    <div class="nav-right--item"><i class="fa fa-heart"></i></div>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/profile') }}" style="margin: 0; text-decoration: inherit; color: inherit;"><div class="nav-right--item"><i class="fa fa-user"></i></div></a>
                            <a href="{{Route('cart.index')}}" style="margin: 0; text-decoration: inherit; color: inherit;"><div class="nav-right--item"><i class="fa fa-cart-plus"></i></div></a>
                        @else
                            <a href="{{ url('/login') }}" style="margin: 0"><div class="nav-right--item"><i class="fa fa-user"></i></div></a>
                            <a href="{{ url('/login') }}" style="margin: 0"><div class="nav-right--item"><i class="fa fa-cart-plus"></i></div></a>
                        @endauth
                    @endif
                </div>
            </div>

            <div class="sub-navbar">
                <div class="watch-collection--item">Colect</div>
                <div class="watch-collection--item">Colect</div>
                <div class="watch-collection--item">Colect</div>
                <div class="watch-collection--item">Colect</div>
                <div class="watch-collection--item">Colect</div>
            </div>

        </div>
        <!-- header end -->
        <!--welcom-->
        <div class="banner">
                <div class="banner-introduction">
                    <img class="pagination-img" src="{{ asset('img/leather.png') }}" alt="">
                    <h5>WELCOME</h5>
                    <div>Manage your personal data and the newsletter subscription.</div>
                </div>
            </div>
        <!--body-->
        <div class="body">
            <div class="slidebar">
                <h2>MY UITER</h2>
                <ul class="menu">
                    <li class="watch-collection--item" id="show_overview">OVERVIEW</li>
                    <li class="watch-collection--item"id="show_profile">MY PROFILE</li>
                    <li class="watch-collection--item" id="show_password">MY PASSWORD</li>
                    <li class="watch-collection--item" id="show_order">MY ORDERS</li>
                    <li class="watch-collection--item" id="show_wishlist">MY WISH LIST</li>
                    <li class="watch-collection--item" id="show_address">MY ADDRESSES</li>
                    <li class="watch-collection--item" id="show_collection">MY COLLECTION</li>
                    <li class="watch-collection--item" id="show_subscription">MY SUBSCRIPTIONS & INTERESTS</li>
                    <form action="{{ Route('logout')}}" method="POST">
                        @csrf
                        <li class="watch-collection--item"><button class="menu-bt">LOG OUT</button></li>
                    </form>
                </ul>
            </div>
            <div class="bd-content">
                <div class="grid-container" id="overview">
                    <div class="grid-item">
                        <h3 class="content" style="text-shadow: 0 0 3px #FFFFFF">MY PROFILE</h3>
                        <div class="content">{{$user->name}}</div>
                        <div class="content">{{$user->email}}</div>
                    </div>
                    <div class="grid-item">
                        <h3 class="content">MY ORDERS</h3>
                        <div class="content">You have not previously ordered as a registered customer.</div>
                    </div>
                    <div class="grid-item">
                        <h3 class="content">MY WISH LIST</h3>
                        <div class="content">
                            <div class="count">
                            <p>*Count item here</p>
                        </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <h3 class="content">MY ADDRESSES</h3>
                        <div class="content">Default Address</div>
                        <div><a href="" class="content">View all addresses</a></div>
                    </div>
                </div>
                <div id="profile">@include('profile.partials.profile')</div>
                <div id="password">@include('profile.partials.password')</div>
                <div id="order">@include('profile.partials.orders')</div>
                <div id="wishlist">@include('profile.partials.wishlist')</div>
                <div id="address"> @include('profile.partials.address')</div>
                <div class="bd-content" id="collection">@include('profile.partials.collection')</div>
                <div class="bd-content" id="subscription">@include('profile.partials.subcription')</div>
            </div>
        </div>
        @include('chatbox.chatbox');
        <!-- footer start -->
        <div class="footer">
            <ul class="footer-list">
                <li class="footer-list--item">
                    <h3>CUSTOMER CARE</h3>
                </li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <ul class="footer-list">
                <li class="footer-list--item">
                    <h3>CUSTOMER CARE</h3>
                </li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <ul class="footer-list">
                <li class="footer-list--item">
                    <h3>CUSTOMER CARE</h3>
                </li>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const deleteitems = document.querySelectorAll(".delete");
    const cartitems = document.querySelectorAll(".product-container");

    deleteitems.forEach(deleteitem => {
        deleteitem.addEventListener('click', () => {
            confirm('Bạn có chắc chắn xóa hay không ?');
        })
    })

    const productObjects = document.querySelectorAll('.product-object');
    const counter= document.querySelector('.count');
    counter.innerHTML = productObjects.length +" "+ "items";
    console.log(productObjects.length)
</script>

<script>
    $(document).ready(function() {
        // Ẩn tất cả các mục khi trang tải
        $('#password, #wishlist, #profile, #order, #collection, #subscription, #address').hide();

        // Xử lý sự kiện khi click nút "Hiển thị Password"
        $('#show_password').click(function() {
            $('#password').show();
            $('#wishlist').hide(); // Ẩn các mục khác nếu cần
            $('#profile').hide();
            $('#order').hide();
            $('#collection').hide();
            $('#subscription').hide();
            $('#address').hide();
            $('#overview').hide();
        });
        $('#show_wishlist').click(function() {
            $('#password').hide();
            $('#wishlist').show(); // Ẩn các mục khác nếu cần
            $('#profile').hide();
            $('#order').hide();
            $('#collection').hide();
            $('#subscription').hide();
            $('#address').hide();
            $('#overview').hide();
        });

        $('#show_profile').click(function() {
            $('#password').hide();
            $('#wishlist').hide(); // Ẩn các mục khác nếu cần
            $('#profile').show();
            $('#order').hide();
            $('#collection').hide();
            $('#subscription').hide();
            $('#address').hide();
            $('#overview').hide();
        });
        $('#show_order').click(function() {
            $('#password').hide();
            $('#wishlist').hide(); // Ẩn các mục khác nếu cần
            $('#profile').hide();
            $('#order').show();
            $('#collection').hide();
            $('#subscription').hide();
            $('#address').hide();
            $('#overview').hide();
        });
        $('#show_collection').click(function() {
            $('#password').hide();
            $('#wishlist').hide(); // Ẩn các mục khác nếu cần
            $('#profile').hide();
            $('#order').hide();
            $('#collection').show();
            $('#subscription').hide();
            $('#address').hide();
            $('#overview').hide();
        });
        $('#show_subscription').click(function() {
            $('#password').hide();
            $('#wishlist').hide(); // Ẩn các mục khác nếu cần
            $('#profile').hide();
            $('#order').hide();
            $('#collection').hide();
            $('#subscription').show();
            $('#address').hide();
            $('#overview').hide();
        });
        $('#show_address').click(function() {
            $('#password').hide();
            $('#wishlist').hide(); // Ẩn các mục khác nếu cần
            $('#profile').hide();
            $('#order').hide();
            $('#collection').hide();
            $('#subscription').hide();
            $('#address').show();
            $('#overview').hide();
        });
        $('#show_overview').click(function() {
            $('#password').hide();
            $('#wishlist').hide(); // Ẩn các mục khác nếu cần
            $('#profile').hide();
            $('#order').hide();
            $('#collection').hide();
            $('#subscription').hide();
            $('#address').hide();
            $('#overview').show();
        });
    });
</script>

</html>