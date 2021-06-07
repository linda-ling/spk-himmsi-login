<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_nilai';

    public function kriteria (){
        return $this->belongsTo(Kriteria::class,"kd_kriteria","kd_kriteria");
    }

    public function alternatif (){
        return $this->hasOne(Alternatif::class,$this->primaryKey,$this->primaryKey);
    }
}
