<?php

namespace App\Http\Controllers;
use App\Models\produk;
use App\Models\transaksi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::with('produk')->get();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Produk::all();

        return view('transaksi.create', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        $validated = $request->validate([

            //'id' => 'required',
            //'kode_produk' => 'required',
            //'nama_produk' => 'required',
            //'harga_beli' => 'required',



        ]);

        $transaksi = new Transaksi;
        $transaksi->kode_produk = $request->kode_produk ;
        $transaksi->nama_produk = $transaksi->produk->nama_produk ;
        $transaksi->harga_beli = $request->harga_beli ;







        Produk::findOrFail($request->kode_produk);

        $transaksi->produk->save();


        $transaksi->save();
        Alert::success('Mantap','Data berhasil disimpan');
        return redirect()->route('transaksi.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $produk = Produk::findOrFail($id);




        return view('transaksi.show', compact( 'produk'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $produk = produk::all();
        return view('transaksi.edit', compact('transaksi' ,'produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validated = $request->validate([

            //'kode_produk' => 'required',
            //'nama_produk' => 'required',
            //'harga_beli' => 'required',



        ]);

        $transaksi = new Transaksi;
        $transaksi->kode_produk = $request->kode_produk ;
        $transaksi->nama_produk = $transaksi->produk->nama_produk ;
        $transaksi->harga_beli = $transaksi->produk->harga_beli ;







        Produk::findOrFail($request->kode_produk);

        $transaksi->produk->save();





        $transaksi->save();
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index');
        Alert::success('Mantap','Data berhasil dihapus');
    }
}
