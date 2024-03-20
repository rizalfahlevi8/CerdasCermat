@extends('app')

@section('container')
<div class="bg-gradient-to-br from-purple-300 to-purple-700 min-h-screen flex items-center justify-center">
    <div class="bg-white max-w-md w-full p-10 rounded-lg shadow-lg mx-auto lg:mx-0" style="margin-left: 4cm;">
        <h1 class="font-bold">Token Tim</h1>
        <p>{{ $token }}</p>

        <p class="text-slate-500 my-5 text-sm">Mohon simpan Token ini, yang akan digunakan untuk pendaftaran anggota kelompok.</p>
        <p class="text-center">
            <a href="/login" class="bg-gradient-to-br from-purple-500 to-purple-700 hover:bg-blue-700 text-white font-medium text-sm py-2 px-4 rounded mb-5">Login</a>
        </p>
    </div>
</div>
@endsection
