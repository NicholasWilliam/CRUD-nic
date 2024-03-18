<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kota;
use App\Models\negara;
use App\Models\univ;
use App\Http\Requests\StorekotaRequest;
use App\Http\Requests\UpdatekotaRequest;
use App\Http\Resources\kotaResource;
use Illuminate\Support\Facades\storage;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('master.kota', [
            "title" => 'kota',
            "data" => kota::all(),
            "lokasi" => 'Kota',
            "datanegara" => negara::all(),
            "parent" => 'master'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kota' => 'required|unique:kotas',
            'deskripsi_kota' => 'required|max:255',
            'nama_negara' => 'exists:negaras,id',
            'kodewarna_kota' => 'required',
            'gambar_kota' => 'image',
        ]);

        $negara = negara::find($validatedData['nama_negara']);
        $validatedData['negara_id'] = $negara->id;



        if ($request->file('gambar_kota')) {
            $validatedData['gambar_kota'] = $request->file('gambar_kota')->store('gambar_kota');
        }

        Kota::create($validatedData);

        return redirect('/kota')->with('success', 'Sebuah kota telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(kota $kota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kota $kota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekotaRequest $request, $id)
    {
        $kota = kota::findOrFail($id);

        $rules = [
            'nama_kota' => 'required',
            'deskripsi_kota' => 'required|max:255',
            'negara_id' => 'required',
            'kodewarna_kota' => 'required',
            'gambar_kota' => 'image'
        ];

        if ($kota->nama_kota != $request->nama_kota) {
            $rules['nama_kota'] .= '|unique:kotas';
        }


        $validatedData = $request->validate($rules);


        // dd($kota);

        if ($request->file('gambar_kota')) {
            Storage::delete($request->gambar_lama);
            $validatedData['gambar_kota'] = $request->file('gambar_kota')->store('gambar_kota');
        } else {
            $validatedData['gambar_kota'] = $request->gambar_lama;
        }

        // $kota->nama_kota = $validatedData['nama_kota'];
        // $kota->deskripsi_kota = $validatedData['deskripsi_kota'];
        // $kota->negara_id = $validatedData['negara_id'];
        // $kota->kodewarna_kota = $validatedData['kodewarna_kota'];
        // $kota->gambar_kota = $validatedData['gambar_kota'];
        $kota->update($validatedData);

        return redirect('/kota')->with('success', 'Sebuah kota telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kota = kota::find($id);
        $kota->universitas()->whereHas('kota', function ($query) use ($kota) {
            $query->where('id', $kota->id);
        })->delete();

        $kota->siswa()->whereHas('kota', function ($query) use ($kota) {
            $query->where('id', $kota->id);
        })->delete();

        $kota->delete();
        return redirect('/kota')->with('delete', 'Sebuah kota berhasil dihapus');
    }

    public function getByNegara($negara_id)
    {
        $kota = Kota::where('negara_id', $negara_id)->get();
        return response()->json($kota);
    }
}
