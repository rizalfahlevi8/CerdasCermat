<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin'),
            'level'=>'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('admin')->insert([
            'nama'=>'admin',
            'id_user'=>1, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
