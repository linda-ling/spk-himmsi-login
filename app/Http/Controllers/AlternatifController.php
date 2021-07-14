<?php

namespace App\Http\Controllers;


use himmsi_db;
use App\Models\Alternatif;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\AlternatifController;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //MEMANGGIL
        $alternatifs = Alternatif::all();
        return view('alternatif', compact('alternatifs'));
    }

    public function search(Request $request)
    {
       // menangkap data pencarian
		$search = $request->search;
 
        // mengambil data dari table pegawai sesuai pencarian data
    $alternatifs = Alternatif::where('nama_calon','like',"%".$search."%")->paginate();

        // mengirim data pegawai ke view index
    return view('alternatif',['alternatifs' => $alternatifs]);
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
            Alternatif::updateOrCreate([
            //'id_alternatif',    
            'nama_calon' => $request->alternatif,
            'nim' => $request->nim,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'pilihan_sie' => $request->pilihan,
        ]);

        //KOTAK DIALOG BERHASIL
        return redirect('alternatif')->with('success', 'Data Alternatif Berhasil Tersimpan!');
        //dd($request->all());
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
        $alternatifs = Alternatif::findOrFail($id);
        $alternatifs->update([
            //'id_alternatif',    
            'nama_calon' => $request->alternatif,
            'nim' => $request->nim,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'pilihan_sie' => $request->pilihan,
        ]);

        //KOTAK DIALOG BERHASIL
        return redirect('alternatif')->with('success', 'Data Alternatif Berhasil Diubah!');
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
        $alternatifs=Alternatif::findOrFail($id);
        $alternatifs->delete();

        return back()->with('info', 'Data Alternatif Berhasil Dihapus!');
    }
}
