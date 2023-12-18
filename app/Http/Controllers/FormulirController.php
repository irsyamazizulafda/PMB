<?php

namespace App\Http\Controllers;

use App\Models\formulir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormulirController extends Controller
{
  

    public function create()
{
    // Create a new Formulir instance
    $formulir = new Formulir;

    // Pass the new Formulir instance to the view
    return view('formulir.create', compact('formulir'));
}

public function edit($id)
{
    // Find the existing Formulir instance or create a new one if not found
    $formulir = Formulir::findOrNew($id);

    return view('formulir.edit', compact('formulir'));
}
    public function index()
{
    // Mendapatkan semua data formulir dari model Formulir
    $formulir = Formulir::all();

    // Mengirim data formulir ke view formulir.index
    return view('formulir', compact('formulir'));
}

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'nama_lengkap' => 'required|string|max:255',
            'alamat_ktp' => 'required|string|max:255',
            'alamat_lengkap' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'kewarganegaraan' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'kabupaten_lahir' => 'required|string|max:255',
            'provinsi_lahir' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'status_menikah' => 'required|string|max:255',
            'agama' => 'required|string|max:255',
        ]);

        Formulir::create($validatedData);

        return redirect()->route('formulir.create')->with('success', 'Form submitted successfully!');
    }


    public function update(Request $request, $id)
    {
        $formulir = formulir::findOrFail($id);

        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'alamat_ktp' => 'required|string|max:255',
            'alamat_lengkap' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'kewarganegaraan' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'kabupaten_lahir' => 'required|string|max:255',
            'provinsi_lahir' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'status_menikah' => 'required|string|max:255',
            'agama' => 'required|string|max:255',
        ]);

        $formulir->update($validatedData);

        return redirect()->route('formulir.edit', $id)->with('success', 'Form updated successfully!');
    }
}