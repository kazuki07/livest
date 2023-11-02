@extends('layouts.app')

@section('content')
<div class="max-w-2xl">
    <div class="carousel" data-flickity='{ "autoPlay": 3000, "wrapAround": true }'>
        @for($i = 1; $i <= 3; $i++)
            <div class="carousel-cell">
                <img src="{{ asset('images/' . $i . '.jpeg') }}" alt="Image {{ $i }}">
            </div>
        @endfor
    </div>
</div>
@endsection
