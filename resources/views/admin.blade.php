@extends('layouts.admin')

@section('content')
    @include('partials.admin._tabs')
    <div class="tab-content mt-3" id="myTabContent">
        @include('partials.admin._hero-tab')
        @include('partials.admin._about-tab')
        @include('partials.admin._skills-tab')
        @include('partials.admin._portfolios-tab')
        @include('partials.admin._blogs-tab')
        @include('partials.admin._contact-tab')
    </div>
@endsection
