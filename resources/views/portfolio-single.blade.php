@extends('layouts.app')
<title>Portfolio Details</title>
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

    <!-- PRELOADER -->
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <!-- /PRELOADER -->

    <!-- basic-breadcrumb start -->
    <div class="basic-breadcrumb-area black-bg pt-130 pb-0">
        <div class="container">
            <div class="basic-breadcrumb text-center">
                <h3 class="">{{ $projects->project_title }}</h3>
                <ol class="breadcrumb text-xs">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/portfolio') }}">Portfolio</a>
                    </li>
                    <li class="active">details</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- basic-breadcrumb end -->

    <!-- basic-portfolio-area start -->
    <div class="portfolio-details-area black-bg pt-115 pb-70">
        <div class="container">
            <div class="row">
                <?php $images = json_decode($projects->project_images); ?>
                @foreach ($images as $image)
                    <div class="col-md-4 col-sm-6 mb-30">
                        <div class="portfolio-full-img">
                            <a class="popup-link" href="{{ Voyager::image($image) }}"><img
                                    src="{{ Voyager::image($image) }}" alt="" /></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-12">
                <div class="portfolio-full-img">
                    <img src="img/portfolio/details/2.jpg" alt="" />
                </div>
                <div class="portfolio-details mt-30">
                    <h2>{{ $projects->project_description }}</h2>
                    <p>{{ $projects->project_detail }} </p>
                </div>
            </div>
        </div>
    </div>
    <!-- basic-portfolio-area end -->

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
