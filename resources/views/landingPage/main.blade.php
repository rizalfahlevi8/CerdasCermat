@extends('landingPage.app')

@section('container')
    {{-- Navbar --}}
    @include('landingPage.navbar')

    {{-- Content --}}
    @include('landingPage.content')

    {{-- Peringkat --}}
    @include('landingPage.Rank')

    {{-- Footer --}}
    @include('landingPage.footer')
@endsection

