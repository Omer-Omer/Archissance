@extends('layouts.master')

@push('header')


<link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css">
<link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">

<style>
    .multiple-items .view-all-grid {
        position: relative;
        height: 453px;
        background-color: #80808014;
    }
    .multiple-items .view-all-grid a {
        background: #fff;
        font-size: 22px;
        padding: 10px 20px;
        position: absolute;
        text-align: center;
        top: 50%;
        left: 30%;
        text-decoration: none;
        color: black;
    }
    .multiple-items .slick-prev:before, .slick-next:before {
        color: #3e3e3e !important;
        /* content: ''; */
    }
    .multiple-items .slick-prev {
        left: -6px !important;
    }
    .multiple-items .slick-next {
        right: -6px !important;
    }
    .new-product-carousel .slick-prev:before, .slick-next:before {
        color: #3e3e3e !important;
    }
</style>
@endpush
@section('content')

<section class="background-image" style="background-image: url('{{ asset('images/cover.jpg') }}');">
    {{-- <div class="overlay"></div> --}}
    <section class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-md-3 col-md-6">
                    <div class="">
                        <form class="search-form">
                            <div class="text-center">
                                <h1 class="text-white heading-style">Pakistan &nbsp;Apparel &nbsp;Suppliers</h1>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Source from quality manufacturers... " aria-label="Search" aria-describedby="button-addon2">
                                <button class="btn btn-primary" type="button" id="button-addon2">
                                    <i class="fas fa-search"></i>
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<section class="advantage-section p-tb-40">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <div class="heading text-center">
                    <h1 class="mb-0">Advantages</h1>
                    <span>EARN MORE WITH OPEN PALLET</span>
                </div>
            </div>
        </div>
        <div class="row g-3 p-3">
            <div class="col-12 col-md-3">
                <div class="body">
                    <div class="icon">
                        <i class="fas fa-tag"></i>
                    </div>
                    <h3>Sell Now</h3>
                    <p>Retail ready inventory for sale</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="body">
                    <div class="icon">
                        <i class="fas fa-cube"></i>
                    </div>
                    <h3>Verified sourcing</h3>
                    <p>Manufacturer direct merchandise</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="body">
                    <div class="icon">
                        <i class="fas fa-money-bill"></i>
                    </div>
                    <h3>High margins</h3>
                    <p>Products up to 90% off retail</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="body">
                    <div class="icon">
                        <i class="fas fa-tag"></i>
                    </div>
                    <h3>No surprises</h3>
                    <p>Single product lots with no mixed items</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- @include('Includes.product-section') --}}
{{-- @include('includes.women-clothing-section') --}}


<section class="p-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading">
                    <h4 class="mb-3"><b class="c-bb-1p">Womens Clothing</b></h4>
                    <p class="mb-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-12 col-md-3">
                <a class="r-ul" href="{{ url('/listing') }}">
                    <img class="img-fluid" src="{{ asset('images/women-dressing-image-banner.jpg') }}" alt="Snow">
                </a>
            </div>
            <div class="col-12 col-md-9">
                <div class="row gx-3">
                    <div class="slider multiple-items">

                        @forelse ($companies as $company)
                            <div class="col-12 col-md-3" style="">
                                <div>
                                    <div class="c-light-grey-broder mx-2">
                                        {{-- <a href="{{ url('/details') }}" class="r-ul txt-black" target="_blank"> --}}
                                        <a target="_blank" href="{{ url('/company?name='.str_replace(' ', '-', $company->name)) }}" class="r-ul txt-black" target="_blank">

                                            @if ($company->products->isNotEmpty())
                                                @php
                                                    $firstProduct = $company->products->first();
                                                @endphp

                                                @if ($firstProduct->getFirstMedia('thumbnail-image'))
                                                    <img class="img-gluid img-height" src="{{ $firstProduct->getFirstMedia('thumbnail-image')->getUrl() }}" alt="Product Image" style="height: 320px;">
                                                @else
                                                    <p>No image available for this product.</p>
                                                @endif
                                            @else
                                            @endif

                                            {{-- <img class="img-gluid img-height" width="100%" src="{{ asset('images/women-dressing-image'.$i.'.jpg') }}" style="height: 320px;"> --}}

                                            <div class="p-3 txt-black">
                                                <h4 style="font-size: 18px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                                    <b class="c-bb-1p" style="border-bottom: 1px solid black;">{{ $company->name ?? '' }}</b>
                                                </h4>
                                                <hr>
                                                <h5 class="mt-2 f-16p primary-color"><b>{{ $company->products->first()->name ?? '' }}</b></h5>
                                                <p class="f-12p mb-1">Price: <b>{{ $company->products->first()->price ?? '' }}</b></p>
                                                <p class="f-12p mb-1">
                                                    <span>In Stock:</span>
                                                    <small class="success"><b>{{ $company->products->first()->stock_status ?? '' }}</b></small>
                                                </p>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        @empty

                        @endforelse

                        <div class="col-12 col-md-3 view-all-grid" style="">
                            <div style="">
                                <a target="_blank" href="{{ url('/listing') }}" >View All
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@include('includes.men-clothing-section')
@include('includes.institutional-apparel-section')

<section class="reward-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img class="img-fluid" src="https://wholesaledenimfabrics.com/demo/public/upload/banner/reward-banner.png">
            </div>
        </div>
    </div>
</section>


@include('includes.hoodie-section')
@include('includes.plus-size-clothing-section')
@include('includes.party-wear-section')

<section class="reward-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pb-3">
                    <a class="remove-ul f-24p" target="_blank" href="{{ url('/categories') }}">View All Apparel Categories </a>
                </div>
            </div>
            <div class="col-12">
                <img class="img-fluid" src="https://wholesaledenimfabrics.com/demo/public/upload/banner/reward-banner.png">
            </div>
        </div>
    </div>
</section>

{{-- Latest Prodcuts --}}
@php
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

{{-- Latest Products --}}
<div class="mt-2" style="background-color: rgb(207 207 207 / 13%);">
    <section class="section-m">
        <br>
        <div class="row custom-row-border" style="border-bottom: 1px solid black;">
            <div class="col-12 custom-heading-border" style="border-color: black;">
                <h5 class="custom-heading">Lastest Products</h5>
            </div>
        </div>

        <div class="row">

            <div class="col-12">

                <div class="new-product-carousel row g-2 mt-4">

                    @forelse ($latestProducts as $k => $p)
                        <div class="col-2">
                            <a class="remove-ul txt-black" target="_blank" href="{{ url('/details') }}">
                                <div class="border border-secondary m-2" style="background-color: white;">
                                    <div class="img-section">
                                        <img class="img-fluid" src="{{ asset(''.$p['image']) }}" style="height: 256px;">
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


@include('includes.women-clothing-section')
@include('includes.men-clothing-section')
@include('includes.institutional-apparel-section')

<section class="reward-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pb-3">
                    <a class="remove-ul f-24p" target="_blank" href="{{ url('/categories') }}">View All Apparel Categories </a>
                </div>
            </div>
            <div class="col-12">
                <img class="img-fluid" src="https://wholesaledenimfabrics.com/demo/public/upload/banner/reward-banner.png">
            </div>
        </div>
    </div>
</section>

@include('includes.hoodie-section')
@include('includes.plus-size-clothing-section')
@include('includes.party-wear-section')

<section class="reward-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pb-3">
                    <a class="remove-ul f-24p" target="_blank" href="{{ url('/categories') }}">View All Apparel Categories </a>
                </div>
            </div>
            <div class="col-12">
                <img class="img-fluid" src="https://wholesaledenimfabrics.com/demo/public/upload/banner/reward-banner.png">
            </div>
        </div>
    </div>
</section>


{{-- <section class="reward-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pb-3">
                    <a class="remove-ul f-24p" target="_blank" href="{{ url('/categories') }}">View All Apparel Categories </a>
                </div>
            </div>
            <div class="col-12">
                <img class="img-fluid" src="https://wholesaledenimfabrics.com/demo/public/upload/banner/reward-banner.png">
            </div>
        </div>
    </div>
</section> --}}


@endsection


@push('footer')
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>

<script>
    $('.multiple-items').slick({
        // infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>',
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
