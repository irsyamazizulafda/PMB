<?php

namespace App\Http\Controllers;


use App\Models\Formulir;
use App\Models\Provinsi;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Models\KabupatenKota;
use Illuminate\Support\Facades\Auth;

class HistoryPendaftaranController extends Controller
{
    public function index()
    {

        $user = Auth::user();


        $history = $user->formulirs;

        return view('history-pendaftaran', compact('history'));
    }
    public function show($user_id)
    {
        // Temukan user berdasarkan slug
        $history = Formulir::where('user_id', $user_id)->first();
        // Pastikan $history->provinsi adalah ID provinsi


        $provinsiId = Provinsi::find($history->provinsi);
        $kabupatenId = KabupatenKota::find($history->kabupaten);

        $provinsi_lahir = Provinsi::find($history->provinsi_lahir);
        $kabupaten_lahir = KabupatenKota::find($history->kabupaten_lahir);





        $provinsiName = $provinsiId->name;
        $kabupatenName= $kabupatenId->name;

        $provinsiLahirName = $provinsi_lahir->name;
        $kabupatenLahirName= $kabupatenId->name;

        if (!$history) {

            abort(404);
        }

        // Tampilkan halaman detail histori pendaftaran
        return view('show-history-pendaftaran', compact('history'),
        [
            'provinsiName' => $provinsiName,
            'kabupatenName' => $kabupatenName,
            'provinsiLahirName' => $provinsiLahirName,
            'kabupatenLahirName' => $kabupatenLahirName,
        ]);
    }
    
}
