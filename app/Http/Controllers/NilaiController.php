<?php

namespace App\Http\Controllers;


use himmsi_db;
use App\Models\Nilai;
use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\NilaiController;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //MEMANGGIL ('relasi ke kriteria')
        $alternatifs    = Alternatif::all();
        $kriterias      = Kriteria::all();
        $datanilais     = Nilai::with('kriteria')->paginate();
        $nilais         = Nilai::select('id_alternatif',)->groupBy('id_alternatif')->get();
        return view('penilaian', compact('nilais','alternatifs','kriterias','datanilais'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //coba
        $nilai =  $request->nilai;
        $kd_kriteria =  $request->kriteria;
        foreach ($nilai as $key => $value){
            Nilai::updateOrCreate([
                //'kd_nilai', 
                'id_alternatif'=> $request->alternatif,
                'kd_kriteria' => $kd_kriteria[$key],   
                'nilai' => $value,
            ]);
        }
        //KOTAK DIALOG BERHASIL
        return redirect('penilaian')->with('success', 'Data Nilai Berhasil Tersimpan!');
        //dd($request->all());
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
        //MENYIMPAN LAGI DI DATABASE SETELAH DI EDIT
        $nilais = Nilai::findOrFail($id);
        foreach ($nilai as $key => $value){
        $nilais->update([
            'kd_nilai',  
            'id_alternatif' => $request->alternatif,
            'kd_kriteria' =>  $kd_kriteria[$key],
            'nilai' => $value,
        ]);
    }

        //KOTAK DIALOG BERHASIL
        return redirect('penilaian')->with('success', 'Data Nilai Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DELETE
        $nilais=Nilai::findOrFail($id);
        $nilais->delete();

        return back()->with('info', 'Data Nilai Berhasil Dihapus!');
    }
}
