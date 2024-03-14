@extends('app')

@section('container')
    <form action="/register/ketua" method="POST">
        @csrf
        <h2>Data Tim</h2>
        <div>
            <label for="nama_tim">Nama Tim</label>
            <input type="text" name="nama_tim" id="nama_tim">
        </div>
        <div>
            <label for="institusi">Institusi</label>
            <input type="text" name="institusi" id="institusi">
        </div>
        <h2>Data Ketua</h2>
        <div>
            <label for="nama_ketua">Nama Ketua</label>
            <input type="text" name="nama_ketua" id="nama_ketua">
        </div>
        <div>
            <label for="email">email</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="password">Pasword</label>
            <input type="password" name="password" id="password">
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
        <a href="/" method="get">Login here</a>
    </p>
@endsection