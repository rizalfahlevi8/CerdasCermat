@extends('components.main')

@section('content')
@if (auth()->user()->level === 'admin')
<section class="mt-16" >
    <div class="py-11 flex flex-col justify-center bg-cover bg-center" style="background-image: url('{{ asset('assets/img/card.png') }}');">
        <div class="mx-32">
            <div class="text-white my-2">
                <span class="font-bold text-3xl">Selamat datang {{ $myData->nama }}</span>
                <p>Semoga aktivitas pekerjanmu menyenangkan</p> 
            </div>
            <div class="bg-white m-0 flex flex-col rounded-lg">
                <div class="m-3">
                    <div class="mx-3 mt-3 font-bold">Laporan</div> 
                    <div class="m-3 grid grid-cols-2 gap-4">
                        <div class="p-3 border border-slate-500 rounded-md flex flex-col items-center justify-center">
                            <span class="font-bold">Jumlah Peserta / Tim</span>
                            <span class="my-1">{{ $countPeserta }} Peserta / {{ $countTim }} Tim</span>
                            <a href="#" class="mt-3 bg-emerald-800 text-white px-44 py-1 rounded-sm">Lihat Detail</a>
                        </div>
                        <div class="p-3 border border-slate-500 rounded-md flex flex-col items-center justify-center">
                            <span class="font-bold">Jumlah Bank Soal</span>
                            <span class="my-1">50 Soal</span>
                            <a href="#" class="mt-3 bg-emerald-800 text-white px-44 py-1 rounded-sm">Lihat Detail</a>
                        </div>
                    </div>                    
                </div>
            </div>            
        </div>
    </div>
</section>
@elseif (auth()->user()->level === 'peserta')
<section class="mt-16" >
    <div class="py-11 flex flex-col justify-center bg-cover bg-center" style="background-image: url('{{ asset('assets/img/card.png') }}');">
        <div class="mx-32">
            <div class="text-white my-2">
                <span class="font-bold text-3xl">Selamat datang {{ $myData->nama }}</span>
                <p>Semoga aktivitas perlombaanmu menyenangkan</p> 
            </div>
            <div class="bg-white m-0 flex flex-col rounded-lg">
                <div class="mx-3 mt-3">Quiz</div> 
                <div class="m-3 border border-slate-950 flex flex-col">
                    <div>
                        lomba 1
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



@endif
@endsection