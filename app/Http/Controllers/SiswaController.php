<!-- <?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;

use App\Models\siswa;
use App\Http\Requests\StoresiswaRequest;
use App\Http\Requests\UpdatesiswaRequest;
use Illuminate\Http\Request;
use App\Models\kota;
use App\Models\negara;
use App\Models\univ;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('siswa', [
            "title" => 'siswa',
            "lokasi" => 'Siswa',
            "data" => siswa::all(),
            "datanegara" => negara::all(),
            "datakota" => kota::all(),
            "datauniv" => univ::all(),
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
            'nama_siswa' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'negara_id' => 'required',
            'kota_id' => 'required',
            'univ_id' => 'required'
            // 'nama_negara' => 'exists:negaras,id',
            // 'nama_kota' => 'exists:kotas,id',
            // 'nama_univ' => 'exists:univs,id'
        ]);

        // $negara = negara::find($validatedData['nama_negara']);
        // $validatedData['negara_id'] = $negara->id;

        // $kota = kota::find($validatedData['nama_kota']);
        // $validatedData['kota_id'] = $kota->id;

        // $univ = univ::find($validatedData['nama_univ']);
        // $validatedData['univ_id'] = $univ->id;

        siswa::create($validatedData);

        return redirect('/siswa')->with(
            'alert',
            [
                'title' => 'success',
                'text' => 'Sukses! Seorang siswa telah ditambahkan',
                'type' => 'success',
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesiswaRequest $request, $id)
    {


        $validatedData = $request->validate([
            'nama_siswa' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'negara_id' => 'required',
            'kota_id' => 'required',
            'univ_id' => 'required'
        ]);

        $siswa = siswa::findOrFail($id);
        $siswa->nama_siswa = $validatedData['nama_siswa'];
        $siswa->tempat_lahir = $validatedData['tempat_lahir'];
        $siswa->tanggal_lahir = $validatedData['tanggal_lahir'];
        $siswa->jenis_kelamin = $validatedData['jenis_kelamin'];
        $siswa->negara_id = $validatedData['negara_id'];
        $siswa->kota_id = $validatedData['kota_id'];
        $siswa->univ_id = $validatedData['univ_id'];
        $siswa->save();

        return redirect('/siswa')->with('success', 'Seorang siswa telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        siswa::destroy($id);
        return redirect('/siswa');
    }
} -->