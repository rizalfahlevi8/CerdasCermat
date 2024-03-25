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
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoris as $kategori)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kategori->kategori }}</td>
                        <td>
                            <a href="/banksoal/{{ $kategori->id }}">
                            <button>Bank Soal</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
