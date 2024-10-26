<style>
    .footer {
        background-color: #12171b;
        color: white;
        padding: 30px 0px 40px 0px;
    }

    .footer ul li {
        list-style: none;
    }

    .footer ul li a {
        text-decoration: none;
        color: #bfbfbf !important;
    }

    .footer ul li a:hover {
        border-bottom: 1px solid black;
    }

    .social-icons {
        display: inline-block;
        color: #bfbfbf;
    }

    .social-icon {
        display: inline-block;
        margin: 0 5px;
        /* Space between the icons */
        width: 25px;
        height: 25px;
        line-height: 26px;
        text-align: center;
        border-radius: 50%;
        /* Makes the icon circular */
        background-color: white;
        /* White circle */
        color: black;
        /* Black font color */
        font-size: 15px;
        /* Icon size */
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .social-icon:hover {
        background-color: black;
        /* Change background to black on hover */
        color: white;
        /* Change font to white on hover */
    }

    .social-icon i {
        vertical-align: middle;
        /* Centers the icon inside the circle */
    }

    .inline-form {
        display: flex;
        /* Aligns input and button inline */
        justify-content: center;
        /* Centers the form elements */
        align-items: center;
    }

    .email-input {
        padding: 9px;
        font-size: 16px;
        border: 1px solid #cccccc82;
        border-radius: 5px 0 0 5px;
        outline: none;
        flex: 1;
        background-color: transparent;
    }

    .submit-btn {
        background-color: red;
        /* Red button */
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 0 5px 5px 0;
        /* Rounded corners (right side) */
        transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
        background-color: darkred;
        /* Darker red on hover */
    }
</style>
<section class="footer p-tb-4 mt-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="sec-one p-tb-20">
                            <h5 class="mb-4">PROJECTS</h5>
                            <ul class="ul-li-style-n p-0">
                                <li class="mb-1">
                                    <a href="{{ url('/projects?type=1') }}">Residential</a>
                                </li>
                                <li class="mb-1">
                                    <a href="{{ url('/projects?type=3') }}">Commercial</a>
                                </li>
                                <li class="mb-1">
                                    <a href="{{ url('/projects?type=2') }}">Industrial</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="sec-one p-tb-20">
                            <h5 class="mb-4">FIRM</h5>
                            <ul class="ul-li-style-n p-0">
                                <li class="mb-1">
                                    <a href="{{ url('/about') }}">About</a>
                                </li>
                                <li class="mb-1">
                                    <a href="{{ url('/team') }}">Team</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="sec-one p-tb-20">
                            <h5 class="mb-4">CONTACT</h5>
                            <ul class="ul-li-style-n p-0">
                                <li class="mb-1">
                                    <a href="#">238 29384 233</a>
                                </li>
                                <li class="mb-1">
                                    <a href="#">info@web.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="sec-one p-tb-20">
                            <h5 class="mb-4">CONNECT</h5>
                            <div class="social-icons">
                                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-3 d-flex align-items-center">
                    <div class="col-12 col-md-7">

                        <form class="inline-form">
                            <input type="email" class="email-input" placeholder="Enter your email" required>
                            <button type="submit" class="submit-btn">Subscribe</button>
                        </form>

                    </div>
                    <div class="col-12 col-md-5">
                        <div class="text-center">
                            <span>©2018. All rights reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
