<?php

namespace App\Http\Controllers;

use App\Models\KategoriSoal;
use Illuminate\Http\Request;

class BankSoalController extends Controller
{
    public function index()
    {
        $kategoris = KategoriSoal::all();
        return view('pages/bankSoal/kategoriSoal', compact('kategoris'));
    }
}
