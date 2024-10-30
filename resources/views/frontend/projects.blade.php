@extends('layouts.master')

@push('header')
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">

    <style>
        .project-section h3 {
            color: black;
            font-family: 'Lato', sans-serif !important;
        }
        .project-section .main-heading {
            color: #808080;
            font-size: 30px;
            font-weight: bolder;
        }
        .project-section .off-heading {
            font-size: 30px;
            font-weight: bolder;
            /* padding: 30px 0px 30px 0px; */
        }
        .project-section .content {
            line-height: 1.5em !important;
        }

        .project-section .btn {
            color: white;
            background-color: red;
            padding: 14px 35px;
            border: 0px;
        }
        .project-section .btn:hover {
            color: white;
            background-color: black;
        }

        .project-section .c-link {
            text-decoration: none;
        }
        .project-section #myTab {
            justify-content: end;
            border-bottom: 0px solid transparent;
        }

        .project-section .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            border: 0px;
            color: #808080 !important;
        }
        .project-section .nav-tabs .nav-link {
            color: #808080 !important;
        }
        @media(max-width:768px ) {
            .project-section .c-top-margin {
                margin-top: 30px !important;
            }
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
    <div class="container project-section mt-5">
        <div class="row">
            <div class="col-12 offset-md-1 col-md-10">
                <div class="row g-2">

                    <div class="col-12 col-md-4 c-top-margin">
                        <h2 class="main-heading">PROJECTS</h2>
                    </div>

                    <div class="col-12 col-md-8 c-top-margin">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link @if ($type == 1) active @endif" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Residential</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link @if ($type == 2) active @endif" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Industrial</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link @if ($type == 3) active @endif" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Commercial</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row my-4">
                   <div class="col-12">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade @if ($type == 1) show active @endif" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row g-3">
                                    @forelse ($residential as $res)
                                        <div class="col-6 col-md-4">
                                            <a class="c-link" href="@if($res->show_detail == 1) {{ url('/project-detail/'.$res->id) }} @else # @endif">
                                                <div class="image-container-1">
                                                    <img class="img-fluid" src="{{ $res->getFirstMediaUrl('projectImages') }}" alt="Responsive Image">
                                                    <div class="image-title">{{ $res->name ?? '' }}</div>
                                                    <i class="fas fa-heart heart-icon"></i>
                                                </div>
                                            </a>
                                        </div>
                                    @empty

                                    @endforelse
                                </div>
                            </div>
                            <div class="tab-pane fade @if ($type == 2) show active @endif" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row g-3">
                                    @forelse ($industrial as $ind)
                                        <div class="col-6 col-md-4">
                                            <a class="c-link" href="@if($res->show_detail == 1) {{ url('/project-detail/'.$ind->id) }} @else # @endif">
                                                <div class="image-container-1">
                                                    <img class="img-fluid" src="{{ $ind->getFirstMediaUrl('projectImages') }}" alt="Responsive Image">
                                                    <div class="image-title">{{ $ind->name ?? '' }}</div>
                                                    <i class="fas fa-heart heart-icon"></i>
                                                </div>
                                            </a>
                                        </div>
                                    @empty

                                    @endforelse
                                </div>
                            </div>
                            <div class="tab-pane fade @if ($type == 3) show active @endif" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row g-3">
                                    @forelse ($commercial as $com)
                                        <div class="col-6 col-md-4">
                                            <a class="c-link" href="@if($res->show_detail == 1) {{ url('/project-detail/'.$com->id) }} @else # @endif">
                                                <div class="image-container-1">
                                                    <img class="img-fluid" src="{{ $com->getFirstMediaUrl('projectImages') }}" alt="Responsive Image">
                                                    <div class="image-title">{{ $com->name ?? '' }}</div>
                                                    <i class="fas fa-heart heart-icon"></i>
                                                </div>
                                            </a>
                                        </div>
                                    @empty

                                    @endforelse
                                </div>
                            </div>
                        </div>
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
