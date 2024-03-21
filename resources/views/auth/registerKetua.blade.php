@extends('landingPage.app')

@section('container')
  
<div class="bg-gradient-to-br from-purple-300 to-purple-700  min-h-screen flex items-center justify-center">
    <div class="bg-white max-w-md w-full p-10 rounded-lg shadow-lg mx-auto lg:mx-0 my-[2cm]">
        <img class="mx-auto h-14 w-auto" src="{{ asset('assets/img/Logo.png') }}" alt="Your Company">
        <h2 class="text-2xl font-semibold text-gray-800 mb-8 text-center mt-5">Pendaftaran</h2>

        <div class="flex justify-between">
            <button type="button" id="switchToSignIn" onclick="window.location.href='/register/ketua'" class="mr-1 group relative w-1/2 flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-to-br from-purple-500 to-purple-700 hover:bg-purple-950 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Ketua
            </button>
            <button type="button" id="switchToSignUp" onclick="window.location.href='/register/anggota'" class="ml-1 group relative w-1/2 flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-purple-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Anggota
            </button>
        </div><br>

        <form action="/register/ketua" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_tim" class="block font-medium text-gray-700">Nama Tim</label>
                <input type="text" name="nama_tim" id="nama_tim" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 ">
            </div>

            <div class="mb-4">
                <label for="institusi" class="block font-medium text-gray-700">Institusi</label>
                <input type="text" name="institusi" id="institusi" class="mb-2 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 ">
            </div>

            <div class="border border-dashed border-gray-400 mb-4">
              </div>

            <div class="mb-4">
                <label for="nama_ketua" class="block font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="nama_ketua" id="nama_ketua" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 ">
            </div>

            <div class="mb-4">
                <label for="email" class="block font-medium text-gray-700">Email</label>
                <input type="text" name="email" id="email" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 ">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="token" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 ">
            </div>
            
        <div class="hidden">
            <input type="level" name="level" id="level" value="peserta">
        </div>
        <div class="hidden">
            <input type="status" name="status" id="status" value="ketua">
        </div>
        <div>
            <button type="submit" class="mt-3 w-full bg-gradient-to-br from-purple-500 to-purple-700 hover:bg-blue-700 text-white font-medium text-sm py-2 px-4 rounded mb-5">Buat Akun</button>
        </div>
    </form>
    <p class="text-center text-sm">
        Apakah telah memiliki akun?
        <a href="/login" method="get" class="text-purple-500">Login disini</a>
    </p>
@endsection