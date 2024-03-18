<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kota;
use App\Models\negara;
use App\Models\univ;

class siswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function negara()
    {
        return $this->belongsTo(negara::class);
    }

    public function kota()
    {
        return $this->belongsTo(kota::class);
    }

    public function univ()
    {
        return $this->belongsTo(univ::class);
    }
}
