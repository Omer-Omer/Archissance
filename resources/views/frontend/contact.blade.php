@extends('layouts.master')

@push('header')
    <style>
        .button {
            padding: 6px 12px;
            font-size: 18px;
            margin: 4px 2px;
            transition-duration: 0.3s;
            background-color: #C2E6FF;
            color: black;

        }
        .button2 {
            padding: 6px 12px;
            font-size: 18px;
            margin: 4px 2px;
            transition-duration: 0.5s;
            background-color: #F5F5F5;
            color: black;
        }

        @media only screen and (max-width: 768px) {
            .profile {
                padding: 12px;
            }
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
                    <div class="profile">
                        <h2>Company Profile</h2>
                        <p style="line-height:25px;">In 2009 Seacamels became China’s first company to offer supply chain and
                            financial comprehensive services to professional buyers. Seacamels offers three main services to
                            buyers:<br>
                            ✔ Door to Door Logistics<br>
                            ✔ Open Account Credit<br>
                            ✔ Wide Range of payment services for foreign trade<br><br>
                            Our core management team has 20 years experience in international trade.Over the years, Seacamels
                            has been able to form an innovative team of more than 200 people.<br>
                            Many of our managers work as executives in the international logistics enterprise, and are committed
                            to helping buyers have a simple and effective import process.<br><br><br>
                            We have subsidiaries in Shanghai, China and Los Angeles, California USA. These branches allow
                            Seacamels to serve over 4,800 clients located all over the world.<br><br><br>
                            Because of our dedication to serve our customers, we have received over 90% customer satisfaction
                            This makes us proud of what we do, and pushes us to keep expanding and helping
                            customers.<br><br><br>
                            According to a recent survey in 2016 our monthly customer growth rate was about 30%, 80% of which
                            came from referrals.<br><br><br>
                            Our online customer service is simple and provides all the information a buyer needs to manage
                            his/her account. A customer service representative is available 12 hours a day, however, if no one
                            is available please leave a message and we will return your call within 12 hours.<br><br><br>
                        </p>
                        <h2>Our Certified Factories</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
