<!DOCTYPE html>
<html lang="id">

<head>
    <title>@yield('title',)</title>
    <!-- Meta tag Keywords -->
    <link rel="canonical" href="@yield('canonical')" />
    <link rel="shortcut icon" href="{{ URL::current() }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="Description" content="@yield('meta')">
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->
    <link rel="stylesheet" href="{{url('fontawesome/css/all.min.css')}}">

    @extends('layout.css.bootstrap')
    @extends('layout.css.styles')
</head>

<body>
    <!-- header -->
    <header id="home">
        <!-- top-bar -->
        <div class="top-bar py-2 border-bottom">
            <div class="container">
                <div class="row middle-flex">
                    <div class="col-xl-7 col-md-5 top-social-agile mb-md-0 mb-1 text-lg-left text-center">
                        <div class="row">
                            <div class="col-xl-3 col-6 header-top_w3layouts">
                                <p class="text-da">
                                    <span class=""></span>Whanadiva Djaya
                                </p>
                            </div>
                            <div class="col-xl-3 col-6 header-top_w3layouts">
                                <p class="text-da">
                                    <span class="fas fa-phone mr-2"></span>+62 857-7503-5449
                                </p>
                            </div>
                            <div class="col-xl-6"></div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-7 top-social-agile text-md-right text-center pr-sm-0 mt-md-0 mt-2">
                        <div class="row middle-flex">
                            <div class="col-lg-5 col-4 top-w3layouts p-md-0 text-right">
                                <!-- login 
                                <a href="login.html" class="btn login-button-2 text-uppercase text-wh">
                                    <span class="fa fa-sign-in mr-2"></span>Login</a>
                                 //login -->
                            </div>
                            <div class="col-lg-7 col-8 social-grid-w3">
                                <!-- social icons -->
                                <ul class="top-right-info">
                                    <li>
                                        <p>Media Sosial:</p>
                                    </li>
                                    <li class="facebook-w3">
                                        <a href="#facebook">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li class="twitter-w3">
                                        <a href="#twitter">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li class="google-w3">
                                        <a href="#google">
                                            <span class="fab fa-google-plus"></span>
                                        </a>
                                    </li>
                                    <li class="dribble-w3">
                                        <a href="#dribble">
                                            <span class="fab fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- //social icons -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- //top-bar -->

    <!-- header 2 -->
    <!-- navigation -->
    <div class="main-top py-1">
        <div class="container">
            <div class="nav-content">
                <!-- logo -->
                <h1>
                    <a id="logo" class="logo" href="index.html">
                        <img src="{{url('images/whanadiva-logo-ice-cream-diamond.png')}}"
                            alt="logo whanadiva agen ice cream diamond" class="img-fluid"><span>Agen</span> Ice Cream
                    </a>
                </h1>
                <!-- //logo -->
                <!-- nav -->
                <div class="nav_web-dealingsls">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="{{url('/')}}">Beranda</a></li>
                            <li><a href="{{url('/tentang')}}">Tentang Kami</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-3" class="toggle toogle-2">Halaman <span class="fa fa-angle-down"
                                        aria-hidden="true"></span>
                                </label>
                                <a href="#pages">Pages <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-3" />
                                <ul>
                                    <li><a class="drop-text" href="#services">Servis</a></li>
                                    <li><a class="drop-text" href="{{url('/blog')}}">Blog</a></li>
                                    <li><a class="drop-text" href="{{url('/Masuk')}}">Masuk</a></li>
                                    <li><a class="drop-text" href="{{url('/Pendaftaran')}}">Daftar</a></li>
                                </ul>
                            </li>
                            <li><a href="menu.html">Menu</a></li>
                            <li><a href="{{url('/contact')}}">Kontak</a></li>
                            <li>
                                <!-- login -->
                                <a rel="noreferrer"
                                    href="https://www.google.com/maps/dir/-6.165286,106.8532384/whanadiva/@-6.1645793,106.8512323,16z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e69f5a17822a50d:0x89903cb316b4b6e2!2m2!1d106.8586664!2d-6.1603352"
                                    target="_blank" class="dwn-button ml-lg-5">
                                    <span class="fa fa-arrow-circle-right mt-lg-0 mt-4" aria-hidden="true">Map</span>
                                </a>
                                <!-- //login -->
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </div>
    <!-- //navigation -->
    <!-- //header 2 -->

    @yield('container')

    <!-- footer -->
    <footer class="py-5">
        <div class="container py-xl-4">
            <div class="row footer-top">
                <div class="col-lg-4 footer-grid_section_1its footer-text">
                    <!-- logo -->
                    <h2>
                        <a class="logo text-wh" href="{{url('/')}}">
                            <img src="{{url('images/whanadiva-logos.png')}}" alt="" class="img-fluid"><span>Agen</span>
                            Ice Cream
                        </a>
                    </h2>
                    <!-- //logo -->
                    <p class="mt-lg-4 mt-3 mb-lg-5 mb-4">Whanadiva adalah agen ice cream diamond yang melayani berbagai
                        macam acara pesta, Seperti Pernikahan dan lain lain.</p>
                    <!-- social icons -->
                    <ul class="top-right-info">
                        <li>
                            <p>Follow As:</p>
                        </li>
                        <li class="facebook-w3">
                            <a href="#facebbok">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="twitter-w3">
                            <a href="#twitter">
                                <span class="fab fa-twitter"></span>
                            </a>
                        </li>
                        <li class="google-w3">
                            <a href="#google">
                                <span class="fab fa-google-plus"></span>
                            </a>
                        </li>
                        <li class="dribble-w3">
                            <a href="#dribble">
                                <span class="fab fa-dribbble"></span>
                            </a>
                        </li>
                    </ul>
                    <!-- //social icons -->
                </div>
                <div class="col-lg-4 footer-grid_section_1its my-lg-0 my-sm-4 my-4">
                    <div class="footer-title">
                        <h3>Kontak Kami</h3>
                    </div>
                    <div class="footer-text mt-4">
                        <p>Alamat : JL.bendungan Jago RT 004/003 NO 2 serdang Kemayoran jakarta pusat</p>
                        <p class="my-2">Tlp : +62 857-7503-5449</p>
                        <p>Email : <a href="mailto:cs@whanadiva.com">cs@whanadiva.com</a></p>
                    </div>
                    <div class="footer-title mt-4 pt-md-2">
                        <h3>Metode Pembayaran</h3>
                    </div>
                    <ul class="list-unstyled payment-links mt-4">
                        <li>
                            <a href="{{url('/masuk')}}"><img src="images/pay2.png" alt=""></a>
                        </li>
                        <li>
                            <a href="{{url('/masuk')}}"><img src="images/pay5.png" alt=""></a>
                        </li>
                        <li>
                            <a href="{{url('/masuk')}}"><img src="images/pay1.png" alt=""></a>
                        </li>
                        <li>
                            <a href="{{url('/masuk')}}"><img src="images/pay4.png" alt=""></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 footer-grid_section_1its">
                    <div class="footer-title">
                        <h3>Request Info</h3>
                    </div>
                    <div class="info-form-right mt-4 p-0">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-lg-6 form-group mb-2 pr-lg-1">
                                    <input type="text" class="form-control" name="Name" placeholder="Name" required="">
                                </div>
                                <div class="col-lg-6 form-group mb-2 pl-lg-1">
                                    <input type="text" class="form-control" name="Phone" placeholder="Phone"
                                        required="">
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <input type="email" class="form-control" name="Email" placeholder="Email" required="">
                            </div>
                            <div class="form-group mb-2">
                                <textarea name="Comment" class="form-control" placeholder="Comment"
                                    required=""></textarea>
                            </div>
                            <button type="submit" class="btn submit-contact ml-auto">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="cpy-right text-center py-3">
        <p>© 2020 Whanadiva. All rights reserved | Agen Ice Cream Diamond
            <a href="#"> Syarat & Ketentuan</a>
        </p>
    </div>
    <!-- //copyright -->
    <!-- move top icon -->
    <a href="#home" class="move-top text-center">
        <span class="fas fa-gem" aria-hidden="true"></span>
    </a>
    <!-- //move top icon -->

</body>

</html>