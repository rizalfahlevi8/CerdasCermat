@extends('app')

@section('container')
<div class="bg-left-top fixed top-0 left-20">
    <img src="{{ asset('assets/img/Group 634.png') }}" alt="Rocket" class="block w-full h-full object-contain">
</div>

<div class="bg-green-50 min-h-screen flex items-center justify-end" >
    <div class="max-w-md w-full p-10 rounded-lg shadow-lg mx-auto lg:mx-0" style="margin-right: 4cm;">
        <h2 class="text-2xl font-semibold text-gray-800 mb-1 text-center">Register Anggota</h2> <br>

        <form action="/register/anggota" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_anggota" class="block font-medium text-gray-700">Nama Anggota</label>
                <input type="text" name="nama_anggota" id="nama_anggota" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 ">
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
                <input type="password" name="password" id="password" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 ">
            </div>

            <div class="mb-4">
                <label for="token" class="block font-medium text-gray-700">Token</label>
                <input type="text" name="token" id="token" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-80 ">
                @if ($errors->has('token'))
                    <span class="text-danger">{{ $errors->first('token') }}</span>
                @endif
                @if ($errors->has('limit'))
                    <span class="text-danger">{{ $errors->first('limit') }}</span>
                @endif
            </div>

            <input type="hidden" name="level" id="level" value="peserta">
            <input type="hidden" name="status" id="status" value="anggota">

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create an account</button>
            </div>
        </form>

        <p class="text-center">
            Already have an account?
            <a href="/login" class="text-blue-500 hover:text-blue-700">Login here</a>
        </p>
    </div>
</div>
@endsection
