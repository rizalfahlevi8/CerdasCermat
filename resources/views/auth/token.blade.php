@extends('landingPage.app')

@section('container')
<div class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('assets/img/login.svg') }}');">
    <div class="bg-white max-w-md w-full p-10 rounded-lg shadow-lg mx-auto lg:mx-0">
        <h1 class="font-bold">Token Tim</h1>
        <p class="font-medium text-2xl my-3">{{ $token }}</p>

        <p class="text-slate-500 my-5 text-sm">Mohon simpan Token ini, yang akan digunakan untuk pendaftaran anggota kelompok.</p>
        <p class="text-center">
            <a href="/login" class="bg-esmerald-800 hover:bg-esmerald-700 text-white font-medium text-sm py-2 px-4 rounded mb-5">Login</a>
        </p>
    </div>
</div>
@endsection
