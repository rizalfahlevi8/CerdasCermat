<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarSoal extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'opsi_jawaban' => 'json',
    ];

    public function paketSoal()
    {
        return $this->belongsTo(PaketSoal::class, 'id_paket', 'id');
    }
}
