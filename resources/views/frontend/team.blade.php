@extends('layouts.master')

@push('header')
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">

    <style>
        .team-section {
            padding-top: 20px;
        }
        .team-section .image-container {
            position: relative;
            display: inline-block;
            overflow: hidden;
            border: 1px solid black;
            border-radius: 5px;
        }

        .team-section .image {
            display: block;
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }

        .team-section .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 93%;
            height: 93%;
            margin: 15px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .team-section .overlay .text {
            position: absolute;
            bottom: 50px;
            left: 30px;
            font-size: 1.5em;
            transition: transform 0.3s ease;
        }

        .team-section .overlay .text2 {
            position: absolute;
            bottom: 25px;
            left: 15px;
            font-size: 1em;
            transition: transform 0.3s ease;
        }

        .team-section .image-container:hover .image {
            transform: scale(1.1);
        }

        .team-section .image-container:hover .overlay {
            opacity: 1;
        }

        .team-section .image-container:hover .overlay .text {
            transform: scale(1.1);
        }
    </style>
@endpush
@section('content')
    <section class="team-section">
        <div class="container">
            <div class="row">
                @forelse ($teams as $team)
                    <div class="col-6 col-md-4">
                        <div class="image-container">
                            <img src="{{ $team->getFirstMediaUrl('profileImage') }}" alt="profileImage" class="image" />
                            <div class="overlay">
                                <span class="text">{{  $team->name ?? '' }}</span>
                                <span class="text2">{{ $team->designation ?? '' }}</span>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
                <div class="col-6 col-md-4"></div>
            </div>
        </div>
    </section>
@endsection


@push('footer')
@endpush
