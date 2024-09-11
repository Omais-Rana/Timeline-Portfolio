@extends('layouts.app')
<title>Portfolio</title>
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

    <!-- basic-slider start -->
    <div class="basic-breadcrumb-area black-bg pt-130 pb-0">
        <div class="container">
            <div class="basic-breadcrumb text-center">
                <h3 class="">Portfolio</h3>
                <ol class="breadcrumb text-xs">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Projects</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- basic-slider end -->
    <!-- basic-portfolio-area start -->
    <div class="basic-portfolio-area pt-115 pb-120 black-bg">
        <div class="container">
            <div id="portfolio-grid" class="row-portfolio portfolio-style-2">
                @foreach ($projects as $project)
                    <div class="portfolio-item branding video">
                        <div class="portfolio-wrapper">
                            <a href="{{ route('portfolio.single', $project->slug) }}">
                                <div class="portfolio-thumb">
                                    <?php $images = json_decode($project->project_images); ?>

                                    <?php
                                    
                                    $firstImage = isset($images[0]) ? $images[0] : null;
                                    ?>
                                    @if ($firstImage)
                                        <img src="{{ Voyager::image($firstImage) }}" loading="lazy" alt="Project Image" />
                                    @endif
                                    <div class="view-icon">
                                        <a href="{{ route('portfolio.single', $project->slug) }}"><i
                                                class="ion-arrow-right-c"></i></a>
                                    </div>

                                </div>
                            </a>
                            <div class="portfolio-caption text-left">

                                <h4><a
                                        href="{{ route('portfolio.single', $project->slug) }}">{{ $project->project_title }}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
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
