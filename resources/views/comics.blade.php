@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="title mb-5">
                CURRENT SERIES
            </div>

        </div>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="card bg_card">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <h6 class="title_card text-uppercase py-4">{{ $comic['series'] }}</h6>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center btn_load p-4">

            <button>LOAD MORE</button>
        </div>
    </div>
    <div class="bg_banner">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-2">
                    <img class="img_banner" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                        alt="">

                </div>
                <div class="col-2">
                    BANNER 1
                </div>
                <div class="col-2">
                    BANNER 1
                </div>
                <div class="col-2">
                    BANNER 1
                </div>
                <div class="col-2">
                    BANNER 1
                </div>
            </div>
        </div>
    </div>
@endsection
