<?php

namespace App\Http\Controllers;


use himmsi_db;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\KriteriaController;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //MEMANGGIL
        $kriterias = Kriteria::all();
        return view('kriteria', compact('kriterias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
            Kriteria::updateOrCreate([
            //'kd_kriteria',    
            'nama_kriteria' => $request->nama,
            'jenis_kriteria' => $request->jenis,
            'bobot_kriteria' => $request->bobot,
        ]);

        //KOTAK DIALOG BERHASIL
        return redirect('kriteria')->with('success', 'Data Kriteria Berhasil Tersimpan!');
        //dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $kd_kriteria)
    {
        //MEMANGGIL DATA DI DATABASE UNTUK DITAMPILKAN
        $kriterias = Kriteria::findOrFail($kd_kriteria)([
            /*'kd_kriteria',
            'nama_kriteria' => $request->nama,
            'jenis_kriteria' => $request->jenis,
            'bobot_kriteria' => $request->bobot,*/
            ]);

            return view('kriteria-edit',compact('kriterias'));
        //return response()->json(['success'=>true]);
        
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
        $kriterias = Kriteria::findOrFail($id);
        $kriterias->update([
            //'kd_kriteria',    
            'nama_kriteria' => $request->nama,
            'jenis_kriteria' => $request->jenis,
            'bobot_kriteria' => $request->bobot,
        ]);

        //KOTAK DIALOG BERHASIL
        return redirect('kriteria')->with('success', 'Data Kriteria Berhasil Diubah!');
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
        $kriterias=Kriteria::findOrFail($id);
        $kriterias->delete();

        return back()->with('info', 'Data Kriteria Berhasil Dihapus!');
    }
}
