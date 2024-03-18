<?php

namespace App\Http\Controllers;

use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;
use Illuminate\Http\Request;
use App\Models\kota;
use App\Models\siswa;
use App\Models\univ;
use App\Models\negara;

class StatistikController extends Controller
{
    public function index()
    {

        // $jumlahsiswa = count(siswa::all());
        // $jumlahkota = count(kota::all());
        // $jumlahnegara = count(negara::all());
        // $jumlahuniversitas = count(univ::all());

        // $siswa = siswa::all();
        // $siswaPria = $siswa->where('jenis_kelamin', 'laki-laki')->count();
        // $siswaWanita = $siswa->where('jenis_kelamin', 'perempuan')->count();

        // $chart1 = LarapexChart::setTitle('SiswabyGender')
        //     ->setDataset([$siswaPria, $siswaWanita])
        //     ->setType('pie')
        //     ->setLabels(['laki-laki', 'perempuan']);

        // $negaraIds = $siswa->pluck('negara_id');
        // $negaraNames = $negaraIds->unique()->map(function ($id) use ($siswa) {
        //     return $siswa->where('negara_id', $id)->first()->negara->nama;
        // })->values();

        // $negaraCounts = $negaraIds->countBy()->values()->toArray();
        // $chart2 = LarapexChart::setTitle('SiswabyNegara')
        //     ->setDataset($negaraCounts)
        //     ->setLabels($negaraNames->toArray())
        //     ->setType('pie');

        // $univ = univ::all();
        // $Ids = $univ->pluck('negara_id');
        // $hitunguniv = $Ids->countBy()->values()->toArray();
        // $nama = $Ids->unique()->map(function ($id) use ($univ) {
        //     return $univ->where('negara_id', $id)->first()->negara->nama;
        // })->values();

        // $chart3 = LarapexChart::setTitle('UnivbyNegara')
        //     ->setDataset($hitunguniv)
        //     ->setLabels($nama->toArray())
        //     ->setType('pie');

        return view('statistik', [
            "title" => 'statistik',
            "lokasi" => 'Statistik',
            "parent" => 'master',
            "kota" => count(kota::all()),
            "siswa" => count(siswa::all()),
            "univ" => count(univ::all()),
            "negara" => count(negara::all())
        ]);
    }
}
