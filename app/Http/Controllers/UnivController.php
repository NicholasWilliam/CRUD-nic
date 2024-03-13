<?php

namespace App\Http\Controllers;

use App\Models\univ;
use App\Http\Requests\StoreunivRequest;
use App\Http\Requests\UpdateunivRequest;
use App\Models\kota;
use App\Models\negara;
use Illuminate\Http\Request;

class UnivController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/univ', [
            "title" => 'universitas',
            "data" => univ::all(),
            "lokasi" => 'Universitas',
            "datanegara" => negara::all(),
            "datakota" => kota::all(),
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
            'nama_univ' => 'required|unique:univs',
            'nama_negara' => 'exists:negaras,id',
            'nama_kota' => 'exists:kotas,id',
            'alamat_univ' => 'required'
        ]);

        $negara = negara::find($validatedData['nama_negara']);
        $validatedData['negara_id'] = $negara->id;

        $kota = kota::find($validatedData['nama_kota']);
        $validatedData['kota_id'] = $kota->id;

        univ::create($validatedData);

        return redirect('/univ')->with('success', 'Sebuah universitas telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(univ $univ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(univ $univ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateunivRequest $request, $id)
    {
        $univ = univ::findOrFail($id);

        $rules = [
            'nama_univ' => 'required',
            'negara_id' => 'required',
            'kota_id' => 'required',
            'alamat_univ' => 'required',
        ];

        // if ($univ->nama_univ != $request->nama_univ) {
        //     $rules['nama_univ'] .= '|unique:univs';
        // }

        $validatedData = $request->validate($rules);

        $univ->nama_univ = $validatedData['nama_univ'];
        $univ->negara_id = $validatedData['negara_id'];
        $univ->kota_id = $validatedData['kota_id'];
        $univ->alamat_univ = $validatedData['alamat_univ'];
        $univ->save();

        return redirect('/univ')->with('success', 'Sebuah universitas telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(univ $univ)
    {
        univ::destroy($univ->id);
    }

    public function getKotaByNegara($negara_id)
    {
        $kota = Kota::where('negara_id', $negara_id)->get();
        return response()->json($kota);
    }
}
