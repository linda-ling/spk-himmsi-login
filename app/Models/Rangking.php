<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rangking extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_hasil';

    public function alternatif (){
        return $this->belongsTo(Alternatif::class,"id_alternatif","id_alternatif");
    }
}
