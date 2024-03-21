@extends('landingPage.app')

@section('container')
<div class="bg-gradient-to-br from-purple-300 to-purple-700 min-h-screen flex items-center justify-center">
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
            <button type="submit" class="w-full bg-gradient-to-br from-purple-500 to-purple-700 text-white font-semibold py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Kirim</button>
        </form>
        <p class="text-sm text-center text-gray-600 mt-4">Tidak memiliki Akun? <a href="/register/ketua" class="text-indigo-600 hover:text-indigo-500">Daftar disini</a></p>
    </div>
</div>
@endsection
