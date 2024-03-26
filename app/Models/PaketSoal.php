<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketSoal extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function daftarSoals()
    {
        return $this->hasMany(DaftarSoal::class, 'id_paket', 'id');
    }
}
