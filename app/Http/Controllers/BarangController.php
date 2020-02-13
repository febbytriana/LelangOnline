<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $barangs = Barang::orderBy('nama_barang','asc')->get();
        return view('barangs.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $harga = $request->harga_awal;
        
        $harga = str_replace('.', '', $harga);
        
        DB::table('barangs')->insert([
            'nama_barang' => $request->nama_barang,
            'harga_awal' => $harga,
            'deskripsi_barang' => $request->deskripsi_barang,
            'tanggal' => $request->tanggal
        ]);

        return redirect('/barangs')->with('success', 'Data Barang berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('barangs.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $harga = $request->harga_awal;
        
        $harga = str_replace('.', '', $harga);
        
        DB::table('barangs')->update([
            'nama_barang' => $request->nama_barang,
            'harga_awal' => $harga,
            'deskripsi_barang' => $request->deskripsi_barang,
            'tanggal' => $request->tanggal
        ]);
        return redirect('/barangs')->with('success', 'Data Barang berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangs = Barang::findOrFail($id);
        $barangs->delete();

        return redirect('/barangs')->with('success', 'Data berhasil dihapus!');
    }
}
