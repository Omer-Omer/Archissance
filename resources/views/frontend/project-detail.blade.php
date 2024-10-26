@extends('layouts.master')

@push('header')
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">

    <style>
        .project-detail-section h3 {
            color: black;
            font-family: 'Lato', sans-serif !important;
        }

        .project-detail-section .main-heading {
            color: #808080;
            font-size: 30px;
            font-weight: bolder;
            margin-bottom: 25px;
        }

        .project-detail-section .off-heading {
            font-size: 20px;
            font-weight: bolder;
            /* padding: 30px 0px 30px 0px; */
        }

        .project-detail-section .content {
            line-height: 1.5em !important;
            color: #808080;
            margin-bottom: 30px;
        }
        .project-detail-section .content p {
            line-height: 2.3em;
            text-align: justify;
        }

        .project-detail-section .more-description {
            color: #808080;
            line-height: 2.3em;
            text-align: justify;
            margin-top: 25px;
        }
        .project-detail-section .btn {
            color: white;
            background-color: red;
            padding: 10px 40px;
            border: 0px;
        }

        .project-detail-section .btn:hover {
            color: white;
            background-color: black;
        }

        @media(max-width:768px ) {
            .project-detail-section .main-heading {
                margin-bottom: 25px;
            }
            .project-detail-section .off-heading {
                font-size: 16px;
            }
        }
    </style>
    <style>
        .image-container-1 {
            position: relative;
            overflow: hidden;
            width: 100%;
            /* Make div responsive */
            /* max-width: 500px;  */
            /* height: 150px; */
            border-radius: 10px;
        }

        .image-container-1 img {
            width: 100%;
            height: 100%;
            transition: transform 0.3s ease, filter 0.3s ease;
            object-fit: cover;
            /* Smooth zoom and red tint */
        }

        .image-container-1:hover img {
            transform: scale(1.1);
            /* Zoom on hover */
            filter: brightness(50%) sepia(100%) hue-rotate(330deg);
            /* Red tint effect */
        }

        .heart-icon {
            position: absolute;
            bottom: 10px;
            left: 10px;
            font-size: 24px;
            /* Adjust icon size */
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .image-title {
            position: absolute;
            top: 10px;
            left: 10px;
            color: white;
            /* Text color */
            font-size: 18px;
            /* Adjust title size */
            font-weight: 500;
            /* background-color: rgba(0, 0, 0, 0.5); */
            padding: 5px 10px;
            /* Adjust padding */
            border-radius: 5px;
            /* Optional: for rounded corners */
            opacity: 0;
            /* Initially hidden */
            transition: opacity 0.3s ease;
        }

        .image-container-1:hover .image-title {
            opacity: 1;
            /* Show title on hover */
        }

        .image-container-1:hover .heart-icon {
            opacity: 1;
            /* Show heart on hover */
        }
    </style>
    <style>
        .slider-for img,
        .slider-nav img {
            width: 100%;
            cursor: pointer;
        }

        .slider-nav {
            margin-top: 10px;
        }

        .slider-nav .slick-slide {
            opacity: 0.5;
        }

        .slider-nav .slick-current {
            opacity: 1;
        }

        .slider-nav .slick-slide {
            padding: 5px;
            /* Adjust the padding as needed */
            box-sizing: border-box;
        }
    </style>
@endpush
@section('content')
    <div class="container project-detail-section mt-5">
        <div class="row">
            <div class="col-12 offset-md-1 col-md-10">
                <div class="row g-5">

                    <div class="col-12 col-md-6">

                        <h3 class="main-heading"> PROJECTS</h3>

                        <div class="content">
                            <h3 class="off-heading"> PROJECT NAME: </h3>
                            <p>{{ $project->name ?? '' }}</p>
                        </div>
                        <div class="content">
                            <h3 class="off-heading"> PROJECT LOCATION: </h3>
                            <p>{{ $project->location ?? '' }}</p>
                        </div>
                        <div class="content">
                            <h3 class="off-heading">PROJECT DESCRIPTION:</h3>
                            <p>{!! $project->description ?? '' !!}</p>
                        </div>

                    </div>

                    <div class="col-12 col-md-6">
                        <!-- Main Slider -->
                        <div class="slider-for">
                            @foreach ($images as $image)
                                <div>
                                    <img src="{{ $image->getUrl() }}" alt="Project Image">
                                </div>
                            @endforeach
                        </div>

                        <!-- Thumbnail Slider -->
                        <div class="slider-nav">
                            @foreach ($images as $image)
                                <div>
                                    <img src="{{ $image->getUrl('thumb') }}" alt="Project Thumbnail">
                                    <!-- 'thumb' is a conversion name, change as needed -->
                                </div>
                            @endforeach
                        </div>

                    </div>
                    {{-- <div class="row">

                    </div>

                    <div class="col-12 offset-md-1 col-md-10">
                    </div> --}}

                </div>
            </div>

            <div class="col-12 offset-md-1 col-md-10">
                <div class="more-description">
                    {!! $project->more_description ?? '' !!}
                </div>
                <div>
                    <a class="btn btn-primary" href="{{ url('/projects?type=1') }}">View all works</a>
                </div>
            </div>

        </div>
    </div>
@endsection


@push('footer')
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>

    <script>
        $(document).ready(function() {
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                fade: true,
                asNavFor: '.slider-nav'
            });

            $('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: false,
                centerMode: true,
                focusOnSelect: true
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".new-product-carousel").slick({
                autoplaySpeed: 800,
                // autoplay: false,
                slidesToShow: 5,
                slidesToScroll: 1,
                arrows: true,
                responsive: [{
                    breakpoint: 639,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });
        });
    </script>
@endpush
