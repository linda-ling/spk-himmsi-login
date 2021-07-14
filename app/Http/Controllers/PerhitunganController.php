<?php

namespace App\Http\Controllers;


use himmsi_db;
use App\Models\Nilai;
use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\PerhitunganController;


class PerhitunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //MEMANGGIL ('relasi ke kriteria')
        $alternatifs = Alternatif::all();
        $kriterias = Kriteria::all();
        $datanilais = Nilai::with('kriteria')->paginate();
        $nilais = Nilai::orderBy('id_alternatif', 'ASC')->orderBy('kd_kriteria','ASC')->get();
        // $nilais = DB::table('nilais')
        //         ->grouBy('id_alternatif')type
        //         ->get();

        $kriteria=array();
        $bobot=array();
        //-- melakukan iterasi pengisian array untuk tiap record data yang didapat
        foreach ($kriterias as $row) {
            $kriteria[$row['kd_kriteria']] = array($row['kriteria'],$row['nama_kriteria']);
            $bobot[$row['kd_kriteria']] = $row['bobot_kriteria']/100;
        }
        
        $alternatif=array();
        //-- melakukan iterasi pengisian array untuk tiap record data yang didapat
        foreach ($alternatifs as $row) {
            $alternatif[$row['id_alternatif']]=array($row['alternatif'],$row['nama_calon']);
        }

        $sample=array();
        foreach ($nilais as $row) {
            //-- jika array $sample[$row['id_alternatif']] belum ada maka buat baru
            //-- $row['id_alternatif'] adalah id kandidat/alternatif
            if (!isset($sample[$row['id_alternatif']])) {
                $sample[$row['id_alternatif']] = array();
            }
            $sample[$row['id_alternatif']][$row['kd_kriteria']] = $row['nilai'];
        }

        $X=$sample;
            
        $pembagi=array();
        //-- melakukan iterasi utk setiap kriteria
        foreach($kriteria as $kd_kriteria=>$value){
            $pembagi[$kd_kriteria]=0;
                //-- melakukan iterasi utk setiap alternatif
            foreach($alternatif as $id_alternatif => $a_value){
                $pembagi[$kd_kriteria] += pow($X[$id_alternatif][$kd_kriteria],2);
                // dd($pembagi);
            }
        }

        //-- inisialisasi matrik Normalisasi R
        $R=array();
        //-- melakukan iterasi utk setiap alternatif
        foreach($X as $id_alternatif => $a_kriteria) {
            $R[$id_alternatif] = array();
                //-- melakukan iterasi utk setiap kriteria
            foreach($a_kriteria as $kd_kriteria => $nilai){
                    $R[$id_alternatif][$kd_kriteria] = round($nilai/sqrt($pembagi[$kd_kriteria]), 2);
            }
        }    

        $Y=array();
        //-- melakukan iterasi utk setiap alternatif
        foreach($R as $id_alternatif=>$a_kriteria) {
            $Y[$id_alternatif]=array();
            //-- melakukan iterasi utk setiap kriteria
            foreach($a_kriteria as $kd_kriteria=>$nilai){
                $Y[$id_alternatif][$kd_kriteria] = round($nilai * $bobot[$kd_kriteria],2);
            }
        }    
        

        $A_max=$A_min=array();
        //-- melakukan iterasi utk setiap kriteria
        foreach($kriteria as $kd_kriteria => $a_kriteria) {
            $A_max[$kd_kriteria]= 0;
            $A_min[$kd_kriteria] = 100;
            //-- melakukan iterasi utk setiap alternatif
            foreach($alternatif as $id_alternatif => $nilai){
                if($A_max[$kd_kriteria] < $Y[$id_alternatif][$kd_kriteria]){
                    $A_max[$kd_kriteria] = $Y[$id_alternatif][$kd_kriteria];
                }
                if($A_min[$kd_kriteria] > $Y[$id_alternatif][$kd_kriteria]){
                    $A_min[$kd_kriteria] = $Y[$id_alternatif][$kd_kriteria];
                }
            }
        }   
        // echo"<pre>";
        // var_dump($A_max);
        // echo"<pre>"; 

        $D_plus=$D_min=array();
        //-- melakukan iterasi utk setiap alternatif
        foreach($Y as $id_alternatif => $n_a){
            $D_plus[$id_alternatif] = 0;
            $D_min[$id_alternatif] = 0;
            //-- melakukan iterasi utk setiap kriteria
            foreach($n_a as $kd_kriteria => $y){
                $D_plus[$id_alternatif] += pow($y-$A_max[$kd_kriteria],2);
                $D_min[$id_alternatif] += pow($y-$A_min[$kd_kriteria],2);
            }
            $D_plus[$id_alternatif] = round(sqrt($D_plus[$id_alternatif]),2);
            $D_min[$id_alternatif] = round(sqrt($D_min[$id_alternatif]),2);
        }
//  var_dump($D_min);

        $V=array();
        //-- melakukan iterasi utk setiap alternatif
        foreach($D_min as $id_alternatif => $d_min){
            //-- perhitungan nilai Preferensi V dari nilai jarak solusi ideal D
            $V[$id_alternatif] = round($d_min/($d_min+$D_plus[$id_alternatif]),2);
        }
  
        //--mengurutkan data secara descending dengan tetap mempertahankan key/index array-nya
        arsort($V);
        //--mendapatkan key/index item array yang pertama
        $index=key($V);
        //-- menampilkan hasil akhir:
            $alternatif[$index][0];
            $V[$index];
    //-- var_dump($V);
            return view('perhitungan', compact('alternatifs','kriterias','nilais','alternatif','kriteria','X','pembagi','R','Y','A_max','A_min','D_plus','D_min','V'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function rangking(Request $request)
    {
        //MEMANGGIL ('relasi ke kriteria')
        $alternatifs = Alternatif::all();
        $kriterias = Kriteria::all();
        $datanilais = Nilai::with('kriteria')->paginate(30);
        $nilais = Nilai::orderBy('id_alternatif', 'ASC')->orderBy('kd_kriteria','ASC')->get();

        $kriteria=array();
        $bobot=array();
        //-- melakukan iterasi pengisian array untuk tiap record data yang didapat
        foreach ($kriterias as $row) {
            $kriteria[$row['kd_kriteria']]=array($row['kriteria'],$row['nama_kriteria']);
            $bobot[$row['kd_kriteria']]=$row['bobot_kriteria']/100;
        }
        
        $alternatif=array();
        //-- melakukan iterasi pengisian array untuk tiap record data yang didapat
        foreach ($alternatifs as $row) {
            $alternatif[$row['id_alternatif']]=array($row['alternatif'],$row['nama_calon']);
        }

        $sample=array();
        foreach ($nilais as $row) {
            //-- jika array $sample[$row['id_alternatif']] belum ada maka buat baru
            //-- $row['id_alternatif'] adalah id kandidat/alternatif
            if (!isset($sample[$row['id_alternatif']])) {
                $sample[$row['id_alternatif']] = array();
            }
            $sample[$row['id_alternatif']][$row['kd_kriteria']] = $row['nilai'];
        }

        $X=$sample;
            
        $pembagi=array();
        //-- melakukan iterasi utk setiap kriteria
        foreach($kriteria as $kd_kriteria=>$value){
            $pembagi[$kd_kriteria]=0;
                //-- melakukan iterasi utk setiap alternatif
            foreach($alternatif as $id_alternatif=>$a_value){
                $pembagi[$kd_kriteria]+= pow($X[$id_alternatif][$kd_kriteria],2);
                // dd($pembagi);
            }
        }

        //-- inisialisasi matrik Normalisasi R
        $R=array();
        //-- melakukan iterasi utk setiap alternatif
        foreach($X as $id_alternatif=>$a_kriteria) {
            $R[$id_alternatif]=array();
                //-- melakukan iterasi utk setiap kriteria
            foreach($a_kriteria as $kd_kriteria=>$nilai){
                    $R[$id_alternatif][$kd_kriteria]=round($nilai/sqrt($pembagi[$kd_kriteria]), 2);
            }
        }    

        $Y=array();
        //-- melakukan iterasi utk setiap alternatif
        foreach($R as $id_alternatif=>$a_kriteria) {
            $Y[$id_alternatif]=array();
            //-- melakukan iterasi utk setiap kriteria
            foreach($a_kriteria as $kd_kriteria=>$nilai){
                $Y[$id_alternatif][$kd_kriteria] = round($nilai * $bobot[$kd_kriteria],2);
            }
        }    

        $A_max=$A_min=array();
        //-- melakukan iterasi utk setiap kriteria
        foreach($kriteria as $kd_kriteria=>$a_kriteria) {
            $A_max[$kd_kriteria]=0;
            $A_min[$kd_kriteria]=100;
            //-- melakukan iterasi utk setiap alternatif
            foreach($alternatif as $id_alternatif=>$nilai){
                if($A_max[$kd_kriteria]<$Y[$id_alternatif][$kd_kriteria]){
                    $A_max[$kd_kriteria] = $Y[$id_alternatif][$kd_kriteria];
                }
                if($A_min[$kd_kriteria]>$Y[$id_alternatif][$kd_kriteria]){
                    $A_min[$kd_kriteria] = $Y[$id_alternatif][$kd_kriteria];
                }
            }
        }    

        $D_plus=$D_min=array();
        //-- melakukan iterasi utk setiap alternatif
        foreach($Y as $id_alternatif=>$n_a){
            $D_plus[$id_alternatif]=0;
            $D_min[$id_alternatif]=0;
            //-- melakukan iterasi utk setiap kriteria
            foreach($n_a as $kd_kriteria=>$y){
                $D_plus[$id_alternatif]+= pow($y-$A_max[$kd_kriteria],2);
                $D_min[$id_alternatif]+= pow($y-$A_min[$kd_kriteria],2);
            }
            $D_plus[$id_alternatif]= round(sqrt($D_plus[$id_alternatif]),2);
            $D_min[$id_alternatif]= round(sqrt($D_min[$id_alternatif]),2);
        }


        $V=array();
        //-- melakukan iterasi utk setiap alternatif
        foreach($D_min as $id_alternatif=>$d_min){
            //-- perhitungan nilai Preferensi V dari nilai jarak solusi ideal D
            $V[$id_alternatif]= round($d_min/($d_min + $D_plus[$id_alternatif]),2);
        }
  
        //--mengurutkan data secara descending dengan tetap mempertahankan key/index array-nya
        arsort($V);
        //--mendapatkan key/index item array yang pertama
        $index=key($V);
        //-- menampilkan hasil akhir:
            $alternatif[$index][0];
            $V[$index];
    //--var_dump($V);
            return view('laporan', compact('alternatifs','kriterias','nilais','alternatif','kriteria','X','pembagi','R','Y','A_max','D_plus','D_min','V','index'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
