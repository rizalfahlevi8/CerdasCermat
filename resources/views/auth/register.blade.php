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
                <label for="nama_anggota" class="block font-medium text-gray-700">Ketua</label><br>
                <a href="/register/ketua" class="block w-full border-2 border-purple-400 border-opacity-40 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 py-2 px-4 text-center">Klik Disini</a>
            </div>
            <br>
            <div class="mb-4">
                <label for="email" class="block font-medium text-gray-700">Anggota</label> <br>
                <a href="/register/anggota" class="block w-full border-2 border-purple-400 border-opacity-40 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 py-2 px-4 text-center">klik Disini</a>
            </div>
            
            
@endsection