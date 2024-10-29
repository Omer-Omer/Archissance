<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | Archissance</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.webp') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <style>
        .lato-thin {
            font-family: "Lato", sans-serif !important;
            font-weight: 100;
            font-style: normal;
        }

        .lato-light {
            font-family: "Lato", sans-serif !important;
            font-weight: 300;
            font-style: normal;
        }

        .lato-regular {
            font-family: "Lato", sans-serif !important;
            font-weight: 400;
            font-style: normal;
        }

        .lato-bold {
            font-family: "Lato", sans-serif !important;
            font-weight: 700;
            font-style: normal;
        }

        .lato-black {
            font-family: "Lato", sans-serif !important;
            font-weight: 900;
            font-style: normal;
        }

        .lato-thin-italic {
            font-family: "Lato", sans-serif !important;
            font-weight: 100;
            font-style: italic;
        }

        .lato-light-italic {
            font-family: "Lato", sans-serif !important;
            font-weight: 300;
            font-style: italic;
        }

        .lato-regular-italic {
            font-family: "Lato", sans-serif !important;
            font-weight: 400;
            font-style: italic;
        }

        .lato-bold-italic {
            font-family: "Lato", sans-serif !important;
            font-weight: 700;
            font-style: italic;
        }

        .lato-black-italic {
            font-family: "Lato", sans-serif !important;
            font-weight: 900;
            font-style: italic;
        }


        .body-sec {
            position: relative;
            padding-top: 65px;
        }

        @media(max-width: 768px) {
            .body-sec {
                position: relative;
                padding-top: 0px !important;
            }
        }
    </style>

    @stack('header')

    {{-- Share This Button --}}
    {{-- <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=655898674ba88b0012e52f10&product=sop' async='async'></script> --}}

</head>

<body>
    {{-- <h1>Hello, world!</h1> --}}

    @include('layouts.header')

    <section class="body-sec" style="position: relative; padding-top: 85px;">
        @yield('content')
    </section>

    @include('layouts.footer')

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Prevent default click behavior for dropdown-toggle links
            document.querySelectorAll('.desktop-navbar .nav-item.dropdown .nav-link').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    e.preventDefault();
                });
            });
        });
    </script>

    <script>
        $('.single-item').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            var nextSlideElement = $(slick.$slides[nextSlide]);
            nextSlideElement.find('.text-overlay').addClass(
                'animate__animated animate__fadeIn'); // Trigger animation for next slide
        });
    </script>
    @stack('footer')
</body>

</html>
