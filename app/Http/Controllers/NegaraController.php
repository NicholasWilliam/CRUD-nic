<?php

namespace App\Http\Controllers;

use App\Models\negara;
use App\Http\Requests\StorenegaraRequest;
use App\Http\Requests\UpdatenegaraRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\storage;

class NegaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('negara', [
            "title" => 'negara',
            "data" => negara::all(),
            "lokasi" => 'Negara',
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
            'nama_negara' => 'required|unique:negaras',
            'deskripsi_negara' => 'required|max:255',
            'kodewarna_negara' => 'required',
            'gambar_negara' => 'required|image'
        ]);

        if ($request->file('gambar_negara')) {
            $validatedData['gambar_negara'] = $request->file('gambar_negara')->store('gambar_negara');
        }

        negara::create($validatedData);
        return redirect('/negara')->with('success', 'Sebuah negara telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(negara $negara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(negara $negara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenegaraRequest $request, $id)
    {

        $negara = negara::findOrFail($id);

        $rules = [
            'nama_negara' => 'required',
            'deskripsi_negara' => 'required|max:255',
            'kodewarna_negara' => 'required',
            'gambar_negara' => 'image'
        ];

        if ($negara->nama_negara != $request->nama_negara) {
            $rules['nama_negara'] .= '|unique:negaras';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('gambar_negara')) {
            Storage::delete($request->gambar_lama);
            $validatedData['gambar_negara'] = $request->file('gambar_negara')->store('gambar_negara');
        } else {
            $validatedData['gambar_negara'] = $request->gambar_lama;
        }

        $negara->nama_negara = $validatedData['nama_negara'];
        $negara->deskripsi_negara = $validatedData['deskripsi_negara'];
        $negara->kodewarna_negara = $validatedData['kodewarna_negara'];
        $negara->gambar_negara = $validatedData['gambar_negara'];
        $negara->save();

        return redirect('/negara')->with('success', 'Sebuah negara telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(negara $negara)
    {
        $negara->delete();
        return redirect('/negara')->with('success', 'Sebuah negara telah dihapus');
    }
}
