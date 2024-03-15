@extends('app')

@section('container')
<div class="bg-green-50 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-10 rounded-lg shadow-lg mx-auto lg:mx-0" style="margin-left: 4cm;">
        <h2 class="text-2xl font-semibold text-gray-800 mb-1 text-center ">Login</h2>
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
            <button type="submit" class="w-full bg-indigo-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Submit</button>
        </form>
        <p class="text-sm text-gray-600 mt-4">Don't have an account? <a href="/register" class="text-indigo-600 hover:text-indigo-500">Sign up here</a></p>
    </div>
</div>
@endsection
