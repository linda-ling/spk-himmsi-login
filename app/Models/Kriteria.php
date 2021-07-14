<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Val
class Kriteria extends Model
{
    //Array
    use HasFactory;
    protected $table = 'kriterias';
    protected $primaryKey = 'kd_kriteria';
    protected $fillable = ['nama_kriteria', 'jenis_kriteria', 'bobot_kriteria'];

    //relasi 
    public function parameters (){
        return $this->hasMany(Parameter::class,$this->primaryKey,$this->primaryKey);
     }

    public function nilais (){
        return $this->hasMany(Nilai::class,$this->primaryKey,$this->primaryKey);
    }

}
