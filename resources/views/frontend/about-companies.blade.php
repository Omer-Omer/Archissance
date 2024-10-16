@extends('layouts.master')

@push('header')
    <style>
        #customers2 td, #customers2 th {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
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

<div class="container mt-5">
    <div class="row">
        <div class="col-12 offset-md-2 col-md-8">
            <div class="row">
                <h1 style="font-size:30px;"> Leadership </h1><br>
                <h1 style="font-size:22px;">BOARD OF DIRECTORS</h1>
                <div class="col-md-3"><font color="#000000">Jack Yun MA</font><br>Executive Chairman</div>
                <div class="col-md-3"><font color="#000000">Joseph C. TSAI</font><br>Executive Vice Chairman</div>
                <div class="col-md-3"><font color="#000000">Daniel Yong ZHANG</font><br>Director and Chief Executive Office</div>
                <div class="col-md-3"><font color="#000000">J. Michael EVANS</font><br>Director and President</div>
            </div><br>
            <div class="row">
                <div class="col-md-3"><font color="#000000">Masayoshi SON</font><br>Director</div>
                <div class="col-md-3"><font color="#000000">Eric Xiandong JING</font><br>Director</div>
                <div class="col-md-3"><font color="#000000">Chee Hwa TUNG</font><br>Independent Director</div>
                <div class="col-md-3"><font color="#000000">Walter Teh Ming KWAUK</font><br>Independent Director</div>
            </div><br>
            <div class="row">
                <div class="col-md-3"><font color="#000000">Jerry YANG</font><br>Independent Director</div>
                <div class="col-md-3"><font color="#000000">Börje E. EKHOLM</font><br>Independent Director</div>
                <div class="col-md-3"><font color="#000000">Wan Ling MARTELLO</font><br>Independent Director</div>
                <div class="col-md-3">&nbsp;</div>
            </div><br>
            <div class="row">
                <h1 style="font-size:22px;"> SENIOR MANAGEMENT</h1><br>
                <div class="col-md-4"><img src="{{ asset('images/about_companies/ROZ-INDUSTRIES.jpg') }}">  </div>
                <div class="col-md-4"><img src="{{ asset('images/about_companies/HARTMANN-INTERNATIONAL-TRAD.jpg') }}">  </div>
                <div class="col-md-4"><img src="{{ asset('images/about_companies/LEXON-INDUSTRIES.jpg') }}">  </div>
                <div class="col-md-4"><img src="{{ asset('images/about_companies/TDG-IMPEX-1.jpg') }}">  </div>
                <div class="col-md-4"><img src="{{ asset('images/about_companies/DADA-CHIRAGH-MANUFACTURING-.jpg') }}">  </div>
                <div class="col-md-4"><img src="{{ asset('images/about_companies/GRACE-IMPEX-1.jpg') }}">  </div>
                <div class="col-md-4"><img src="{{ asset('images/about_companies/Zander-Enterprises-1.jpg') }}">  </div>
                <div class="col-md-4"><img src="{{ asset('images/about_companies/E.-Land-Group.jpg') }}">  </div>
                <div class="col-md-4"><img src="{{ asset('images/about_companies/VINOR-SPORTS-INDUSTRY-1.jpg') }}">  </div>
                <div class="col-md-4"><img src="{{ asset('images/about_companies/ELITE-IMPEX.jpg') }}">  </div>
                <div class="col-md-4">&nbsp;</div>
                <div class="col-md-4">&nbsp;</div>
            </div>
        </div>
    </div>
</div>

@endsection
