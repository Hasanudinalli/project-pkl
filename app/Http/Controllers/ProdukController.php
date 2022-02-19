<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Produk::all();
        return view('produk.create', compact('produk'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'kode_produk' => 'required',
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
            'stock' => 'required',
            'harga_barang' => 'required',



        ]);

        $produk = new Produk;
        $produk->id = $request->id;
        $produk->kode_produk = $request->kode_produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->jenis_produk= $request->jenis_produk;
        $produk->stock = $request->stock;
        $produk->harga_barang = $request->harga_barang;




        $produk->save();



        Alert::success('Mantap','Data berhasil disimpan');
        return redirect()->route('produk.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validated = $request->validate([
            'id' => 'required',
            'kode_produk' => 'required',
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
            'stock' => 'required',
            'harga_barang' => 'required',



        ]);

        $produk = Produk::findOrFail($id);
        $produk->id = $request->id;
        $produk->kode_produk = $request->kode_produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->jenis_produk= $request->jenis_produk;
        $produk->stock = $request->stock;
        $produk->harga_barang = $request->harga_barang;





        $produk->save();
        Alert::success('Mantap','Data berhasil disimpan');
        return redirect()->route('produk.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index');
        Alert::success('Mantap','Data berhasil dihapus');
    }
}
