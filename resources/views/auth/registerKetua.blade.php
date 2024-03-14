@extends('app')

@section('container')
   
<div class="bg-left-top fixed top-0 left-20">
    <img src="{{ asset('assets/img/Group 634.png') }}" alt="Rocket" class="block w-full h-full object-contain">
</div>

<div class="bg-green-50 min-h-screen flex items-center justify-end" style="margin-right: 4cm;">
    <div class="max-w-md w-full p-10 rounded-lg shadow-lg mx-auto lg:mx-0">
        <h2 class="text-2xl font-semibold text-gray-800 mb-1 text-center">Data Anggota</h2> <br>

        <form action="/register/anggota" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_tim" class="block font-medium text-gray-700">Nama Tim</label>
                <input type="text" name="nama_tim" id="nama_tim" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 ">
            </div>

            <div class="mb-4">
                <label for="institusi" class="block font-medium text-gray-700">Institusi</label>
                <input type="text" name="institusi" id="institusi" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 ">
            </div>

            <div class="mb-4">
                <label for="nama_ketua" class="block font-medium text-gray-700">Nama Ketua</label>
                <input type="text" name="nama_ketua" id="nama_ketua" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 ">
            </div>

            <div class="mb-4">
                <label for="email" class="block font-medium text-gray-700">Email</label>
                <input type="text" name="email" id="email" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 ">
            </div>

            <div class="mb-4">
                <label for="password" class="block font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="token" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 ">
            </div>
            
        <div class="hidden">
            <input type="level" name="level" id="level" value="peserta">
        </div>
        <div class="hidden">
            <input type="status" name="status" id="status" value="anggota">
        </div>
        <div>
            <button type="submit">Create an account</button>
        </div>
    </form>
    <p>
        Already have an account?
        <a href="/" method="get">  Login here</a>
    </p>
@endsection