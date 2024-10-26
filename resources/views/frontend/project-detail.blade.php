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
        }
        .project-detail-section .off-heading {
            font-size: 30px;
            font-weight: bolder;
            /* padding: 30px 0px 30px 0px; */
        }
        .project-detail-section .content {
            line-height: 1.5em !important;
        }

        .project-detail-section .btn {
            color: white;
            background-color: red;
            padding: 14px 35px;
            border: 0px;
        }
        .project-detail-section .btn:hover {
            color: white;
            background-color: black;
        }

    </style>
    <style>
        .image-container-1 {
            position: relative;
            overflow: hidden;
            width: 100%; /* Make div responsive */
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
            color: white; /* Text color */
            font-size: 18px; /* Adjust title size */
            font-weight: 500;
            /* background-color: rgba(0, 0, 0, 0.5); */
            padding: 5px 10px; /* Adjust padding */
            border-radius: 5px; /* Optional: for rounded corners */
            opacity: 0; /* Initially hidden */
            transition: opacity 0.3s ease;
        }

        .image-container-1:hover .image-title {
            opacity: 1; /* Show title on hover */
        }

        .image-container-1:hover .heart-icon {
            opacity: 1;
            /* Show heart on hover */
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
                        slider
                    </div>
                    {{-- <div class="row">

                    </div>

                    <div class="col-12 offset-md-1 col-md-10">
                    </div> --}}

                </div>
            </div>

            <div class="col-12 offset-md-1 col-md-10">
                descriotion
            </div>

        </div>
    </div>
@endsection


@push('footer')
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>

    <script>
        $(document).ready(function() {
            $('.single-item').slick({
                dots: true, // Show dots
                infinite: true, // Infinite looping
                speed: 500, // Transition speed
                autoplay: false,
                slidesToShow: 1, // Show one slide at a time
                slidesToScroll: 1, // Scroll one slide at a time
                prevArrow: '<button type="button" class="slick-prev"><img src="/images/back_1.png" alt="Previous"></button>',
                nextArrow: '<button type="button" class="slick-next"><img src="/images/forward_1.png" alt="Next"></button>',
                responsive: [{
                    breakpoint: 768, // Mobile breakpoint
                    settings: {
                        arrows: false, // Hide arrows on mobile
                        dots: true // Show dots on mobile
                    }
                }]
            });
        });

        $('.multiple-items').slick({
            // infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: '<button type="button" class="slick-prev">Previous</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            responsive: [{
                    breakpoint: 768, // Adjust this breakpoint as needed
                    settings: {
                        slidesToShow: 1, // Number of slides to show on larger screens
                    }
                },
                {
                    breakpoint: 1024, // Adjust this breakpoint as needed
                    settings: {
                        slidesToShow: 3, // Number of slides to show on even larger screens
                    }
                }
                // Add more breakpoints and settings as necessary
            ]
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
