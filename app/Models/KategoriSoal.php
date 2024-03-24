<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriSoal extends Model
{
    use HasFactory;
    protected $table = 'kategori_soal';
    protected $guarded = [
        'id',
    ];

    public function soal()
    {
        return $this->hasMany(BankSoal::class);
    }
}
