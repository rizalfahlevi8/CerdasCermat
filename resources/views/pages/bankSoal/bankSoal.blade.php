@extends('component.app')

@section('content')
    <section>
        <a href="#">Create</a>
        <table class="border-2">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Kategori</td>
                    <td>Action</td>
            </thead>
            <tbody>
                @foreach ($banksoals as $banksoal)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $banksoal->soal }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection