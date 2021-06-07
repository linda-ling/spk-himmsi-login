<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_kriteria';
        //relasi
        public function parameters (){
            return $this->hasMany(Parameter::class,$this->primaryKey,$this->primaryKey);
        }

        public function nilais (){
            return $this->hasMany(Nilai::class,$this->primaryKey,$this->primaryKey);
        }

}
