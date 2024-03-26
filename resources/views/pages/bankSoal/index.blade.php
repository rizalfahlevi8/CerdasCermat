@extends('component.app')

@section('content')
<div class="container mx-auto px-6">
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Bank Soal
    </h2>
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($dataPakets as $item)
            <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="px-4 py-3 border-b border-gray-200">
                    <h5 class="text-lg font-semibold text-gray-700">{{ $item->jenis_paket }}</h5>
                    <p class="text-sm text-gray-500">Terdiri dari {{ $item->daftarSoals->count() }} soal</p>
                </div>
                <div class="px-4 py-3 bg-gray-100">
                    <a href="/pakets/soal/{{ $item->id }}/1"
                        class="inline-block px-10 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Lihat Detail
                     </a>                     
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
