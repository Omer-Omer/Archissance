@extends('layouts.master')

@push('header')
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
    <!-- Sweet Alert -->
    <link type="text/css" href="{{ asset('backend/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

    <style>
        .contact-us h3 {
            color: black;
            font-family: 'Lato', sans-serif !important;
        }

        .contact-us .off-heading {
            font-size: 30px;
            font-weight: bolder;
            padding: 30px 0px 30px 0px;
        }

        .contact-us p {
            font-family: 'Lato', sans-serif !important;
            font-weight: 500;
            line-height: 2.3em;
            text-align: justify;
            font-size: 17px;
        }

        .contact-us .cd-detail {
            margin-bottom: 40px;
        }

        .contact-us .cd-content {
            line-height: 1.5em !important;
        }

        .contact-us .btn {
            color: white;
            background-color: red;
            padding: 14px 35px;
            border: 0px;
        }

        .contact-us .btn:hover {
            color: white;
            background-color: black;
        }

        .contact-us .form-headings {
            padding: 40px 0px;
        }

        .contact-us .form-headings h3 {
            font-size: 20px;
            font-weight: 500;
            /* padding: 30px 0px 30px 0px; */
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
@endpush
@section('content')
    <div class="container contact-us mt-5">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="row g-5">
                    <div class="col-12 col-md-9">

                        <div class="row">
                            <div class="col-12 offset-md-1 col-md-9">
                                <div class="row g-0">
                                    <h3 class="off-heading"> OFFICE LOCATION</h3>
                                    <div class="col-12 col-md-4">
                                        <div class="cd-detail">
                                            <h4 class="cd-heading">USA</h4>
                                            <p class="cd-content"> 3185 Airway Avenue <br>
                                                Suite F1 <br>
                                                Costa Mesa, CA 92626</p>
                                        </div>
                                        <div class="cd-detail">
                                            <h4 class="cd-heading">PHONE</h4>
                                            <p class="cd-content"> 384-2349-242</p>
                                        </div>
                                        <div class="cd-detail">
                                            <h4 class="cd-heading">EMAIL US:</h4>
                                            <p class="cd-content"> info@abc.com </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509025!2d144.95373631531726!3d-37.81627997975166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11f8ab%3A0x5045675218ced30!2sMelbourne%20CBD%2C%20Melbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sus!4v1612345678901!5m2!1sen!2sus"
                                            width="350" height="350" style="border:0;" allowfullscreen=""
                                            loading="lazy">
                                        </iframe>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-headings">
                                            <h3>​INTERESTED IN GETTING MORE INFORMATION?</h3>
                                            <h3>​ PLEASE FILL OUT THE FORM BELOW:</h3>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <form id="form-submit" action="{{ route('contact.store') }}" method="POST">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <input type="text" class="form-control" id="firstName" name="firstName"
                                                        placeholder="First Name">
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" id="lastName" name="lastName"
                                                        placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        placeholder="Email">
                                                </div>
                                                <div class="col">
                                                    <input type="tel" class="form-control" id="phone" name="phone"
                                                        placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <textarea class="form-control" id="comment" name="comment" rows="5" placeholder="Add a message"></textarea>
                                            </div>

                                            <div id="validation-errors"></div>
                                            <div class="d-flex justify-content-end">
                                                <button class="btn btn-sm btn-primary  d-flex justify-content-center align-items-center w-50"
                                                    type="submit">
                                                    Submit
                                                    &nbsp; &nbsp;
                                                    <!-- Loading Icon -->
                                                    <div id="loading-icon" class="spinner-border text-primary" role="status"
                                                        style="display: none; height: 1rem; width: 1rem; color: white !important;">
                                                    </div>
                                                </button>
                                            </div>
                                        </form>
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
    <!-- Sweet Alerts 2 -->
    <script src="{{ asset('backend/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

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

    <script type="text/javascript">
        $(document).ready(function() {
            console.log('..........');
            // alert();
            // Handle form submission
            $('#form-submit').on('submit', function(e) {
                e.preventDefault();
                // alert();

                // Clear previous validation messages
                $('#validation-errors').html('');

                // Show loading icon
                $('#loading-icon').show();

                // Get all form data using FormData
                var formData = new FormData(this);

                var url = $(this).attr('action');

                // Make AJAX POST request
                $.ajax({
                    url: url, // Route to store post
                    type: 'POST',
                    data: formData,
                    contentType: false, // Important for FormData to work
                    processData: false, // Important for FormData to work
                    beforeSend: function() {
                        // Optional: Disable submit button to prevent duplicate submissions
                        $('#form-submit button[type="submit"]').prop('disabled', true);
                    },
                    success: function(response) {

                        // Hide loading icon
                        $('#loading-icon').hide();
                        $('#form-submit')[0].reset();
                        $('#form-submit button[type="submit"]').prop('disabled', false);

                        // Show success message with SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.success,
                        }).then(function() {
                            // Redirect to index after success
                            // window.location.href = response.redirect_to;
                            // window.location.href = "{{ route('company.index') }}";
                        });
                    },
                    error: function(xhr) {
                        // Hide loading icon
                        $('#loading-icon').hide();

                        // Re-enable submit button
                        $('#form-submit button[type="submit"]').prop('disabled', false);

                        // Display validation errors
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#validation-errors').append(
                                    '<div class="alert-danger mb-1">' + value +
                                    '</div>');
                            });
                        }
                    }
                });
            });
        });
    </script>
@endpush
