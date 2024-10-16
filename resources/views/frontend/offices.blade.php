@extends('layouts.master')

@push('header')
    <style>
        .office-form form label {
            margin: 25px 0px 5px 0px;
        }
        .office-form form label {

        }
        </style>
@endpush
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    {{-- <section>
        <img class="" width="100%" src="https://demo.pakistanapparelsuppliers.com/images/slide-1.jpg" alt="">
    </section> --}}

    <div class="container py-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-5 mt-5">

                        <article id="post-108" class="post-108 page type-page status-publish hentry">
                            <header class="entry-header">
                                <h1 class="entry-title mb-3">US Corporate Office</h1>
                            </header><!-- .entry-header -->
                            <div class="entry-content">
                                <p style="color: #978F8F;"><img src="https://demo.pakistanapparelsuppliers.com/images/usa.jpg" class="img-responsive"
                                        alt="US Corporate Office"><br>
                                    <strong style="color: #999999; font-size:18px;">Mr. Allan Barnes Director</strong><br>
                                    14661 MyFord Rd. Suite #A, Tustin, California. 92604 USA<br>
                                    Direct Email: abarnes@pakistanapparelsuppliers.com<br>
                                    Direct: +1-949-310-6837<br>
                                    Karachi Head Office: +92-21-509-1891
                                </p>
                            </div><!-- .entry-content -->
                        </article><!-- #post-## -->

                        <article id="post-106" class="post-106 page type-page status-publish hentry">
                            <header class="entry-header">
                                <h1 class="entry-title mb-3">Karachi Office</h1>
                            </header><!-- .entry-header -->
                            <div class="entry-content">
                                <p style="color: #978F8F;"><img src="https://demo.pakistanapparelsuppliers.com/images/karachi.jpg" class="img-responsive"
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

                    <div class="col-md-7">
                        <br>
                        <div class="office-form">
                            <form method="post" action="/process.php">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name*</label>
                                    <input type="Name" class="form-control" name="name" placeholder="Your Name"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Company*</label>
                                    <input type="Name" class="form-control" name="company" placeholder="Company"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Website</label>
                                    <input type="Name" class="form-control" name="website" placeholder="Website"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email Address*</label>
                                    <input type="Name" class="form-control" name="email_address" placeholder="Email Address"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Telephone</label>
                                    <input type="Name" class="form-control" name="telephone" placeholder="Telephone"
                                        required="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="supplier_info" value="Yes"> Supplier Info
                                    </label>
                                </div>
                                <div class="checkbox"> <label>
                                        <input type="checkbox" name="corporate_office" value="Yes"> Corporate Office
                                    </label></div>
                                <div class="checkbox"> <label>
                                        <input type="checkbox" name="buyers_info" value="Yes"> Buyers Info
                                    </label>
                                </div>
                                <div class="checkbox"> <label>
                                        <input type="checkbox" name="other" value="Yes"> Other
                                    </label>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Inquiry Box</label>
                                    <textarea class="form-control" rows="14" name="message" placeholder="Inquiry Box" required=""></textarea>
                                </div>
                                <input type="hidden" class="form-control" name="office" value="">
                                <input type="hidden" class="form-control" name="mode" value="contact_form">

                                <div class="my-4 text-center">
                                    <button type="submit" class="btn btn-primary">Submit Now </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
