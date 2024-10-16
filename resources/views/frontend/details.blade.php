@extends('layouts.master')

@push('header')
    <link type="text/css" rel="stylesheet"
        href="https://wholesaledenimfabrics.com/demo/public/frontend/js/slick-carousel/1.8.1/slick.min67a2.css" />
    <link type="text/css" rel="stylesheet"
        href="https://wholesaledenimfabrics.com/demo/public/frontend/js/slick-carousel/1.8.1/slick-theme.min6715.css" />

    <style>
        .product-listing .slider .slick-next:before,
        .slick-prev:before {
            color: #370101 !important;
            opacity: 10 !important;
            font-size: 24px !important;
        }
    </style>
@endpush

@section('content')
    @include('includes.companies-data')

    <br>
    <br>
    <br>
    <br>
    @php
        $detail = [];
        $detail['title'] = 'Party Wear Dressing';
        $detail['description'] = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.';
        $detail['cateogry'] = 'Party Wear';
        $detail['fabric'] = 'Good';
        $detail['content'] = 'Content';
        $detail['last_update'] = '2022-03-26';
        $detail['made_in'] = 'Turkey';
        $detail['comments'] = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.';
        $detail['product_images'] = [
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
            // [
            //     'image' => 'images/party-wear-image3.jpg',
            //     'type' => 'party',
            //     'title' => 'Party Wearing',
            //     'date' => '2023-03-26',
            //     'sr_no' => 'sr-00',
            // ],
            // [
            //     'image' => 'images/party-wear-image4.jpg',
            //     'type' => 'party',
            //     'title' => 'Party Wearing',
            //     'date' => '2023-03-26',
            //     'sr_no' => 'sr-00',
            // ],
        ];
    @endphp

    <section class="product-listing" style="margin:0px 85px;">

        <div class="row">
            <div class="col-12">
                <div class="row custom-row-border">
                    <div class="col-12 pt-3 custom-heading-border">
                        <h5 class="custom-heading">Product Details</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-5">

                <div class="main">
                    <div class="slider product-slider-for">
                        @forelse ($detail['product_images'] as $d)
                            <div class="img-section">
                                <img class="img-fluid" style="height: auto;" src="{{ asset("/").$d['image'] }}">
                            </div>
                        @empty

                        @endforelse
                    </div>

                    <div class="slider product-slider-nav mt-3">
                        @forelse ($detail['product_images'] as $d)
                            <div class="px-2">
                                <div class="img-section">
                                    <img class="img-fluid" src="{{ asset("/").$d['image'] }}">
                                </div>
                            </div>
                        @empty

                        @endforelse
                    </div>

                </div>
            </div>

            <div class="col-6" style="margin-left: 25px;">

                <div>
                    <h5>{{ $detail['title'] ?? 'Beautiful Short 2' }}</h5>
                    <p>
                        {{ $detail['description'] ?? 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' }}
                    </p>
                </div>


                <div class="d-flex align-item-center">
                    <h5 class="font-17p"></h5>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <p class="ml-3"></p>
                </div>
                <div class="d-flex align-item-center">
                    <h5 class="font-17p">Category:</h5>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <p class="ml-3"> {{ $detail['category'] ?? 'Shorts' }}</p>
                </div>
                <div class="d-flex align-item-center">
                    <h5 class="font-17p"> Fabric: </h5>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <p class="ml-3"> {{ $detail['fabric'] ?? 'denim' }}</p>
                </div>
                <div class="d-flex align-item-center">
                    <h5 class="font-17p">Content: </h5>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <p class="ml-3">Content</p>
                </div>
                <div class="d-flex align-item-center">
                    <h5 class="font-17p">Last Update: </h5>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <p class="ml-3"> {{ $detail['last_update'] ?? '2022-03-26' }}</p>
                </div>
                <div class="d-flex align-item-center">
                    <h5 class="font-17p">Made In: </h5>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <p class="ml-3"> {{ $detail['made_in'] ?? 'turkey' }}</p>
                </div>

                <div class="row mt-5">
                    <div class="col-12">
                        <h4>Comments</h4>
                        <p>
                            {{ $detail['comments'] ?? 'comments' }}
                        </p>
                    </div>
                </div>

            </div>

            <div class="row section-m-t">
                <div class="col-12">
                    <div class="row custom-row-border">
                        <div class="col-12 pt-3 custom-heading-border">
                            <h5 class="custom-heading">Related Products</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row  g-2">

                @forelse ($latestProducts as $p)
                    <div class="col-2">
                        <div class="img-section">
                            <img class="img-fluid"
                                src="{{ asset(''.$p['image']) }}">
                        </div>
                        <div class="body text-center">
                            <p class="mb-1 mt-2"> {{ $p['sr_no'] ?? 'ENJ-0001' }} | <span> {{ $p['date'] ??
                            '2022-03-26' }} </span></p>
                            <p class="mb-2"><b> {{ $p['type'] ?? 'Shorts' }} </b></p>
                        </div>
                    </div>
                @empty
                    {{-- <div class="col-2">
                        <div class="img-section">

                            <img class="img-fluid"
                                src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1663411643583default.jpg">
                        </div>
                        <div class="body text-center">
                            <p class="mb-1 mt-2"> enj-0002 | <span> 2022-03-26 </span></p>
                            <p class="mb-2"><b> Shorts </b></p>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="img-section">

                            <img class="img-fluid"
                                src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1663411912863default.jpg">
                        </div>
                        <div class="body text-center">
                            <p class="mb-1 mt-2"> enj-0003 | <span> 2022-03-26 </span></p>
                            <p class="mb-2"><b> Shorts </b></p>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="img-section">

                            <img class="img-fluid"
                                src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1648300128742detail_pic3.jpg">
                        </div>
                        <div class="body text-center">
                            <p class="mb-1 mt-2"> ENJ-0003 | <span> 2022-03-26 </span></p>
                            <p class="mb-2"><b> Shorts </b></p>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="img-section">

                            <img class="img-fluid"
                                src="https://wholesaledenimfabrics.com/demo/public/upload/product/thumbnail/1663412851733detail_pic2.jpg">
                        </div>
                        <div class="body text-center">
                            <p class="mb-1 mt-2"> sku-000A321 | <span> 2021-11-30 </span></p>
                            <p class="mb-2"><b> Shorts </b></p>
                        </div>
                    </div> --}}
                @endforelse



            </div>

        </div>
    </section>
@endsection

@push('footer')
    <script type="text/javascript"
        src="https://wholesaledenimfabrics.com/demo/public/frontend/js/slick-carousel/1.8.1/slick.min2b6a.js"></script>

    <script>
        $('.product-slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.product-slider-nav'
        });

        $('.product-slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.product-slider-for',
            dots: false,
            focusOnSelect: true
        });

        $('a[data-slide]').click(function(e) {
            e.preventDefault();
            var slideno = $(this).data('slide');
            $('.product-slider-nav').slick('slickGoTo', slideno - 1);
        });
    </script>
@endpush
