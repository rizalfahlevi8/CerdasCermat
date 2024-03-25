<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
use Illuminate\Http\Request;

class BankSoalController extends Controller
{
    public function index($id)
    {
        $banksoals = BankSoal::where('id_kategori', $id)->get();
        return view('pages.bankSoal.bankSoal', compact('banksoals'));
    }
}
