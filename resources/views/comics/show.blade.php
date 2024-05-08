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
                <div class="col d-flex py-4">
                    <div class="col-9 me-3">
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
                        <h5 class="text-end">ADVERTISEMENT</h5>
                        <div>
                            <img class="img_advertising" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="specifics">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4 class="py-4 border-bottom">Talent</h4>
                    <div class="d-flex py-4">
                        <div class="col-4 border-bottom">
                            Art By:
                        </div>
                        <div class="col-8 text-primary border-bottom">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto eos sunt corporis veniam
                            voluptatem quae magnam atque amet accusantium odio doloremque placeat, qui ad quos dignissimos
                            quam quod odit debitis?
                        </div>
                    </div>
                    <div class="d-flex py-4">
                        <div class="col-4 border-bottom">
                            Written By:
                        </div>
                        <div class="col-8 text-primary border-bottom">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto eos sunt corporis veniam
                            voluptatem quae magnam atque amet accusantium odio doloremque placeat, qui ad quos dignissimos
                            quam quod odit debitis?
                        </div>
                    </div>
                </div>


                <div class="col-6">
                    <h4 class="py-4 border-bottom">Spec</h4>
                    <div class="d-flex py-4">
                        <div class="col-4 border-bottom">
                            Series:
                        </div>
                        <div class="col-8 text-uppercase text-primary border-bottom">
                            {{ $comic['type'] }}
                        </div>
                    </div>
                    <div class="d-flex py-4">

                        <div class="col-4 border-bottom">
                            US Price:
                        </div>
                        <div class="col-8 text-uppercase text-primary border-bottom">
                            {{ $comic['price'] }}
                        </div>
                    </div>
                    <div class="d-flex py-4">

                        <div class="col-4 border-bottom">
                            On Sale Date:
                        </div>
                        <div class="col-8 text-uppercase text-primary border-bottom">
                            {{ $comic['sale_date'] }}
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-3 d-flex justify-content-between text-secondary py-4">
                    <h6 class="align-content-center"> DIGITAL COMICS</h6>
                    <img class="img_banner" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                        alt="">
                </div>
                <div class="col-3 d-flex justify-content-between text-secondary py-4">
                    <h6 class="align-content-center"> SHOP DC</h6>
                    <img class="img_banner" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                        alt="">
                </div>
                <div class="col-3 d-flex justify-content-between text-secondary py-4">
                    <h6 class="align-content-center"> COMIC SHOP LOCATOR</h6>
                    <img class="img_banner" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                        alt="">
                </div>
                <div class="col-3 d-flex justify-content-between text-secondary py-4">
                    <h6 class="align-content-center"> SUBSCRIPTIONS</h6>
                    <img class="img_banner" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                        alt="">
                </div>
            </div>
        </div>

    </div>
@endsection
