<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'nilais';
    protected $primaryKey = 'kd_nilai';
    protected $fillable = ['id_alternatif', 'kd_kriteria', 'nilai'];
    //protected $guarded = [];

    public function kriteria (){
        return $this->belongsTo(Kriteria::class,"kd_kriteria","kd_kriteria");
    }

    public function alternatif (){
        return $this->belongsTo(Alternatif::class,"id_alternatif","id_alternatif");
    }

    // public function getNilai()
    // {
    //     $query = DB::table('nilais');
    //     return $query->groupBy('id_alternatif')->get();
    // }

    /*public function alternatif (){
        return $this->hasOne(Alternatif::class,$this->primaryKey,$this->primaryKey);
    }*/
}
