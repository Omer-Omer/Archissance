
<section class="p-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading">
                    <h4 class="mb-3"><b class="c-bb-1p">Hoodies</b></h4>
                    <p class="mb-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
        </div>
        <div class="row gx-3">
            <div class="col-12 col-md-3">
                <a class="r-ul" href="{{ url('/listing') }}">
                    <img class="img-fluid" src="{{ asset('images/hoodie-banner.jpg') }}" alt="Snow">
                </a>
            </div>
            <div class="col-12 col-md-9">
                <div class="row gx-3">
                    @for ($i=1; $i<=4; $i++)
                    <div class="col-12 col-md-3">
                        <div class="c-light-grey-broder">
                            <a href="{{ url('/details') }}" class="r-ul txt-black" target="_blank">
                                <img class="img-gluid img-height" width="100%" src="{{ asset('images/hoodie-'.$i.'.jpg') }}">

                                <div class="p-3 txt-black">
                                    <h5 class="mt-3 f-16p primary-color"><b>Hoodie {{ $i }}</b></h5>
                                    @php $price = $i * 60; @endphp
                                    <p class="f-12p mb-1">Price: <b>{{ $price .'.00' }}</b></p>
                                    <p class="f-12p mb-1">
                                        <span>In Stock:</span>
                                        <small class="success"><b>Available</b></small>
                                    </p>
                                </div>
                            </a>
                        </div>

                        {{-- <a class="w-100 r-ul" href="#">
                            <div class="row gx-1 c-light-grey">
                                <div class="col-12 p-2 text-center">
                                    <p class="txt-black mb-0">View Details</p>
                                </div>
                            </div>
                        </a> --}}
                    </div>
                    @endfor
                </div>
            </div>

        </div>
    </div>
</section>
