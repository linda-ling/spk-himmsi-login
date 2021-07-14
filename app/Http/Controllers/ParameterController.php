<?php

namespace App\Http\Controllers;


use himmsi_db;
use App\Models\Parameter;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ParameterController;

class ParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //MEMANGGIL ('relasi ke kriteria')
        $kriterias = Kriteria::all();
        $parameters = Parameter::with('kriteria')->paginate(30);
        return view('parameter', compact('parameters','kriterias'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        //PENYIMPANAN DATA
            Parameter::updateOrCreate([
            //'kd_parameter', 
            'kd_kriteria' => $request->nama,   
            'nama_parameter' => $request->parameter,
            'nilai_parameter' => $request->nilai,
        ]);

        //KOTAK DIALOG BERHASIL
        return redirect('parameter')->with('success', 'Data Parameter Berhasil Tersimpan!');
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
        $parameters = Parameter::findOrFail($id);
        $parameters->update([
            //'kd_parameter',    
            'kd_kriteria' => $request->nama,
            'nama_parameter' => $request->parameter,
            'nilai_parameter' => $request->nilai,
        ]);

        //KOTAK DIALOG BERHASIL
        return redirect('parameter')->with('success', 'Data Parameter Berhasil Diubah!');
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
        $parameters=Parameter::findOrFail($id);
        $parameters->delete();

        return back()->with('info', 'Data Parameter Berhasil Dihapus!');
    }
}
