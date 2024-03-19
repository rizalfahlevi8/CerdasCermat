@extends('components.main')

@section('content')
@if (auth()->user()->level === 'admin')
    dashboard admin
    {{ $myData->nama }}
@elseif (auth()->user()->level === 'peserta')
    dashboard peserta
    {{ $myData->nama }}
@endif
@endsection