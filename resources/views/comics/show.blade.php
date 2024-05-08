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
                    <div class="col-9 px-4">
                        <h2 class="py-4">{{ $comic['title'] }}</h2>
                        <div class="d-flex">
                            <div class=" d-flex py-4 price_section justify-content-between col-8">
                                <div class="px-2"> US Price: {{ $comic['price'] }}</div>
                                <div class="px-2">AVAILABLE</div>
                            </div>
                            <div class="col-4 price_section align-content-center text-end px-2">
                                Check Availibility
                            </div>
                        </div>
                        <div class="py-4 mb-5">{{ $comic['description'] }}</div>
                    </div>
                    <div class="col-3 p-2">
                        <h6 class="text-end">ADVERTISEMENT</h6>
                        <div>
                            <img class="img_advertising" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                        </div>
                    </div>

                </div>


                <div></div>

            </div>
        </div>
    </div>
@endsection
