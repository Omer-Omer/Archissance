@extends('layouts.master')

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
                                <h1 class="text-white heading-style">Pakistan Apparel Suppliers</h1>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="What are you looking for... " aria-label="Search" aria-describedby="button-addon2">
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

@include('includes.categories-list')

@endsection
