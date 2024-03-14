<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tim;
use App\Models\Peserta;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth/register');
    }

    public function createKetua()
    {
        return view('auth/registerKetua');
    }

    public function createAnggota()
    {
        return view('auth/registerAnggota');
    }

    public function storeKetua(Request $request)
    {
        $tim = Tim::create([
            'nama' => $request->nama_tim,
            'institusi' => $request->institusi,
        ]);

        $user = User::create([
            'email'=> $request->email,
            'password'=>$request->password,
            'level'=>$request->level,
        ]);

        Peserta::create([
            'nama' => $request->nama_ketua,
            'status' => $request->status,
            'id_user' => $user->id,
            'id_tim' => $tim->id
        ]);

        return redirect('/');
    }

    public function storeAnggota(Request $request)
    {
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
