@extends('app')

@section('container')
<div class="bg-green-50 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-10 rounded-lg shadow-lg mx-auto lg:mx-0" style="margin-left: 4cm;">
        <h1 class="font-bold">Token Tim</h1>
        <p>{{ $token }}</p>
        <p class="text-center">
            <a href="/login" class="text-blue-500 hover:text-blue-700">Login here</a>
        </p>
    </div>
</div>
@endsection
