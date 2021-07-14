<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;
    protected $table = 'alternatifs';
    protected $primaryKey = 'id_alternatif';
    protected $fillable = ['nama_calon', 'nim', 'kelas','alamat','pilihan_sie'];


    //relasi
    public function nilai (){
        return $this->belongsTo(Nilai::class,"kd_nilai","kd_nilai");
    }
    public function rangking (){
        return $this->hasOne(Rangking::class,$this->primaryKey,$this->primaryKey);
    }

}
