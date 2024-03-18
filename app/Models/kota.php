<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\negara;
use App\Models\univ;
use App\Models\siswa;

class kota extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    protected $with = ['negara'];

    public function kota()
    {
        return $this->hasMany(univ::class);
    }

    public function negara()
    {
        return $this->belongsTo(negara::class, 'negara_id', 'id');
    }

    public function siswa()
    {
        return $this->hasMany(siswa::class);
    }

    public function universitas()
    {
        return $this->hasMany(univ::class);
    }
}
