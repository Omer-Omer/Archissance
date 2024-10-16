
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
                        @php
                            $data = array(
                                array(
                                    'c_name' => 'ABC',
                                    'c_url' => 'g.com',
                                    'c_decription' => 'g.com',
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
                        @for ($i=1; $i<=4; $i++)
                            <div class="col-12 col-md-3" style="">
                                <div>
                                    <div class="c-light-grey-broder mx-2">
                                        {{-- <a href="{{ url('/details') }}" class="r-ul txt-black" target="_blank"> --}}
                                        <a target="_blank" href="{{ url('/company?name='.$data[$i]['c_name']) }}" class="r-ul txt-black" target="_blank">
                                            <img class="img-gluid img-height" width="100%" src="{{ asset('images/women-dressing-image'.$i.'.jpg') }}" style="height: 320px;">

                                            <div class="p-3 txt-black">
                                                <h4 style="font-size: 18px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                                    <b class="c-bb-1p" style="border-bottom: 1px solid black;">{{ $data[$i]['c_name'] ?? '' }}</b>
                                                </h4>
                                                <hr>
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

                                    {{-- <a class="w-100 r-ul" target="_blank" href="{{ url('/company?name='.$data[$i]['c_name']) }}">
                                        <div class="row gx-1 c-light-grey  mx-2">
                                            <div class="col-12 p-2 text-center">
                                                <p class="txt-black mb-0">View Details</p>
                                            </div>
                                        </div>
                                    </a> --}}
                                </div>
                            </div>
                        @endfor

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
