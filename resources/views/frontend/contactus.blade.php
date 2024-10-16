@extends('layouts.master')

@push('header')
    <style>
        .button {
            padding: 6px 12px;
            font-size: 18px;
            margin: 4px 2px;
            transition-duration: 0.3s;
            background-color: #F5F5F5;
            color: black;

        }
        .button2 {
            padding: 6px 12px;
            font-size: 18px;
            margin: 4px 2px;
            transition-duration: 0.5s;

            background-color: #C2E6FF;
            color: black;
        }

        .buyer-contact-section .panel {
            border: 1px solid #dbdbdb;
            border-radius: 4px;
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
        }
        .office-form form label {
            margin: 25px 0px 5px 0px;
        }

    </style>
@endpush
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="{{ url('/contact') }}">
                        <div class="button">About Us
                        </div>
                    </a>
                    <a href="{{ url('/contactus') }}">
                        <div class="button2" style="margin-top:7%;">Contact Us
                        </div>
                    </a>
                </div>
                <div class="col-md-10">
                    <div class="buyer-contact-section">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row g-3">

                                    <div class="col-md-7">
                                        <div class="py-5 px-4">
                                            <h2 style=" font-size:22px;"><b>Request for Quation</b></h2>
                                            <p style="font-size:18px; color:#999999;">One Request, Multiple Quotes</p>
                                            <h1>Tell suppliers what you need</h1>
                                            <h3 style="color:#1A1A1A; font-size: 19px; font-weight:600;">Complete Your RFQ</h3>
                                            <p style="font-size:17px; color:#666666;">The more specific your information, the more
                                                accurately we can match your <br> request to the right suppliers</p>
                                            <div class="office-form">
                                                <form method="post" action="/process.php">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"></label>
                                                    <input type="Name" class="form-control" name="name"
                                                        placeholder="Key words of products you are looking for" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"></label>
                                                    <input type="Name" class="form-control" name="company" placeholder="Enter Quantity"
                                                        required="">
                                                </div>

                                                <h3 class="mt-3" style="color:#1A1A1A; font-size: 19px; font-weight:600;">Other Requirements</h3>

                                                <p style="font-size:14px; color: #787878;">Describe about your perferred unit price,
                                                    destination port and the payment methods</p>
                                                <div class="form-group" style="width:30%;">
                                                    <label for="exampleInputEmail1"></label>
                                                    <input type="Name" class="form-control" name="website"
                                                        placeholder="Preferred Unit Price" required=""><br>
                                                    <input type="Name" class="form-control" name="website" placeholder="Destination Port"
                                                        required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"></label>
                                                    <input type="Name" class="form-control" name="email_address"
                                                        placeholder="Payment Method" required="">
                                                </div>
                                                <div class="my-4 text-start">
                                                    <button type="submit" class="btn btn-primary">Submit RFQ </button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-5">

                                        <div class="py-5 px-4">
                                            <article id="post-108" class="post-108 page type-page status-publish hentry">
                                                <header class="entry-header">
                                                    <h1 class="entry-title">US Corporate Office</h1>
                                                </header><!-- .entry-header -->
                                                <div class="entry-content">
                                                    <p style="color: #978F8F;"><img width="100%" src="https://demo.pakistanapparelsuppliers.com/images/usa.jpg" class="img-responsive"
                                                            alt="US Corporate Office"><br>
                                                        <strong style="color: #999999; font-size:18px;">Mr. Allan Barnes
                                                            Director</strong><br>
                                                        14661 MyFord Rd. Suite #A, Tustin, California. 92604 USA<br>
                                                        Direct Email: abarnes@pakistanapparelsuppliers.com<br>
                                                        Direct: +1-949-310-6837<br>
                                                        Karachi Head Office: +92-21-509-1891
                                                    </p>
                                                </div><!-- .entry-content -->
                                            </article><!-- #post-## -->

                                            <article id="post-106" class="post-106 page type-page status-publish hentry">
                                                <header class="entry-header">
                                                    <h1 class="entry-title">Karachi Office</h1>
                                                </header><!-- .entry-header -->
                                                <div class="entry-content">
                                                    <p style="color: #978F8F;"><img width="100%" src="https://demo.pakistanapparelsuppliers.com/images/karachi.jpg" class="img-responsive"
                                                            alt="Karachi Office"><br>
                                                        <strong style="color: #999999; font-size:18px;">Mr. Abdullah Daniyal – Country
                                                            Director</strong><br>
                                                        B-237, Main Ibrahim Haydry Road, Korangi Creek, Karachi, Pakistan<br>
                                                        Direct Email: abdullah@pakistanapparelsuppliers.com<br>
                                                        Assistant Email: DirectorsAssistant@pakistanapparelsuppliers.com<br>
                                                        Website: www.pakistanapparelsuppliers.com<br>
                                                        Cell: +92-333-2299399<br>
                                                        Karachi Head Office: +92-21-5091891<br>
                                                        USA Direct Line: +1-949-310-6837
                                                    </p>
                                                </div><!-- .entry-content -->
                                            </article><!-- #post-## -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
