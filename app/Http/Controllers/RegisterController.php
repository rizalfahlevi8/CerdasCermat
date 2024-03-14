<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tim;
use App\Models\Peserta;
use Illuminate\Support\Str;
use Carbon\Carbon;

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
        $tanggal = Carbon::now()->format('d');
        $jam = Carbon::now()->format('h');
        $token = $tanggal . $jam . Str::random(5);

        $tim = Tim::create([
            'nama' => $request->nama_tim,
            'institusi' => $request->institusi,
            'token' => $token,
            'jumlah_anggota' => 1,
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => $request->password,
            'level' => $request->level,
        ]);

        Peserta::create([
            'nama' => $request->nama_ketua,
            'status' => $request->status,
            'id_user' => $user->id,
            'id_tim' => $tim->id
        ]);

        return view('auth/token', ['token' => $tim->token]);
    }

    public function storeAnggota(Request $request)
    {
        // Menemukan token yang sesuai
        $tim = Tim::where('token', $request->token)->first();
        if (!$tim) {
            return redirect()->back()->withErrors(['token' => 'Token yang dimasukkan tidak valid.']);
        }

        // Memeriksa apakah jumlah anggota sudah lebih dari tiga
        if ($tim->jumlah_anggota >= 3) {
            return redirect()->back()->withErrors(['limit' => 'Batas anggota pada tim ini telah tercapai.']);
        }

        $user = User::create([
            'email' => $request->email,
            'password' => $request->password,
            'level' => $request->level,
        ]);

        Peserta::create([
            'nama' => $request->nama_anggota,
            'status' => $request->status,
            'id_user' => $user->id,
            'id_tim' => $tim->id,
        ]);

        // Menambahkan jumlah anggota pada tim
        $tim->jumlah_anggota += 1;
        $tim->save();

        return view('auth/token', ['token' => $tim->token]);
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
