<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //Content-->method memanggil view
    public function dashboard(){
        return view('dashboard');
    }

    public function kriteria(){
        return view('kriteria');
    }

    public function parameter(){
        return view('parameter');
    }

    public function alternatif(){
        return view('alternatif');
    }

    public function penilaian(){
        return view('penilaian');
    }

    public function perhitungan(){
        return view('perhitungan');
    }

    public function laporan(){
        return view('laporan');
    }
}
