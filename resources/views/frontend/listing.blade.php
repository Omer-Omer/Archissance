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
        .custom-pagination {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0;
        }

        .pagination {
          display: flex;
          list-style: none;
          padding: 0;
        }

        .pagination-item {
          margin: 0 5px;
          padding: 8px 12px;
          background-color: #e0e0e0;
          border-radius: 4px;
        }

        .pagination-item.active {
          background-color: #007bff;
          color: #fff;
        }

        .pagination-item a {
            text-decoration: none;
            color: black;
        }

        .pagination-item.active a {
            color: white;
        }

        .pagination-icons {
            margin: 0 5px;
            padding: 8px 12px;
            background-color: #e0e0e0;
            border-radius: 4px;
        }

        .pagination-icons a {
            color: black !important;
        }
        .pagination-icons i {
            margin: 0 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>

@endpush

@section('content')
    @include('includes.companies-data')

    <br>
    <br>
    <br>
    @php
        $clothes = [
            [
                'banner' => 'images/listing/women-clothing-banner-1.jpg',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy',
                'products' => [
                    [
                        'image' => 'images/party-wear-image1.jpg',
                        'type' => 'party',
                        'title' => 'Party Wears 1',
                        'date' => '2023-03-26',
                        'sr_no' => 'sr-00',
                    ],
                    [
                        'image' => 'images/party-wear-image2.jpg',
                        'type' => 'party',
                        'title' => 'Party Wears 2',
                        'date' => '2023-03-26',
                        'sr_no' => 'sr-00',
                    ],
                    [
                        'image' => 'images/party-wear-image3.jpg',
                        'type' => 'party',
                        'title' => 'Party Wears 3',
                        'date' => '2023-03-26',
                        'sr_no' => 'sr-00',
                    ],
                    [
                        'image' => 'images/party-wear-image4.jpg',
                        'type' => 'party',
                        'title' => 'Party Wears 4',
                        'date' => '2023-03-26',
                        'sr_no' => 'sr-00',
                    ],
                ],
            ],
            // [
            //     'banner' => 'images/listing/women-clothing-banner-2.jpg',
            //     'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy',
            //     'products' => [
            //         [
            //             'image' => 'images/party-wear-image1.jpg',
            //             'type' => 'party',
            //             'title' => 'Party Wears 1',
            //             'date' => '2023-03-26',
            //             'sr_no' => 'sr-00',
            //         ],
            //         [
            //             'image' => 'images/party-wear-image2.jpg',
            //             'type' => 'party',
            //             'title' => 'Party Wears 2',
            //             'date' => '2023-03-26',
            //             'sr_no' => 'sr-00',
            //         ],
            //         [
            //             'image' => 'images/party-wear-image3.jpg',
            //             'type' => 'party',
            //             'title' => 'Party Wears 3',
            //             'date' => '2023-03-26',
            //             'sr_no' => 'sr-00',
            //         ],
            //         [
            //             'image' => 'images/party-wear-image4.jpg',
            //             'type' => 'party',
            //             'title' => 'Party Wears 4',
            //             'date' => '2023-03-26',
            //             'sr_no' => 'sr-00',
            //         ],
            //     ],
            // ],
        ];

        $latestProducts = [
            [
                'image' => 'images/women-dressing-image1.jpg',
                'type' => 'casual',
                'title' => 'Casual Dressing',
                'date' => '2023-03-26',
                'sr_no' => 'sr-00',
            ],
            [
                'image' => 'images/women-dressing-image2.jpg',
                'type' => 'casual',
                'title' => 'Casual Dressing',
                'date' => '2023-03-26',
                'sr_no' => 'sr-00',
            ],
            [
                'image' => 'images/women-dressing-image3.jpg',
                'type' => 'casual',
                'title' => 'Casual Dressing',
                'date' => '2023-03-26',
                'sr_no' => 'sr-00',
            ],
            [
                'image' => 'images/women-dressing-image4.jpg',
                'type' => 'casual',
                'title' => 'Casual Dressing',
                'date' => '2023-03-26',
                'sr_no' => 'sr-00',
            ],
            [
                'image' => 'images/party-wear-image1.jpg',
                'type' => 'party',
                'title' => 'Party Wearing',
                'date' => '2023-03-26',
                'sr_no' => 'sr-00',
            ],
            [
                'image' => 'images/party-wear-image2.jpg',
                'type' => 'party',
                'title' => 'Party Wearing',
                'date' => '2023-03-26',
                'sr_no' => 'sr-00',
            ],
            [
                'image' => 'images/party-wear-image3.jpg',
                'type' => 'party',
                'title' => 'Party Wearing',
                'date' => '2023-03-26',
                'sr_no' => 'sr-00',
            ],
            [
                'image' => 'images/party-wear-image4.jpg',
                'type' => 'party',
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
            ),
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

    @forelse ($data as $x => $company)
        <section class="my-5">
            <div class="container">
                {{-- <hr class="hr-bottom-margin"> --}}

                <div class="row custom-row-border">
                    <div class="col-12 custom-heading-border">
                        <h5 class="custom-heading">{{ $company['c_name'] ?? '' }}</h5>
                    </div>
                </div>

                @forelse ($clothes as $u=> $c)
                    <div class="row">
                        <div class="col-12 col-md-5 py-4">
                            <a class="remove-ul txt-black" target="_blank"
                                href="{{ url('/company') }}">
                                <img class="img-fluid" src="{{ asset(''.$c['banner']) }}" style="height: 242px;">
                            </a>
                            <p class="mb-0 mt-3">
                                {{ $company['c_decription'] ?? ' Lorem Ipsum is simply ' }}
                            </p>
                        </div>
                        <div class="col-12 col-md-7">

                            <div class="row g-2 mt-3 company-listing-gallery">

                                    @foreach ($c['products'] as $j=> $p)
                                        <div class="col-12 col-md-3">
                                            <a class="remove-ul txt-black" target="_blank"
                                                href="{{ asset(''.$p['image']) }}">
                                                <div class="border border-secondary p-2" style="background-color: white;">
                                                    <div class="img-section">
                                                        <img class="img-fluid"
                                                            src="{{ asset(''.$p['image']) }}" title="{{ $p['title'] }}">
                                                    </div>
                                                    <div class="body text-center">

                                                        <p class="mb-1 mt-2" style="font-size: 12px;">{{ 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' }} </span></p>
                                                        {{-- <p class="mb-1 mt-2" style="font-size: 12px;">{{ $p['sr_no'] ?? 'NL-0001' }} | <span> {{ $p['date'] ?? '2022-03-26' }} </span></p> --}}
                                                        {{-- <p class="mb-2" style="font-size: 15px;"><b>{{ $p['type'] ?? 'Bags' }}</b></p> --}}
                                                    </div>
                                                </div>
                                            </a>
                                        </div>



                                    @endforeach

                            </div>
                        </div>
                    </div>

                    <hr>

                    {{-- <div class="row">
                        <div class="col-12 col-md-5 py-4">
                            <a class="remove-ul txt-black" target="_blank"
                                href="{{ url('/company') }}">
                                <img class="img-fluid"
                                    src="{{ asset(''.$c['banner']) }}">
                            </a>
                            <p class="mb-0 mt-3">
                                {{ $c['description'] ?? ' Lorem Ipsum is simply ' }}
                            </p>
                        </div>
                        <div class="col-12 col-md-7">

                            <div class="row g-2 mt-4">

                                @foreach ($c['products'] as $p)
                                    <div class="col-12 col-md-3">
                                        <a class="remove-ul txt-black" target="_blank"
                                            href="{{ url('/details') }}">
                                            <div class="border border-secondary p-2" style="background-color: white;">
                                                <div class="img-section">
                                                    <img class="img-fluid"
                                                        src="{{ asset(''.$p['image']) }}">
                                                </div>
                                                <div class="body text-center">
                                                    <p class="mb-1 mt-2" style="font-size: 12px;">{{ $p['sr_no'] ?? 'NL-0001' }} | <span> {{ $p['date'] ?? '2022-03-26' }} </span></p>
                                                    <p class="mb-2" style="font-size: 15px;"><b>{{ $p['type'] ?? 'Bags' }}</b></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <hr> --}}
                @empty
                    {{-- <div class="row">
                        <div class="col-12 col-md-5 py-4">
                            <a class="remove-ul txt-black" target="_blank"
                                href="https://wholesaledenimfabrics.com/demo/public/get-company-product-listing/12">
                                <img class="img-fluid"
                                    src="https://wholesaledenimfabrics.com/demo/public/upload/company/nicolee.jpg">
                            </a>
                            <p class="mb-0 mt-3">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy...
                            </p>
                        </div>
                        <div class="col-12 col-md-7">

                            <div class="row g-2 mt-4">

                                <div class="col-12 col-md-3">
                                    <a class="remove-ul txt-black" target="_blank"
                                        href="https://wholesaledenimfabrics.com/demo/public/product-detail/9">
                                        <div class="border border-secondary p-2" style="background-color: white;">
                                            <div class="img-section">
                                                <img class="img-fluid"
                                                    src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1648300803641detail_pic4.jpg">
                                            </div>
                                            <div class="body text-center">
                                                <p class="mb-1 mt-2" style="font-size: 12px;">NL-0001 | <span>2022-03-26</span></p>
                                                <p class="mb-2" style="font-size: 15px;"><b>Bags</b></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-3">
                                    <a class="remove-ul txt-black" target="_blank"
                                        href="https://wholesaledenimfabrics.com/demo/public/product-detail/10">
                                        <div class="border border-secondary p-2" style="background-color: white;">
                                            <div class="img-section">
                                                <img class="img-fluid"
                                                    src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1648300957546default.jpg">
                                            </div>
                                            <div class="body text-center">
                                                <p class="mb-1 mt-2" style="font-size: 12px;">NL-0002 | <span>2022-03-26</span></p>
                                                <p class="mb-2" style="font-size: 15px;"><b>Bags</b></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-3">
                                    <a class="remove-ul txt-black" target="_blank"
                                        href="https://wholesaledenimfabrics.com/demo/public/product-detail/11">
                                        <div class="border border-secondary p-2" style="background-color: white;">
                                            <div class="img-section">
                                                <img class="img-fluid"
                                                    src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1648749345619detail_pic3.jpg">
                                            </div>
                                            <div class="body text-center">
                                                <p class="mb-1 mt-2" style="font-size: 12px;">nl-0003 | <span>2022-03-26</span></p>
                                                <p class="mb-2" style="font-size: 15px;"><b>Bags</b></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-5 py-4">
                            <a class="remove-ul txt-black" target="_blank"
                                href="https://wholesaledenimfabrics.com/demo/public/get-company-product-listing/13">
                                <img class="img-fluid"
                                    src="https://wholesaledenimfabrics.com/demo/public/upload/company/banner_2677_202203101357371009.jpg">
                            </a>
                            <p class="mb-0 mt-3">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy...
                            </p>
                        </div>
                        <div class="col-12 col-md-7">

                            <div class="row g-2 mt-4">

                                <div class="col-12 col-md-3">
                                    <a class="remove-ul txt-black" target="_blank"
                                        href="https://wholesaledenimfabrics.com/demo/public/product-detail/12">
                                        <div class="border border-secondary p-2" style="background-color: white;">
                                            <div class="img-section">
                                                <img class="img-fluid"
                                                    src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1648749766504default2.jpg">
                                            </div>
                                            <div class="body text-center">
                                                <p class="mb-1 mt-2" style="font-size: 12px;">sr-00001 | <span>2022-03-26</span></p>
                                                <p class="mb-2" style="font-size: 15px;"><b>Dresses</b></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-3">
                                    <a class="remove-ul txt-black" target="_blank"
                                        href="https://wholesaledenimfabrics.com/demo/public/product-detail/13">
                                        <div class="border border-secondary p-2" style="background-color: white;">
                                            <div class="img-section">
                                                <img class="img-fluid"
                                                    src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1648749823556default.jpg">
                                            </div>
                                            <div class="body text-center">
                                                <p class="mb-1 mt-2" style="font-size: 12px;">sr-00002 | <span>2022-03-26</span></p>
                                                <p class="mb-2" style="font-size: 15px;"><b>Dresses</b></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-3">
                                    <a class="remove-ul txt-black" target="_blank"
                                        href="https://wholesaledenimfabrics.com/demo/public/product-detail/14">
                                        <div class="border border-secondary p-2" style="background-color: white;">
                                            <div class="img-section">
                                                <img class="img-fluid"
                                                    src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1648749885334default.jpg">
                                            </div>
                                            <div class="body text-center">
                                                <p class="mb-1 mt-2" style="font-size: 12px;">sr-00003 | <span>2022-03-26</span>
                                                </p>
                                                <p class="mb-2" style="font-size: 15px;"><b>Dresses</b></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-3">
                                    <a class="remove-ul txt-black" target="_blank"
                                        href="https://wholesaledenimfabrics.com/demo/public/product-detail/15">
                                        <div class="border border-secondary p-2" style="background-color: white;">
                                            <div class="img-section">
                                                <img class="img-fluid"
                                                    src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1648749908799pic1.jpg">
                                            </div>
                                            <div class="body text-center">
                                                <p class="mb-1 mt-2" style="font-size: 12px;">SR-00005 | <span>2022-03-26</span>
                                                </p>
                                                <p class="mb-2" style="font-size: 15px;"><b>Dresses</b></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <hr> --}}
                @endforelse



                @php $x=$x+1; @endphp
                @if ($x == 3 || $x == 6 || $x == 9)
                    <section class="reward-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <img class="img-fluid" src="https://wholesaledenimfabrics.com/demo/public/upload/banner/reward-banner.png">
                                </div>
                            </div>
                        </div>
                    </section>
                @endif


            </div>
        </section>




    @empty

    @endforelse

    @if(request()->has('page'))

    @php
        $next = 0;
        $prev = 0;
        if(request()->has('page') && request()->has('page') <= 5 && request()->has('page') >= 1){
            $next = request('page') + 1;

            $prev = request('page') - 1;
        }else{
            $next = $next + 1;
            $prev = $prev + 1;
        }

    @endphp
    @endif
    <section>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-4">
                    <ul class="pagination">

                        @if(request()->has('page') && request('page') > 1)
                            <div class="pagination-icons">
                                <a href="{{ url('/listing?page='.$prev) }}">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                {{-- <i class="fas fa-angle-double-left"></i> --}}
                            </div>
                        @else
                            <div class="pagination-icons">
                                <a>
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                {{-- <i class="fas fa-angle-double-left"></i> --}}
                            </div>
                        @endif

                        @if(request()->has('page'))
                            <li class="pagination-item @if(request('page') == 1) active @endif ">
                                <a href="{{ url('listing?page=1') }}">1</a>
                            </li>
                            <li class="pagination-item @if(request('page') == 2) active @endif ">
                                <a href="{{ url('listing?page=2') }}">2</a>
                            </li>
                            <li class="pagination-item @if(request('page') == 3) active @endif ">
                                <a href="{{ url('listing?page=3') }}">3</a>
                            </li>
                            <li class="pagination-item @if(request('page') == 4) active @endif ">
                                <a href="{{ url('listing?page=4') }}">4</a>
                            </li>
                            <li class="pagination-item @if(request('page') == 5) active @endif ">
                                <a href="{{ url('listing?page=5') }}">5</a>
                            </li>
                        @else
                            <li class="pagination-item active">
                                <a href="{{ url('listing?page=1') }}">1</a>
                            </li>
                            <li class="pagination-item">
                                <a href="{{ url('listing?page=2') }}">2</a>
                            </li>
                            <li class="pagination-item">
                                <a href="{{ url('listing?page=3') }}">3</a>
                            </li>
                            <li class="pagination-item">
                                <a href="{{ url('listing?page=4') }}">4</a>
                            </li>
                            <li class="pagination-item">
                                <a href="{{ url('listing?page=5') }}">5</a>
                            </li>
                        @endif


                        @if(request()->has('page') && request('page') < 5)
                            <div class="pagination-icons">
                                <a href="{{ url('/listing?page='.$next) }}">
                                    <i class="fas fa-chevron-right"></i>
                                    {{-- <i class="fas fa-angle-double-right"></i> --}}
                                </a>
                            </div>
                        @else
                            <div class="pagination-icons">
                                <a>
                                    <i class="fas fa-chevron-right"></i>
                                    {{-- <i class="fas fa-angle-double-right"></i> --}}
                                </a>
                            </div>
                        @endif

                      </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Latest Products --}}
    <div class="mt-2 c-bg-dark-red">
        <section class="section-m">
            <br>
            <div class="row custom-row-border" style="border-bottom: 1px solid white;">
                <div class="col-12 custom-heading-border" style="border-color: white;">
                    <h5 class="custom-heading text-white">Lastest Products</h5>
                </div>
            </div>

            <div class="row">

                <div class="col-12">

                    <div class="new-product-carousel row g-2 mt-4">

                        @forelse ($latestProducts as $k => $p)
                            <div class="col-2">
                                <a class="remove-ul txt-black" target="_blank" href="{{ url('/details') }}">
                                    <div class="border border-secondary p-2" style="background-color: white;">
                                        <div class="img-section">
                                            <img class="img-fluid" src="{{ asset(''.$p['image']) }}"  style="height: 256px;">
                                        </div>
                                        <div class="body text-center">
                                            <p class="mb-1 mt-2" style="font-size: 12px;">{{ $p['sr_no'] }} |
                                                <span> {{ $p['date'] }} </span>
                                            </p>
                                            <p class="mb-2" style="font-size: 15px;"><b> {{ $p['title'] ?? 'Shorts' }} </b></p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        @empty
                            {{-- <div class="col-2">
                                <a class="remove-ul txt-black"  target="_blank" href="https://wholesaledenimfabrics.com/demo/public/product-detail/19">
                                    <div class="border border-secondary p-2" style="background-color: white;">
                                        <div class="img-section">
                                            <img class="img-fluid"
                                                src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1648301400849pic1.jpg">
                                        </div>
                                        <div class="body text-center">
                                            <p class="mb-1 mt-2" style="font-size: 12px;">ENJ-00012312 | <span> 2022-03-26
                                                </span></p>
                                            <p class="mb-2" style="font-size: 15px;"><b> Jeans </b></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2">
                                <a class="remove-ul txt-black"  target="_blank" href="https://wholesaledenimfabrics.com/demo/public/product-detail/18">
                                    <div class="border border-secondary p-2" style="background-color: white;">
                                        <div class="img-section">
                                            <img class="img-fluid"
                                                src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1648300128742detail_pic3.jpg">
                                        </div>
                                        <div class="body text-center">
                                            <p class="mb-1 mt-2" style="font-size: 12px;">ENJ-0003 | <span> 2022-03-26 </span>
                                            </p>
                                            <p class="mb-2" style="font-size: 15px;"><b> Shorts </b></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2">
                                <a class="remove-ul txt-black"  target="_blank" href="https://wholesaledenimfabrics.com/demo/public/product-detail/17">
                                    <div class="border border-secondary p-2" style="background-color: white;">
                                        <div class="img-section">
                                            <img class="img-fluid"
                                                src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1648301716842detail_pic5.jpg">
                                        </div>
                                        <div class="body text-center">
                                            <p class="mb-1 mt-2" style="font-size: 12px;">ENJ-524946 | <span> 2006-09-28
                                                </span></p>
                                            <p class="mb-2" style="font-size: 15px;"><b> Bags </b></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2">
                                <a class="remove-ul txt-black"  target="_blank" href="https://wholesaledenimfabrics.com/demo/public/product-detail/16">
                                    <div class="border border-secondary p-2" style="background-color: white;">
                                        <div class="img-section">
                                            <img class="img-fluid"
                                                src="https://wholesaledenimfabrics.com/demo/public/upload/product/detail_pic2.jpg">
                                        </div>
                                        <div class="body text-center">
                                            <p class="mb-1 mt-2" style="font-size: 12px;">GS-0004 | <span> 2022-03-26 </span>
                                            </p>
                                            <p class="mb-2" style="font-size: 15px;"><b> Short Dresses </b></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2">
                                <a class="remove-ul txt-black"  target="_blank" href="https://wholesaledenimfabrics.com/demo/public/product-detail/15">
                                    <div class="border border-secondary p-2" style="background-color: white;">
                                        <div class="img-section">
                                            <img class="img-fluid"
                                                src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1648749908799pic1.jpg">
                                        </div>
                                        <div class="body text-center">
                                            <p class="mb-1 mt-2" style="font-size: 12px;">SR-00005 | <span> 2022-03-26 </span>
                                            </p>
                                            <p class="mb-2" style="font-size: 15px;"><b> Dresses </b></p>
                                        </div>
                                    </div>
                                </a>
                            </div> --}}
                        @endforelse

                    </div>

                </div>
            </div>
            <br>

        </section>
    </div>
@endsection

@push('footer')
    <script type="text/javascript" src="https://wholesaledenimfabrics.com/demo/public/frontend/js/slick-carousel/1.8.1/slick.min2b6a.js"></script>

    <script type="text/javascript" src="https://www.jqueryscript.net/demo/Responsive-Touch-enabled-jQuery-Image-Lightbox-Plugin/dist/simple-lightbox.jquery.min.js"></script>

    <script>
        $(function(){
            var gallery = $('.company-listing-gallery a').simpleLightbox({navText:    ['&lsaquo;','&rsaquo;']});
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".new-product-carousel").slick({
                autoplaySpeed: 800,
                autoplay: false,
                slidesToShow: 5,
                slidesToScroll: 1,
                arrows: true,
                responsive: [
                    {
                        breakpoint: 639,
                        settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
@endpush
