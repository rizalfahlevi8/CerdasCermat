@extends('app')

@section('container')
    {{-- Navbar --}}
    @include('landingPage.navbar')

    {{-- Content --}}
    @include('landingPage.content')

    {{-- Footer --}}
    @include('landingPage.footer')
@endsection

