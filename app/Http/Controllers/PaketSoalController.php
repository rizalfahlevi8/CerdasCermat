<?php

namespace App\Http\Controllers;

use App\Models\PaketSoal;
use App\Models\DaftarSoal;
use Illuminate\Http\Request;

class PaketSoalController extends Controller
{
    public function index()
    {
        $dataPakets = PaketSoal::all();

        return view('pages.bankSoal.index', compact('dataPakets'));
    }

    public function soal($id, $currentSoal)
    {
        $paketSoal = PaketSoal::with('daftarSoals')->findOrFail($id);
        $soalItem = $paketSoal->daftarSoals->where('nomor_soal', $currentSoal)->first();

        return view('pages.bankSoal.soal', compact('paketSoal', 'soalItem', 'currentSoal'));
    }

    public function save($id, Request $request)
    {
        $paketSoal = PaketSoal::with('daftarSoals')->findOrFail($id);

        $isAlready = array();

        foreach ($paketSoal->daftarSoals as $key => $value) {
            if ($value->nomor_soal == $request->currentSoal) {
                $isAlready = $value;
                break;
            }
        }

        if ($isAlready instanceof DaftarSoal) {
            $soal = DaftarSoal::findOrFail($isAlready['id']);
            $soal->pertanyaan = $request->namaSoal;

            if ($request->hasFile('imageSoal')) {
                $tujuan_upload = 'storage/soal';
                $file = $request->file('imageSoal');
                $filegambar = time() . "_" . $file->getClientOriginalName();
                $soal->gambar_pertanyaan = $filegambar;
                $file->move($tujuan_upload, $filegambar);
            }

            $soal->opsi_jawaban = $request->jawaban;

            $gambarOpsiJawaban = [null, null, null, null, null];
            if ($request->hasFile('jawabanImage')) {
                foreach ($request->file('jawabanImage') as $key => $file) {
                    $tujuan_upload = 'storage/jawaban';
                    $filegambar = time() . "_" . $file->getClientOriginalName();
                    $file->move($tujuan_upload, $filegambar);
                    $gambarOpsiJawaban[$key] = $filegambar;
                }
            } elseif ($isAlready && $isAlready->gambar_opsi_jawaban) {
                $gambarOpsiJawaban = json_decode($isAlready->gambar_opsi_jawaban, true);
            }

            $soal->gambar_opsi_jawaban = $gambarOpsiJawaban ? json_encode($gambarOpsiJawaban) : null;
            $soal->jawaban = $request->pilihanJawaban;
            $soal->save();
        } else {
            $buatSoal = new DaftarSoal;
            $buatSoal->nomor_soal = $request->currentSoal;
            $buatSoal->pertanyaan = $request->namaSoal;

            if ($request->hasFile('imageSoal')) {
                $tujuan_upload = 'storage/soal';
                $file = $request->file('imageSoal');
                $filegambar = time() . "_" . $file->getClientOriginalName();
                $buatSoal->gambar_pertanyaan = $filegambar;
                $file->move($tujuan_upload, $filegambar);
            }

            $buatSoal->opsi_jawaban = $request->jawaban;

            $gambarOpsiJawaban = [null, null, null, null, null];
            if ($request->hasFile('jawabanImage')) {
                foreach ($request->file('jawabanImage') as $key => $file) {
                    $tujuan_upload = 'storage/jawaban';
                    $filegambar = time() . "_" . $file->getClientOriginalName();
                    $file->move($tujuan_upload, $filegambar);
                    $gambarOpsiJawaban[] = $filegambar;
                }
                $buatSoal->gambar_opsi_jawaban = json_encode($gambarOpsiJawaban);
            } else {
                $buatSoal->gambar_opsi_jawaban = json_encode([]);
            }

            $buatSoal->jawaban = $request->pilihanJawaban;
            $buatSoal->id_paket = $id;
            $buatSoal->save();
        }

        return redirect('/pakets/soal/' . $id . '/' . $request->currentSoal + 1);
    }
}
