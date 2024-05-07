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
@endsection
