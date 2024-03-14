@extends('app')

@section('container')
<form action="/register/ketua" method="POST">
    @csrf
    <h2>Data Anggota</h2>
    <div>
        <label for="nama_anggota">Nama Anggota</label>
        <input type="text" name="nama_anggota" id="nama_anggota">
    </div>
    <div>
        <label for="email">email</label>
        <input type="text" name="email" id="email">
    </div>
    <div>
        <label for="password">Pasword</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="token">Token</label>
        <input type="text" name="token" id="token">
    </div>
    <div>
        <button type="submit">Create an account</button>
    </div>
</form>
<p>
    Already have an account?
    <a href="/" method="get">Login here</a>
</p>
@endsection