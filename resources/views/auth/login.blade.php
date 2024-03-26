@extends('landingPage.app')

@section('container')
<div class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('assets/img/login.svg') }}');">
    <div class="bg-white max-w-md w-full p-10 rounded-lg shadow-lg mx-auto lg:mx-0">
        <img class="mx-auto h-14 w-auto" src="{{ asset('assets/img/Logo.png') }}" alt="Your Company">
        <h2 class="text-2xl font-semibold text-gray-800 mb-8 text-center mt-5">Login</h2>
        <form action="/login" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email:</label>
                <input type="text" id="email" name="email" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 ">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password:</label>
                <input type="password" id="password" name="password" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <button type="submit" class="w-full bg-emerald-800 text-white font-semibold py-2 px-4 rounded-lg hover:bg-emerald-700 focus:outline-none focus:bg-emerald-700">Kirim</button>
        </form>
        <p class="text-sm text-center text-gray-600 mt-4">Tidak memiliki Akun? <a href="/register/ketua" class="text-emerald-700 hover:text-emerald-700">Daftar disini</a></p>
    </div>
</div>
@endsection
