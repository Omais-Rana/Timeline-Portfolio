@extends('layouts.app')
<title>Contact</title>
<style>
    .black-bg {
        background-color: #0a0a0a !important;
    }

    p,
    h2,
    h3 {
        color: #fff !important;
    }

    .navbar_container {
        padding-top: 10px;
    }

    .typo-logo {
        font-size: 2.8rem !important;
    }

    .navbar_menu {
        font-size: 1.6rem !important;
        gap: 10px !important;
    }

    .w-button {
        padding: 1.2rem 2rem !important;
        font-size: 1.5rem !important;
    }

    .w-button:hover {
        color: #0a0a0a;
    }

    .btn {
        background: #eba901 !important;
    }

    .btn:hover {
        color: #eba901 !important;
        background: #0a0a0a !important;
    }

    .footer-bottom {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
        font-size: 1.25rem !important;
    }

    .ion-chevron-up {
        margin-top: 1px;
    }

    @media screen and (max-width: 768px) {
        .navbar_link {
            padding: 1.5rem 0rem !important;
            font-size: 1.8rem !important;
        }
    }
</style>
@section('content')
    <!-- All CSS Files Here -->
    <link rel="stylesheet" href="{{ asset('assets/assets2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets2/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets2/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets2/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets2/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets2/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets2/css/responsive.css') }}">
    <script src="{{ asset('assets/assets2/js/vendor/modernizr-2.8.3.min.js') }}"></script>


    <!-- Add your site or application content here -->
    <!-- PRELOADER -->
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <!-- /PRELOADER -->

    <!-- basic-breadcrumb start -->
    <div class="basic-breadcrumb-area black-bg pt-130 pb-0">
        <div class="container">
            <div class="basic-breadcrumb text-center">
                <h3 class="">Contact Us</h3>
                <ol class="breadcrumb text-xs">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- basic-breadcrumb end -->

    <div class="basic-contact-form pt-60 black-bg">
        <div class="container">
            <div class="area-title text-center">
                <h2>Let’s talk</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto
                    eos est expedita, quas ab adipisci.</p>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <form id="contact-form" action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="sr-only">First Name</label>
                                <input type="text" class="form-control input-lg" name="name" placeholder="First Name">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="sr-only">Email</label>
                                <input type="email" class="form-control input-lg" name="email" placeholder="Email">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="sr-only">Subject</label>
                                <input type="text" class="form-control input-lg" name="subject" placeholder="Subject">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control input-lg" rows="7" name="message" placeholder="Message*"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-lg btn-round">Send Email</button>
                            </div>

                        </div><!-- .row -->
                    </form>
                    <!-- Ajax response -->
                    <div class="ajax-response text-center"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- All js plugins here -->
    <script src="{{ asset('assets/assets2/js/vendor/jquery-1.12.0.min.js') }}"></script>
    <script src="{{ asset('assets/assets2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/assets2/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/assets2/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/assets2/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/assets2/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/assets2/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/assets2/js/main.js') }}"></script>
@endsection
