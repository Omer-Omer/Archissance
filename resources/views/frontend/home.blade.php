@extends('layouts.master')

@push('header')
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">

    <style>
        .multiple-items .view-all-grid {
            position: relative;
            height: 453px;
            background-color: #80808014;
        }

        .multiple-items .view-all-grid a {
            background: #fff;
            font-size: 22px;
            padding: 10px 20px;
            position: absolute;
            text-align: center;
            top: 50%;
            left: 30%;
            text-decoration: none;
            color: black;
        }

        .multiple-items .slick-prev:before,
        .slick-next:before {
            color: #3e3e3e !important;
            /* content: ''; */
        }

        .multiple-items .slick-prev {
            left: -6px !important;
        }

        .multiple-items .slick-next {
            right: -6px !important;
        }

        .new-product-carousel .slick-prev:before,
        .slick-next:before {
            color: #3e3e3e !important;
        }
    </style>

    <style>
        .banner-section .slider-item {
            position: relative;
            text-align: center;
            color: white;
        }

        .banner-section .text-overlay {
            position: absolute;
            top: 250px;
            right: -10%;
            transform: translateX(-50%);
            z-index: 10;
        }

        .banner-section .text-box {
            background-color: rgb(0 0 0 / 35%);
            /* Semi-transparent background for the text box */
            color: white;
            border-radius: 1px;
            padding: 15px !important;
        }

        .banner-section .text-box .banner-content h2 {
            text-align: left;
            margin-bottom: 15px;
            font-family: "Lato", sans-serif !important;
            font-size: 30px;
            font-weight: 500;
        }

        .banner-section .text-box .lm-btn {
            text-align: left;
            padding: 20px 0px 0px 0px;
        }

        .banner-section .text-box .lm-btn a {
            border: 1px solid white;
            color: white;
        }

        .banner-section .text-box .lm-btn a:hover {
            border: 0px solid white;
            background-color: red;
        }

        .banner-section .slider img {
            width: 100%;
            height: auto;
        }

        .banner-section .slick-prev,
        .slick-next {
            background: none;
            /* Remove default button background */
            border: none;
            /* Remove default border */
            outline: none;
            /* Remove outline */
            position: absolute;
            /* Positioning arrows */
            top: 50%;
            /* Center vertically */
            transform: translateY(-50%);
            /* Center vertically */
            z-index: 1000;
            /* Ensure arrows are on top */
        }

        .banner-section .slick-prev {
            left: 30px;
            /* Position left arrow */
        }

        .banner-section .slick-next {
            right: 30px;
            /* Position right arrow */
        }

        .banner-section .slick-prev img,
        .slick-next img {
            width: 30px;
            /* Set arrow image size */
            height: auto;
            /* Maintain aspect ratio */
            display: block;
            /* Ensure images are treated as block elements */
        }

        /* Dots styling */
        .banner-section .slick-dots {
            display: none !important;
        }

        .banner-section .slick-prev:before,
        .slick-next:before {
            content: '' !important;
        }

        @media(max-width: 768px) {
            .banner-section .slider img {
                height: 300px !important;
            }

            .banner-section .text-box {
                background-color: rgb(0 0 0 / 35%) !important;
            }

            .banner-section .text-overlay {
                left: 50% !important;
                bottom: 0px !important;
                top: 10% !important;
                width: 95% !important;
            }

            .banner-section .text-box .banner-content h2 {
                text-align: center;
                font-size: 20px;
                font-weight: 400;
                margin-bottom: 10px;
            }

            .banner-section .text-box .lm-btn {
                text-align: center;
                padding: 10px 0px 0px 0px;
            }

            .banner-section .text-box .lm-btn a {
                font-size: 14px !important;
                padding: 7px 25px !important;
                border: 2px solid white;
            }

            .banner-section .slick-dots {
                display: block !important;
                bottom: 0px !important;
            }

            .banner-section .slick-dots li {
                margin: 0px !important;
            }

            .banner-section .slick-dots li.slick-active button:before {
                opacity: 1 !important;
                color: white !important;
            }

            .banner-section .slick-dots li button:before {
                opacity: .4 !important;
                color: white !important;
            }
        }
    </style>
@endpush
@section('content')
    <section class="banner-section">
        <div class="slider single-item">

            @forelse ($banners as $ban)
                <div>
                    <div class="slider-item position-relative">
                        <img class="d-none d-md-block" src="{{ $ban->getFirstMediaUrl('homeBannerImages') }}"
                            alt="Slider Image" class="img-fluid" />
                        <img class="d-block d-md-none" src="{{ $ban->getFirstMediaUrl('homeBannerImages') }}"
                            alt="Slider Image" class="img-fluid" />
                        <div class="text-overlay">
                            <div class="text-box p-3">
                                <div class="banner-content">
                                    {!! $ban->description !!}
                                </div>
                                <div class="lm-btn">
                                    <a class="btn" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                {{-- @for ($i = 1; $i <= 3; $i++)
                    <div>
                        <div class="slider-item position-relative">
                            <img class="d-none d-md-block" src="{{ asset('images/banner_' . $i . '.jpg') }}"
                                alt="Slider Image {{ $i }}" class="img-fluid" />
                            <img class="d-block d-md-none" src="{{ asset('images/mb_banner_' . $i . '.webp') }}"
                                alt="Slider Image {{ $i }}" class="img-fluid" />
                            <div class="text-overlay">
                                <div class="text-box p-3">
                                    <h4>SYNERGETIC CLIENT RELATIONSHIP</h4>
                                    <h4>STRONG DESIGN ABILITY</h4>
                                    <h4>GREAT PROJECT RESULTS</h4>
                                    <div class="lm-btn">
                                        <a class="btn" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor --}}
            @endforelse
        </div>
    </section>

    <style>
        .content-section {}

        .content-section .main-heading {
            color: #404040;
            font-family: "Lato", sans-serif !important;
            font-weight: bold;
            letter-spacing: 0.1em;
        }

        .content-section p {
            font-family: "Lato", sans-serif !important;
            font-size: 12px !important;
            line-height: 2.5em !important;
        }

        @media(max-width: 768px) {
            .content-section p {
                font-size: 14px !important;
                text-align: center;
                line-height: 2.5;
                padding: 10px 15px;
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

        .c-img-6 img {
            height: 350px;
        }

        .c-img-78 img {
            height: 90px;
        }

        .mobile-sec {
            display: none;
        }

        @media(max-width:768px) {
            .mobile-sec .image-container-1 {
                height: 100px;
            }

            .desktop-sec {
                display: none;
            }

            .mobile-sec {
                display: flex;
            }
        }
    </style>

    <section class="main-section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-10">

                    <section class="content-section">
                        <div class="row d-flex align-items-center justify-content-center justify-content-md-start">
                            <div class="col-12 col-md-11">
                                <p>
                                    {!! $content->description !!}
                                </p>
                            </div>
                        </div>
                    </section>

                    <section class="content-section">
                        <div class="row d-flex align-items-center justify-content-center justify-content-md-start">
                            <div class="col-12 col-md-12">

                                <div class="pt-5 pb-3">
                                    <h3 class="main-heading lato-bold">FEATURED WORK </h3>
                                </div>

                                <div class="row g-3 desktop-sec">
                                    @if ($project_7)
                                        <div class="col-6 col-md-7">
                                            <a href="{{ url('/project-detail/' . $project_7->id) }}">
                                                <div class="image-container-1">
                                                    <img src="{{ $project_7->getFirstMediaUrl('featureImage') }}"
                                                        alt="Responsive Image">
                                                    <div class="image-title">{{ $project_7->name ?? '' }}</div>
                                                    <i class="fas fa-heart heart-icon"></i>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                    @if ($project_10)
                                        <div class="col-6 col-md-5">
                                            <a href="{{ url('/project-detail/' . $project_10->id) }}">
                                                <div class="image-container-1">
                                                    <img src="{{ $project_10->getFirstMediaUrl('featureImage') }}"
                                                        alt="Responsive Image">
                                                    <div class="image-title">{{ $project_10->name ?? '' }}</div>
                                                    <i class="fas fa-heart heart-icon"></i>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                    @if ($project_11)
                                        <div class="col-6 col-md-12">
                                            <a href="{{ url('/project-detail/' . $project_11->id) }}">
                                                <div class="image-container-1">
                                                    <img src="{{ $project_11->getFirstMediaUrl('featureImage') }}"
                                                        alt="Responsive Image">
                                                    <div class="image-title">{{ $project_11->name ?? '' }}</div>
                                                    <i class="fas fa-heart heart-icon"></i>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                    <div class="col-6 col-md-12">
                                        <div class="row g-3">
                                            <div class="col-md-5">
                                                @if ($project_8)
                                                    <a href="{{ url('/project-detail/' . $project_8->id) }}">
                                                        <div class="image-container-1">
                                                            <img src="{{ $project_8->getFirstMediaUrl('featureImage') }}"
                                                                alt="Responsive Image">
                                                            <div class="image-title">{{ $project_8->name ?? '' }}</div>
                                                            <i class="fas fa-heart heart-icon"></i>
                                                        </div>
                                                    </a>
                                                @endif
                                                @if ($project_13)
                                                    <a href="{{ url('/project-detail/' . $project_13->id) }}">
                                                        <div class="image-container-1 mt-3">
                                                            <img src="{{ $project_13->getFirstMediaUrl('featureImage') }}"
                                                                alt="Responsive Image">
                                                            <div class="image-title">{{ $project_13->name ?? '' }}</div>
                                                            <i class="fas fa-heart heart-icon"></i>
                                                        </div>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-md-7">
                                                @if ($project_14)
                                                    <a href="{{ url('/project-detail/' . $project_14->id) }}">
                                                        <div class="image-container-1 c-img-6">
                                                            <img src="{{ $project_14->getFirstMediaUrl('featureImage') }}"
                                                                alt="Responsive Image">
                                                            <div class="image-title">{{ $project_14->name ?? '' }}</div>
                                                            <i class="fas fa-heart heart-icon"></i>
                                                        </div>
                                                    </a>
                                                @endif
                                                <div class="row mt-3">
                                                    @if ($project_16)
                                                        <div class="col-12 col-md-6">
                                                            <a href="{{ url('/project-detail/' . $project_16->id) }}">
                                                                <div class="image-container-1 c-img-78">
                                                                    <img src="{{ $project_16->getFirstMediaUrl('featureImage') }}"
                                                                        alt="Responsive Image">
                                                                    <div class="image-title">{{ $project_16->name ?? '' }}
                                                                    </div>
                                                                    <i class="fas fa-heart heart-icon"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endif
                                                    @if ($project_15)
                                                        <div class="col-12 col-md-6">
                                                            <a href="{{ url('/project-detail/' . $project_15->id) }}">
                                                                <div class="image-container-1 c-img-78">
                                                                    <img src="{{ $project_15->getFirstMediaUrl('featureImage') }}"
                                                                        alt="Responsive Image">
                                                                    <div class="image-title">{{ $project_15->name ?? '' }}
                                                                    </div>
                                                                    <i class="fas fa-heart heart-icon"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($project_12)
                                        <div class="col-6 col-md-12">
                                            <a href="{{ url('/project-detail/' . $project_12->id) }}">
                                                <div class="image-container-1">
                                                    <img src="{{ $project_12->getFirstMediaUrl('featureImage') }}"
                                                        alt="Responsive Image">
                                                    <div class="image-title">{{ $project_12->name ?? '' }}</div>
                                                    <i class="fas fa-heart heart-icon"></i>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                </div>

                                {{-- <div class="row g-3 desktop-sec">
                                    <div class="col-6 col-md-7">
                                        <div class="image-container-1">
                                            <img src="{{ asset('images/featured_images/img_1.jpg') }}"
                                                alt="Responsive Image">
                                            <div class="image-title">Image 1</div>
                                            <i class="fas fa-heart heart-icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-5">
                                        <div class="image-container-1">
                                            <img src="{{ asset('images/featured_images/img_2.jpg') }}"
                                                alt="Responsive Image">
                                            <div class="image-title">Image 1</div>
                                            <i class="fas fa-heart heart-icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12">
                                        <div class="image-container-1">
                                            <img src="{{ asset('images/featured_images/img_3.jpg') }}"
                                                alt="Responsive Image">
                                            <div class="image-title">Image 1</div>
                                            <i class="fas fa-heart heart-icon"></i>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-12">
                                        <div class="row g-3">
                                            <div class="col-md-5">
                                                <div class="image-container-1">
                                                    <img src="{{ asset('images/featured_images/img_4.jpg') }}"
                                                        alt="Responsive Image">
                                                    <div class="image-title">Image 1</div>
                                                    <i class="fas fa-heart heart-icon"></i>
                                                </div>
                                                <div class="image-container-1 mt-3">
                                                    <img src="{{ asset('images/featured_images/img_5.jpg') }}"
                                                        alt="Responsive Image">
                                                    <div class="image-title">Image 1</div>
                                                    <i class="fas fa-heart heart-icon"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="image-container-1 c-img-6">
                                                    <img src="{{ asset('images/featured_images/img_6.jpg') }}"
                                                        alt="Responsive Image">
                                                    <div class="image-title">Image 1</div>
                                                    <i class="fas fa-heart heart-icon"></i>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-12 col-md-6">
                                                        <div class="image-container-1 c-img-78">
                                                            <img src="{{ asset('images/featured_images/img_7.jpg') }}"
                                                                alt="Responsive Image">
                                                            <div class="image-title">Image 1</div>
                                                            <i class="fas fa-heart heart-icon"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="image-container-1 c-img-78">
                                                            <img src="{{ asset('images/featured_images/img_8.jpg') }}"
                                                                alt="Responsive Image">
                                                            <div class="image-title">Image 1</div>
                                                            <i class="fas fa-heart heart-icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-12">
                                        <div class="image-container-1">
                                            <img src="{{ asset('images/featured_images/img_9.png') }}"
                                                alt="Responsive Image">
                                            <div class="image-title">Image 1</div>
                                            <i class="fas fa-heart heart-icon"></i>
                                        </div>
                                    </div>

                                </div> --}}

                                {{-- For Mobile --}}
                                <div class="row g-3 mobile-sec">

                                    @forelse ($projectList as $pl)
                                        <div class="col-6">
                                            <div class="image-container-1">
                                                <img src="{{ $pl->getFirstMediaUrl('featureImage') }}"
                                                    alt="Responsive Image">
                                                <div class="image-title">{{ $pl->name ?? '' }}</div>
                                                <i class="fas fa-heart heart-icon"></i>
                                            </div>
                                        </div>
                                    @empty
                                        @for ($i = 1; $i <= 8; $i++)
                                            <div class="col-6">
                                                <div class="image-container-1">
                                                    <img src="{{ asset('images/featured_images/mobile_image_' . $i . '.jpg') }}"
                                                        alt="Responsive Image">
                                                    <div class="image-title">Image 1</div>
                                                    <i class="fas fa-heart heart-icon"></i>
                                                </div>
                                            </div>
                                        @endfor
                                    @endforelse
                                </div>

                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>
@endsection


@push('footer')
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>

    <script>
        $(document).ready(function() {
            $('.single-item').slick({
                dots: true, // Show dots
                infinite: true, // Infinite looping
                speed: 500, // Transition speed
                autoplay: true,
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
