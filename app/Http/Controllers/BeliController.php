<?php

namespace App\Http\Controllers;
use App\Models\produk;
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
        $beli = Beli::with('produk')->get();
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
        $produk = produk::all();

        return view('beli.create', compact('produk'));

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
        // $validated = $request->validate([

        //     'kode_produk' => 'required',
        //
        //     'jumlah_produk' => 'required',
        //     'total_harga' => 'required',


        // ]);

        $beli = new Beli;
        $beli->id_produk = $request->id_produk;
        $beli->jumlah_produk = $request->jumlah_produk;

        $produk = produk::findOrFail($request->id_produk);
        $produk->stock -= $request->jumlah_produk;
        $produk->save();

        $beli->total_harga = $beli->jumlah_produk * $produk->harga_barang ;



        // $produk = new produk;
        // $produk->stock -= $request->jumlah_produk;
        // $produk->save();


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
        $produk = Produk::findOrFail($id);




        return view('beli.show', compact( 'produk'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\beli  $beli
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beli = Beli::findOrFail($id);
        $produk = produk::all();
        return view('beli.edit', compact('beli' ,'produk'));

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
        //
        // $validated = $request->validate([

        //     'kode_produk' => 'required',
        //
        //     'jumlah_produk' => 'required',


        // ]);

        $beli = new Beli;
        $beli->kode_produk = $beli->produk->kode_produk ;
        $beli->nama_produk = $beli->nama_produk ;
        $beli->jumlah_produk = $request->jumlah_produk;
        $beli->harga_barang = $beli->produk->harga_barang * $beli->jumlah_produk;




         produk::findOrFail($request->kode_produk);
         $beli->produk->stock -= $beli->jumlah_produk;
         $beli->produk->save();

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
