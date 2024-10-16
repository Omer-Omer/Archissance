
@php
$clothing = array(
    array(
        'type' => 'apparel_design_services',
        'image' => 'apparel_design_services.jpg',
    ),
    array(
        'type' => 'apparel_processing_services',
        'image' => 'apparel_processing_services.jpg',
    ),
    array(
        'type' => 'apparel_stock',
        'image' => 'apparel_stock.jpg',
    ),
    array(
        'type' => 'children_clothing',
        'image' => 'children_clothing.png',
    ),
    array(
        'type' => 'dresses',
        'image' => 'dresses.jpg',
    ),
    array(
        'type' => 'hoodies_and_sweet_shirts',
        'image' => 'hoodies_and_sweet_shirts.jpg',
    ),
    array(
        'type' => 'hosiery',
        'image' => 'hosiery.jpg',
    ),
    array(
        'type' => 'institutional_apparel',
        'image' => 'institutional_apparel.jpg',
    ),
    array(
        'type' => 'maternity_clothing',
        'image' => 'maternity_clothing.jpg',
    ),
    array(
        'type' => 'men_clothing',
        'image' => 'men_clothing.jpg',
    ),
    array(
        'type' => 'missy',
        'image' => 'missy.jpg',
    ),
    array(
        'type' => 'plus_size_clothing',
        'image' => 'plus_size_clothing.jpg',
    ),
    array(
        'type' => 'skirts',
        'image' => 'skirts.jpg',
    ),
    array(
        'type' => 'sleep_wears',
        'image' => 'sleep_wears.jpg',
    ),
    array(
        'type' => 'sports_wear',
        'image' => 'sports_wear.jpg',
    ),
    array(
        'type' => 'tank_tops',
        'image' => 'tank_tops.jpg',
    ),
    array(
        'type' => 't_shirts',
        'image' => 't_shirts.jpg',
    ),
    array(
        'type' => 'underwear',
        'image' => 'underwear.jpg',
    ),
    array(
        'type' => 'uniforms',
        'image' => 'uniforms.jpg',
    ),
    array(
        'type' => 'wedding_apparel_and_accessories',
        'image' => 'wedding_apparel_and_accessories.jpg',
    ),
    array(
        'type' => 'women_clothing',
        'image' => 'women_clothing.jpg',
    ),
    array(
        'type' => 'workwear',
        'image' => 'workwear.jpg',
    ),
    array(
        'type' => 'hosiery',
        'image' => 'hosiery.jpg',
    ),
    array(
        'type' => 'hosiery',
        'image' => 'hosiery.jpg',
    ),
);
@endphp

<section class="p-tb-40">
    <div class="container">
        <div class="row g-3">
            @foreach ($clothing as $cl)
                <div class="col-12 col-md-3">
                    <img class="img-fluid" src="{{ asset('images/categories/'.$cl['image']) }}">
                    <h5 class="txt-capitalize my-3">{{ str_replace("_"," ", $cl['type']);  }}</h5>
                </div>
            @endforeach
        </div>
    </div>
</section>
