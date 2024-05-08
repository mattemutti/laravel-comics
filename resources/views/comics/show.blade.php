@extends('layouts.app')

@section('content')
    <div class="comic">
        <div class="banner_dc">
            <div class="container">
                <img class="img_comic" src="{{ $comic['thumb'] }}" alt="">
            </div>
        </div>

        <div class="container">
            <div class="row ">
                <div class="col d-flex p-4">
                    <div class="col-9 ">
                        <h2 class="py-4">{{ $comic['title'] }}</h2>
                        <div class="py-4">{{ $comic['price'] }}</div>
                        <div class="">{{ $comic['description'] }}</div>
                    </div>

                    <img class="col-3" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                </div>

            </div>
        </div>
    </div>
@endsection
