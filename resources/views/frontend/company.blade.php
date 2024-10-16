@extends('layouts.master')

@push('header')
    <link type="text/css" rel="stylesheet"
        href="https://wholesaledenimfabrics.com/demo/public/frontend/js/slick-carousel/1.8.1/slick.min67a2.css" />
    <link type="text/css" rel="stylesheet"
        href="https://wholesaledenimfabrics.com/demo/public/frontend/js/slick-carousel/1.8.1/slick-theme.min6715.css" />

    {{-- <link type="text/css" rel="stylesheet" href="" /> --}}
    <link type="text/css" rel="stylesheet" href="https://www.jqueryscript.net/demo/Responsive-Touch-enabled-jQuery-Image-Lightbox-Plugin/dist/simple-lightbox.min.css" />
    <link type="text/css" rel="stylesheet" href="https://www.jqueryscript.net/demo/Responsive-Touch-enabled-jQuery-Image-Lightbox-Plugin/demo.css" />

    <style>
        .slick-next:before, .slick-prev:before {
            color: #5d5d5d !important;
        }
        .slider-nav {
            /* background-color: #fbfbfb; */
        }
        .slider-nav img {
            padding: 14px;
            /* box-shadow: 0px 12px 5px rgba(0, 0, 0, 0.5); */
        }

        .container .gallery a img {
            width: 100%;
        }
        .product-listing .product-main {
            /* box-shadow: 0 2px 10px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19) !important; */
            border-radius: 10px;
        }
    </style>
    <style>
        .c-accordion {
            cursor: pointer;
            padding: 10px 10px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            transition: 0.4s;
            font-size: 16px;
            text-transform: uppercase;
            background-color: #ffffff;
            border-bottom: 1px solid #dfdede;
        }

        #viewAllBtn {
            float: right;
            background-color: rgb(1 104 72);
            border: 0px;
            border-radius: 0px;
            font-size: 14px;
        }

        .c-accordion:after {
            content: '\002B'; /* Unicode character for plus sign */
            font-size: 18px;
            float: right;
            color: black; /* Change the color to red */
        }

        .c-accordion.c-active:after {
            content: '\2212'; /* Unicode character for minus sign */
            transform: rotate(0deg); /* Reset rotation for minus sign */
        }

        .c-panel {
            display: none;
            padding: 10px 10px;
            border: none;
            overflow: hidden;
            background-color: #eeeeee4a;
            border-bottom: 1px solid #dfdede;
        }
    </style>
@endpush

@section('content')
    {{-- @include('includes.companies-data') --}}

    <br>
    <br>
    <br>
    <br>
    <br>

    @php
        $latestProducts = [
            [
                'image' => 'images/company/product-1.jpg',
                'type' => 'Party Wear',
                'title' => 'Party Wearing',
                'date' => '2023-03-26',
                'sr_no' => 'sr-00',
            ],
            [
                'image' => 'images/company/product-2.jpg',
                'type' => 'Party Wear',
                'title' => 'Party Wearing',
                'date' => '2023-03-26',
                'sr_no' => 'sr-00',
            ],
            [
                'image' => 'images/company/product-3.jpg',
                'type' => 'Party Wear',
                'title' => 'Party Wearing',
                'date' => '2023-03-26',
                'sr_no' => 'sr-00',
            ],
            [
                'image' => 'images/company/product-4.jpg',
                'type' => 'Party Wear',
                'title' => 'Party Wearing',
                'date' => '2023-03-26',
                'sr_no' => 'sr-00',
            ],
            [
                'image' => 'images/company/product-5.jpg',
                'type' => 'Party Wear',
                'title' => 'Party Wearing',
                'date' => '2023-03-26',
                'sr_no' => 'sr-00',
            ],
            [
                'image' => 'images/company/product-6.jpg',
                'type' => 'Party Wear',
                'title' => 'Party Wearing',
                'date' => '2023-03-26',
                'sr_no' => 'sr-00',
            ],
        ];
    @endphp

    @php
        $data = array(
            // array(
            //     'c_name' => 'ABC',
            //     'c_url' => 'g.com',
            //     'c_decription' => 'g.com',
            // ),
            array(
                'c_name' => 'Roz Industries',
                'c_url' => 'https://demo.pakistanapparelsuppliers.com/RozIndustries.html',
                'c_decription' => 'ROZ INDUSTRIES is Sports Clothing & Equipment Manufacturing Industry established on 2005. We are a company specialized in sporting business services, designing, production, marketing, located in Sialkot, Punjab, Pakistan',
            ),
            array(
                'c_name' => 'Hartmann International Trading',
                'c_url' => 'https://demo.pakistanapparelsuppliers.com/HARTMANN-INTERNATIONAL.html',
                'c_decription' => 'Our assignment is to create long term business between our worldwide network of professional partners and leading brands within the Air soft, Law enforcement, hunting, shooting, fitness Crossfit Gym clothing, Sports, PPE and outdoor industry',
            ),
            array(
                'c_name' => 'Lexon Industries',
                'c_url' => 'https://demo.pakistanapparelsuppliers.com/LEXON-INDUSTRIES.html',
                'c_decription' => 'Lexon Industries Manufacture and Supply all sort of Sports Wears, Casual Wears, Sports Balls and Leather Garments. Lexon Industries is one of the top Manufacturers cum Exporters.',
            ),
            array(
                'c_name' => 'Tdg Impex',
                'c_url' => 'https://demo.pakistanapparelsuppliers.com/TDG-IMPEX-1.html',
                'c_decription' => 'TDG IMPEX T/A CUSTOMKITS Under the Brand Name of Renzo started its journey in the world of sportswear in year 1990. We became the major supplier of some known brands in Europe,Usa &amp; Australia and started providing the complete range of their catalogues.',
            ),
            array(
                'c_name' => 'Dada Chiragh Manufacturing Company',
                'c_url' => 'https://demo.pakistanapparelsuppliers.com/DADA-CHIRAGH.html',
                'c_decription' => 'We are manufacture of surgical beauty manicure and pedicure instrument HAIR EXTENSION PLIERS &amp; KITS,HAIR CARE SETS,CUTICLE NIPPERS,NAIL &amp; PEDICURE NIPPERS,PUSHERS &amp; SKIN CARE TOOLS,PROFESSIONAL TWEEZERS,HAIR &amp; SKIN CARE TOOLS,PEDICURE &amp; NAIL CARE TOOLS,MANICURE &amp; PEDICURE SETS,AND ALL KINDS OF SCISSORS',
            )
        )
    @endphp

    <section class="product-listing home-slider-section">

        <div class="container">

            <div class="galler-slider gallery-slider-for">
                @for ($i=1; $i<=4; $i++)
                    <div>
                        <a href="{{ asset('images/company/banner-'.$i.'.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/company/banner-'.$i.'.jpg') }}" title="Dressing Image {{ $i }}">
                        </a>
                    </div>
                @endfor
            </div>

            {{-- <div class="slider slider-for gallery-slider-for">

                @for ($i=1; $i<=4; $i++)
                    <div>
                        <a href="{{ asset('images/company/banner-'.$i.'.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/company/banner-'.$i.'.jpg') }}" title="Dressing Image {{ $i }}">
                        </a>
                    </div>
                @endfor
            </div>

            <div class="slider slider-nav gallery-slider-nav">
                @for ($i=1; $i<=4; $i++)
                    <div>
                        <a href="{{ asset('images/company/banner-'.$i.'.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/company/banner-'.$i.'.jpg') }}" title="Dressing Image {{ $i }}">
                        </a>
                    </div>
                @endfor
            </div> --}}

            {{-- Listing --}}

            @forelse ($data as $k=> $company)
                {{-- @php dd($company); @endphp --}}
                {{-- {{ $company['c_url'] }} --}}
                @if(request()->has('name') && $company['c_name'] === request('name'))
                    <div class="row">
                        <div class="col-12">
                            <hr>
                            <span>
                                <p> <b>Company /</b>  {{ $company['c_name'] ?? 'Company ABC ' }} </p>
                            </span>

                            <hr style="color: black;">
                        </div>
                    </div>

                    {{-- <h3>About Company</h3> --}}
                    <p>
                        {{ $company['c_decription'] ?? ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                        Aldus PageMaker including versions of Lorem Ipsum.' }}
                    </p>

                    @break
                @else

                    <div class="row">
                        <div class="col-12">
                            <hr>
                            <span>
                                <p> <b>Company /</b>  {{ 'Company Name' }} </p>
                            </span>

                            <hr style="color: black;">
                        </div>
                    </div>
                    <p>
                        {{ ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                        Aldus PageMaker including versions of Lorem Ipsum.' }}
                    </p>
                    @break
                @endif

            @empty
                <div class="row">
                    <div class="col-12">
                        <hr>
                        <span>
                            <p> <b>Product Listing / </b> Company ABC </p> {{ request('name') ?? 'nop..' }}
                        </span>

                        <hr style="color: black;">
                    </div>
                </div>

                <h3>About Company</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                    Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            @endforelse

            {{-- <div class="row mt-5">
                @forelse ($latestProducts as $p)
                    <div class="col-12 col-lg-2">
                        <a class="remove-ul txt-black" target="_blank" href="{{ url('/details') }}">
                            <div class="img-section">
                                <img class="img-fluid"
                                    src="{{ $p['image'] }}"
                                    style="width: 100%;">
                            </div>
                            <div class="body text-center">
                                <p class="mb-1 mt-2">{{ $p['sr_no'] ?? 'NL-0001' }} | <span> {{ $p['date'] ?? '2022-03-26' }} </span></p>
                                <p class="mb-2"><b>{{ $p['type'] ?? '' }}</b></p>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12 col-lg-2">
                        <a class="remove-ul txt-black" target="_blank" href="https://wholesaledenimfabrics.com/demo/public/product-detail/10">
                            <div class="img-section">
                                <img class="img-fluid"
                                    src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1648300957546default.jpg"
                                    style="width: 100%;">
                            </div>
                            <div class="body text-center">
                                <p class="mb-1 mt-2">NL-0002 | <span> 2022-03-26 </span></p>
                                <p class="mb-2"><b>Category Name</b></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-2">
                        <a class="remove-ul txt-black" target="_blank" href="https://wholesaledenimfabrics.com/demo/public/product-detail/11">
                            <div class="img-section">
                                <img class="img-fluid"
                                    src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1648749345619detail_pic3.jpg"
                                    style="width: 100%;">
                            </div>
                            <div class="body text-center">
                                <p class="mb-1 mt-2">nl-0003 | <span> 2022-03-26 </span></p>
                                <p class="mb-2"><b>Category Name</b></p>
                            </div>
                        </a>
                    </div>
                @endforelse
            </div> --}}

            {{-- <div class="accordion accordion-flush mt-5" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            COMPANY DETAILS
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of
                            Lorem Ipsum.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            CONTACT
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of
                            Lorem Ipsum.

                            <br>
                            <br>
                            <form id="form_submit" method="post" action="javascript:void(0)">

                                <input type="hidden" id="company_id" name="company_id" value="12">
                                <div class="mb-3">
                                    <label for="exampleContactPerson" class="form-label">Name</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control form-input-border-0" placeholder="Your Name"
                                        aria-describedby="emailHelp">

                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" name="email" id="email"
                                        class="form-control form-input-border-0" placeholder="Enter Your Email Address"
                                        aria-describedby="emailHelp" required="">

                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                    <input type="text" id="phone_no" name="phone_no"
                                        class="form-control form-input-border-0" placeholder="Enter Your Email Address"
                                        aria-describedby="emailHelp" required="">

                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Comment</label>
                                    <div class="form-floating">
                                        <textarea class="form-control form-input-border-0" placeholder="Give us review" id="comment" name="comment"
                                            style="height: 100px" required=""></textarea>
                                        <label for="floatingTextarea2">Comment</label>
                                    </div>
                                </div>


                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary custom-submit-btn">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            CANCELLATION POLICY
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of
                            Lorem Ipsum.
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

    </section>

    <div class="container mt-5">
        <button id="viewAllBtn" class="btn btn-primary mb-3">Expand All</button>

        <div class="my-3">
            <button class="c-accordion">COMPANY DETAILS</button>
            <div class="c-panel">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including versions of
                Lorem Ipsum.</p>
            </div>
        </div>
        <div class="my-3">
            <button class="c-accordion">Apparel Categories</button>
            <div class="c-panel">
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book.
              </p>
              <ul>
                <li>Apparel Design Services</li>
                <li>Apparel Processing Services</li>
                <li>Apparel Stock</li>
              </ul>
            </div>
        </div>
        <div class="my-3">
            <button class="c-accordion">Manufacturing</button>
            <div class="c-panel">
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book.
              </p>
            </div>
        </div>
        <div class="my-3">
            <button class="c-accordion">Wholesale</button>
            <div class="c-panel">
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book.
              </p>
            </div>
        </div>
        <div class="my-3">
            <button class="c-accordion">CONTACT</button>
            <div class="c-panel">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of
                    Lorem Ipsum.
                </p>

                <br>
                <br>
                <form id="form_submit" method="post" action="javascript:void(0)">

                    <input type="hidden" id="company_id" name="company_id" value="12">
                    <div class="mb-3">
                        <label for="exampleContactPerson" class="form-label">Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control form-input-border-0" placeholder="Your Name"
                            aria-describedby="emailHelp">

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" id="email"
                            class="form-control form-input-border-0" placeholder="Enter Your Email Address"
                            aria-describedby="emailHelp" required="">

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                        <input type="text" id="phone_no" name="phone_no"
                            class="form-control form-input-border-0" placeholder="Enter Your Email Address"
                            aria-describedby="emailHelp" required="">

                    </div>


                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Comment</label>
                        <div class="form-floating">
                            <textarea class="form-control form-input-border-0" placeholder="Give us review" id="comment" name="comment"
                                style="height: 100px" required=""></textarea>
                            <label for="floatingTextarea2">Comment</label>
                        </div>
                    </div>


                    <div class="text-end">
                        <button type="submit" class="btn btn-primary custom-submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    {{-- Product Listing --}}
    <section class="product-listing my-5">
        <div class="container">

            <div class="row my-3">
                <div class="col-12">
                    <div class="px-2">
                        {{-- <h5 class="">Top Products</h5> --}}
                        <h5 class="">User Manufacturing Catalog</h5>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="multiple-items">
                    @for ($i=1; $i<=7; $i++)
                        <div class="col-12 col-md-3" style="">
                            <div>
                                <div class="product-main c-light-grey-broder mx-2">
                                    {{-- <a href="{{ url('/details') }}" class="r-ul txt-black" target="_blank"> --}}
                                    <a target="_blank" href="{{ url('/listing') }}" class="r-ul txt-black" target="_blank">
                                        <img class="img-gluid img-height" width="100%" src="{{ asset('images/women-dressing-image'.$i.'.jpg') }}" style="height: 250px;">

                                        <div class="p-3 txt-black">
                                            <h4 style="font-size: 18px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{ request()->has('name') ? request('name') : '' }}</h4>
                                            <h5 class="mt-2 f-16p primary-color"><b>Cloth {{ $i }}</b></h5>
                                            @php $price = $i * 60; @endphp
                                            <p class="f-12p mb-1">Price: <b>{{ $price .'.00' }}</b></p>
                                            <p class="f-12p mb-1">
                                                <span>In Stock:</span>
                                                <small class="success"><b>Available</b></small>
                                            </p>
                                        </div>
                                    </a>
                                </div>

                                {{-- <a class="w-100 r-ul" target="_blank" href="{{ url('/listing') }}">
                                    <div class="row gx-1 c-light-grey  mx-2">
                                        <div class="col-12 p-2 text-center">
                                            <p class="txt-black mb-0">View Details</p>
                                        </div>
                                    </div>
                                </a> --}}
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

@endsection

@push('footer')
    <script type="text/javascript" src="https://wholesaledenimfabrics.com/demo/public/frontend/js/slick-carousel/1.8.1/slick.min2b6a.js"></script>

    <script type="text/javascript" src="https://www.jqueryscript.net/demo/Responsive-Touch-enabled-jQuery-Image-Lightbox-Plugin/dist/simple-lightbox.jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $(document).ready(function () {
        $(".c-accordion").on("click", function () {
            /* Toggle between adding and removing the "c-active" class,
            to highlight the button that controls the panel */
            $(this).toggleClass("c-active");

            /* Toggle between hiding and showing the active panel */
            var panel = $(this).next();
            panel.slideToggle();
        });

        $("#viewAllBtn").on("click", function () {
            $(".c-accordion").toggleClass("c-active");
            $(".c-panel").slideToggle();
        });
    });
        });
    </script>

    <script>
        $(function(){
          var gallery = $('.gallery-slider-for a').simpleLightbox({
            navText:    ['&lsaquo;','&rsaquo;'],
            captions:true,
            captionDelay: 0,
            captionSelector:'img',
            captionType:'attr',
            captionPosition:'bottom',
            captionClass:'',
            captionHTML:false,

            // captions attribute (title or data-title)
            captionsData:'title',
        });
          var gallery = $('.gallery-slider-nav a').simpleLightbox({navText:    ['&lsaquo;','&rsaquo;']});
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.galler-slider').slick({
                autoplaySpeed: 5000,
                autoplay: false,
                arrows: true,
            });
        });
        $(document).ready(function() {
            $('.single-item').slick({
                autoplaySpeed: 5000,
                autoplay: false,
                arrows: false,
            });
        });
    </script>

    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: true,
            centerMode: true,
            focusOnSelect: true
        })
    </script>

<script>
    $('.multiple-items').slick({
        // infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
        {
            breakpoint: 768, // Adjust this breakpoint as needed
            settings: {
                slidesToShow: 1, // Number of slides to show on larger screens
            }
        },
        {
            breakpoint: 1024, // Adjust this breakpoint as needed
            settings: {
                slidesToShow: 4, // Number of slides to show on even larger screens
            }
        }
        // Add more breakpoints and settings as necessary
    ]
    });
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    // $('#submitForm').submit(function(e){
    $('#form_submit').submit(function (event) {
        event.preventDefault();
        // alert();
        let company_id = $('#company_id').val();
        let email = $('#email').val();
        let name = $('#name').val();
        let phone_no = $('#phone_no').val();
        let comment = $('#comment').val();
        // console.log();
        // alert();
        $.ajax({
            url: "/frontend-submit-company-contact-form",
            method: "POST",
            data:{
                "_token" : "vgNEr51jbTbj3qZL4mnwIjxw4qgTGV2kkpEJvHNm",
                "company_id" : company_id,
                "email" : email,
                "name" : name,
                "phone_no" : phone_no,
                "comment" : comment,
            },
            success:function(response){
                console.log(response);
                $("#form_submit")[0].reset();

                swal({
                    title: "Thank You!",
                    text: "Your Company Query Submitted Successfully!",
                    icon: "success",
                    button: "Done",
                });

            },
            error:function(response){

            }

        });

    });
</script>
@endpush
