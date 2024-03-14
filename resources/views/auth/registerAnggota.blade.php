@extends('app')

@section('container')
<form action="/register/anggota" method="POST">
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
        @if ($errors->has('token'))
            <span class="text-danger">{{ $errors->first('token') }}</span>
        @endif
        @if ($errors->has('limit'))
        <span class="text-danger">{{ $errors->first('limit') }}</span>
    @endif
    </div>
    <div class="hidden">
        <input type="level" name="level" id="level" value="peserta">
    </div>
    <div class="hidden">
        <input type="status" name="status" id="status" value="anggota">
    </div>
    <div>
    <div>
        <button type="submit">Create an account</button>
    </div>
</form>

<p>
    Already have an account?
    <a href="/" method="get">Login here</a>
</p>
@endsection