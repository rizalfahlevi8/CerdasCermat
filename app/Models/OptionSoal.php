<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionJawaban extends Model
{
    use HasFactory;
    protected $table = 'option_soal';
    protected $guarded = [
        'id',
    ];

    public function soal(){
        return $this->belongsTo(BankSoal::class);
    }
}
