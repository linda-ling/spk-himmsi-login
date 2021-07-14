<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;
    protected $table = 'parameters';
    protected $primaryKey = 'kd_parameter';
    protected $fillable = ['kd_kriteria', 'nama_parameter', 'nilai_parameter'];

    //relasi
    public function kriteria (){
        return $this->belongsTo(Kriteria::class,"kd_kriteria","kd_kriteria");
    }
}
