<?php

namespace Database\Seeders;

use App\Models\PaketSoal;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaketSoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paketSoals = [
            ['jenis_paket' => 'Matematika'],
            ['jenis_paket' => 'Fisika'],
        ];

        foreach ($paketSoals as $paketSoal) {
            PaketSoal::create($paketSoal);
        }
    }
}
