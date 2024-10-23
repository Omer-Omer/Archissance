@extends('layouts.master')

@push('header')
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">

    <style>
        .about-us h3 {
            color: black;
            font-family: 'Lato', sans-serif !important;
        }
        .about-us .about-heading {
            font-size: 30px;
            font-weight: bolder;
        }
        .about-us p {
            font-family: 'Lato', sans-serif !important;
            font-weight: bold;
            line-height: 2.3em;
            text-align: justify;
            font-size: 17px;
        }
        .c-btn {
            color: white;
            background-color: red;
            padding: 14px 35px;
        }
        .c-btn:hover {
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
    <div class="container about-us mt-5">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="row g-5">
                    <div class="col-12 col-md-9">

                        <div class="row">
                            <div class="col-12 offset-md-1 col-md-9">
                                <h3 class="pb-5 about-heading">About Archissance</h3>

                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img class="img-fluid" src="https://static.wixstatic.com/media/e31381_bef65392edd64c5d8682e45650ad78f0~mv2.jpg/v1/crop/x_537,y_0,w_420,h_605/fill/w_263,h_378,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/website%20office%20photo.jpg" alt="">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p>
                                            Established in 2002 as Archissance Design Group (ADG) was founded by S. Samir Hijazi, Managing
                                            Principal and Wayne T. Fukuda, Architect. Archissance is a multi-discipline design firm offering
                                            design services in commercial, industrial and residential sectors. Our clients include private
                                            individuals, corporate entities, and public agencies.
                                        </p>
                                    </div>

                                    <div class="col-12 col-md-10">
                                        <p class="pt-3">
                                            archissance harvests its experience through its principals’ and associates’ excellent design
                                            abilities, competent technical experience, and vast project portfolio. Our approach to projects is
                                            enhanced by fostering exciting design, synergy within the team, and strong professional ethics.
                                        </p>
                                        <p>
                                            Our staff and associates includes licensed architects, interior architects, and computer-aided
                                            designers. Our associates are some of the most experienced in the industry with decades of
                                            experience in their respective professional disciplines. Our demonstrated ability to assemble
                                            project teams with highly relevant technical competencies based on projects unique criteria and set
                                            of challenges will yield successful projects to our clients. Our clients will benefit from our solid
                                            relationship with our associates to handle complex projects.
                                        </p>

                                        <a class="btn c-btn" href="">Contact Us</a>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-md-3">
                        @include('includes.page-sidebar')
                    </div>
                </div>
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
