<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Pakistan Apparel Suppliers</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <style>
        .c-bb-1p {
            border-bottom: 1px solid black;
        }

        .background-image {
            /* background-position: center; */
            background-repeat: no-repeat;
            background-size: cover;
            /* height: 300px; */
            /* display: flex; */
            justify-content: center;
            align-items: center;
            /* position: relative; */
        }
        .overlay {
            /* position: absolute; */
            /* top: 0; */
            /* left: 0; */
            /* width: 100%; */
            /* height: 100%; */
            padding: 120px 0px;
            background-color: rgba(0, 0, 0, 0.7); /* Adjust the opacity here */
        }
        .search-form input{
            border-radius: 22px 0px 0px 22px;
            border: 2px solid green !important;
            width: 100%;
        }
        .search-form button{
            border-radius: 0px 22px 22px 0px;
            border: 2px solid green !important;
            padding: 0px 20px;
            background-color: #006646;
        }
        .heading-style{
            font-size: 24px;
            font-weight: bold;
            color: #dddada !important;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 60px 0px 20px 0px;
            text-shadow: 2px 2px 4px rgb(241 241 241 / 0%);
        }
        .sec-m-tb {
            margin: 30px 0px;
        }
        .advantage-section .heading h1 {
            font-weight: 800;
            font-size: 50px;
        }
        .advantage-section .heading span {
            color: #80808085;
        }
    </style>

    @stack('header')

    {{-- Share This Button --}}
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=655898674ba88b0012e52f10&product=sop' async='async'></script>

  </head>
  <body>
    {{-- <h1>Hello, world!</h1> --}}

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    @stack('footer')
  </body>
</html>
