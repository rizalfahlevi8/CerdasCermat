<?php

namespace Database\Seeders;

use App\Models\PaketSoal;
use App\Models\DaftarSoal;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DaftarSoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paketSoalIds = PaketSoal::pluck('id')->toArray();

        foreach ($paketSoalIds as $paketSoalId) {
            $jumlahSoal = 25;

            if ($paketSoalId == 1 || $paketSoalId == 2) {
                $jumlahSoal = 25;
            } elseif ($paketSoalId % 2 == 1) {
                $jumlahSoal = 50;
            } else {
                $jumlahSoal = 100;
            }

            for ($i = 1; $i <= $jumlahSoal; $i++) {
                DaftarSoal::create([
                    'nomor_soal' => "$i",
                    'pertanyaan' => "Pertanyaan untuk Paket $paketSoalId dan Soal ke-$i",
                    'opsi_jawaban' => [
                        "Opsi A untuk Soal ke-$i",
                        "Opsi B untuk Soal ke-$i",
                        "Opsi C untuk Soal ke-$i",
                        "Opsi D untuk Soal ke-$i",
                        "Opsi E untuk Soal ke-$i",
                    ],
                    'jawaban' => rand(1, 4),
                    'id_paket' => $paketSoalId,
                ]);
            }
        }
    }
}
