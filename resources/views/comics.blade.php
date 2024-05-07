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
        <div class="container p-4">
            <div class="row ">
                <div class="col d-flex align-items-center p-0">
                    <div class="link_b1 img_banner"></div>
                    <div>DIGITAL COMICS</div>
                </div>
                <div class="col d-flex align-items-center p-0">
                    <div class="link_b2 img_banner"></div>
                    <div>DIGITAL COMICS</div>
                </div>
                <div class="col d-flex align-items-center p-0">
                    <div class="link_b3 img_banner"></div>
                    <div>DIGITAL COMICS</div>
                </div>
                <div class="col d-flex align-items-center p-0">
                    <div class="link_b4 img_banner"></div>
                    <div>DIGITAL COMICS</div>
                </div>
                <div class="col d-flex align-items-center p-0">
                    <div class="link_b5 img_banner"></div>
                    <div>DIGITAL COMICS</div>
                </div>
            </div>
        </div>
    </div>
@endsection
