<?php

namespace App\Http\Controllers;
use App\Models\produk;
use App\Models\pelanggan;
use App\Models\beli;
use Illuminate\Http\Request;




class BeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beli = Beli::with('produk','pelanggan')->get();
        return view('beli.index', compact('beli'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Produk::all();
        $pelanggan = Pelanggan::all();



        return view('beli.create', compact('produk','pelanggan'));

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([

            // 'id' => 'required',
            'kode_konsumen' => 'required',
            'kode_produk' => 'required',
            'kode_transaksi' => 'required',
            'kode_pelanggan' => 'required',
            'jumlah_produk' => 'required',
            'total_harga' => 'required',


        ]);

        $beli = new Beli;
        // $beli->id = $request->id;
        $beli->kode_konsumen = $request->kode_konsumen;
        $beli->kode_produk = $request->kode_produk;
        $beli->kode_transaksi = $request->kode_transaksi;
        $beli->kode_pelanggan = $request->kode_pelanggan;
        $beli->jumlah_produk = $request->jumlah_produk;
        $beli->total_harga = $beli->produk->stock * $request->total_harga * $beli->kode_produk;




         //$produk = Produk::findOrFail($request->kode_produk);
         //$produk->stock+= $request->stock;

         //$produk->save();

        // $pelanggan = Pelanggan::findOrFail($request->kode_pelanggan);
        // $pelanggan->jumlah_bayar+= $request->jumlah_bayar;

        // $pelanggan->save();
            $beli->save();

        return redirect()->route('beli.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\beli  $beli
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::all();
        $pelanggan = Pelanggan::all();




        return view('beli.show', compact( 'produk','pelanggan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\beli  $beli
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::all();
        $pelanggan = Pelanggan::all();



        return view('beli.edit', compact('produk','pelanggan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\beli  $beli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validated = $request->validate([

            'id' => 'required',
            'kode_konsumen' => 'required',
            'kode_produk' => 'required',
            'kode_transaksi' => 'required',
            'kode_pelanggan' => 'required',
            'jumlah_produk' => 'required',
            'total_harga' => 'required',


        ]);

        $beli = Beli::findOrFail($id);
        $beli->id = $request->id;
        $beli->kode_konsumen = $request->kode_konsumen;
        $beli->kode_produk = $request->kode_produk;
        $beli->kode_transaksi = $request->kode_transaksi;
        $beli->kode_pelanggan = $request->kode_pelanggan;
        $beli->jumlah_produk = $request->jumlah_produk;
        $beli->total_harga = $request->total_harga;




        $beli->save();
        return redirect()->route('beli.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\beli  $beli
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beli = Beli::findOrFail($id);
        $beli->delete();
        return redirect()->route('beli.index');

    }
}
