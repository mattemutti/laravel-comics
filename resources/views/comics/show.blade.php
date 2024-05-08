@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-6">{{ $comic['series'] }}</div>
            <div class="col-6">{{ $comic['description'] }}</div>

        </div>
    </div>
@endsection
