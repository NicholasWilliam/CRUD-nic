<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\negara;
use App\Models\kota;
use App\Models\univ;
use App\Models\siswa;
use App\Models\user;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        negara::create([
            'nama_negara' => 'Indonesia',
            'deskripsi_negara' => 'Indonesia merupakan bagian dari ASEAN',
            'kodewarna_negara' => '#FF0000',
            'gambar_negara' => 'indonesia.png'
        ]);
        negara::create([
            'nama_negara' => 'Malaysia',
            'deskripsi_negara' => 'Malaysia merupakan bagian dari ASEAN',
            'kodewarna_negara' => '#0032AO',
            'gambar_negara' => 'indonesia.png'
        ]);
        negara::create([
            'nama_negara' => 'Vietanam',
            'deskripsi_negara' => 'Vietanam merupakan bagian dari ASEAN',
            'kodewarna_negara' => '#0072A0',
            'gambar_negara' => 'indonesia.png'
        ]);
        negara::create([
            'nama_negara' => 'Laos',
            'deskripsi_negara' => 'Laos merupakan bagian dari ASEAN',
            'kodewarna_negara' => '#0048AO',
            'gambar_negara' => 'indonesia.png'
        ]);
        negara::create([
            'nama_negara' => 'Filipina',
            'deskripsi_negara' => 'Malaysia merupakan bagian dari ASEAN',
            'kodewarna_negara' => '#007749',
            'gambar_negara' => 'indonesia.png'
        ]);
        negara::create([
            'nama_negara' => 'Brunei Darussalam',
            'deskripsi_negara' => 'Brunei Darussalam merupakan bagian dari ASEAN',
            'kodewarna_negara' => '#770073',
            'gambar_negara' => 'indonesia.png'
        ]);
        negara::create([
            'nama_negara' => 'Singapore',
            'deskripsi_negara' => 'Singapore merupakan bagian dari ASEAN',
            'kodewarna_negara' => '#775500',
            'gambar_negara' => 'indonesia.png'
        ]);

        kota::create([
            'negara_id' => 1,
            'nama_kota' => 'Pontianak',
            'deskripsi_kota' => 'Pontianak merupakan salah satu kota di Indonesia',
            'kodewarna_kota' => '#00ff4c',
            'gambar_kota' => 'indonesia.png'
        ]);
        kota::create([
            'negara_id' => 2,
            'nama_kota' => 'Kuala Lumpur',
            'deskripsi_kota' => 'Pontianak merupakan salah satu kota di Indonesia',
            'kodewarna_kota' => '#FFD100',
            'gambar_kota' => 'indonesia.png'
        ]);

        univ::create([
            'negara_id' => 1,
            'kota_id' => 1,
            'nama_univ' => 'ITBSS',
            'alamat_univ' => 'Jalan Sutoyo'
        ]);
        siswa::create([
            'nama_siswa' => 'Nicholas William',
            'tempat_lahir' => 'Pontianak',
            'tanggal_lahir' => '2005-12-25',
            'jenis_kelamin' => 'Laki-laki',
            'negara_id' => 1,
            'kota_id' => 1,
            'univ_id' => 1
        ]);
    }
}
