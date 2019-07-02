@extends('layouts.front')
@section('content')
    @include('partials.front._navbar')
    <div class="hero-image" id="home">
        @include('partials.front._hero-text')
    </div>
    <div class="container">
        @include('partials.front._about')
        @include('partials.front._tech-stack')
        @include('partials.front._portfolio')
        @include('partials.front._blogs')
    </div>
    @include('partials.front._contact')
@endsection
