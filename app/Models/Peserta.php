<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function tim(){
        return $this->belongsTo(Tim::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
