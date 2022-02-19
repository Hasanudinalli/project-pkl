<?php

namespace App\Http\Controllers;
use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.create', compact('transaksi'));
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

            'id' => 'required',
            'kode_transaksi' => 'required',
            'nama_pelanggan' => 'required',
            'jenis_transaksi' => 'required',
            'tanggal_transaksi' => 'required',



        ]);

        $transaksi = new Transaksi;
        $transaksi->id = $request->id;
        $transaksi->kode_transaksi = $request->kode_transaksi;
        $transaksi->nama_pelanggan = $request->nama_pelanggan;
        $transaksi->jenis_transaksi= $request->jenis_transaksi;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;






        $transaksi->save();
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
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
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
        return view('transaksi.edit', compact('transaksi'));
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

            'id' => 'required',
            'kode_transaksi' => 'required',
            'nama_pelanggan' => 'required',
            'jenis_transaksi' => 'required',
            'tanggal_transaksi' => 'required',



        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->id = $request->id;
        $transaksi->kode_transaksi = $request->kode_transaksi;
        $transaksi->nama_pelanggan = $request->nama_pelanggan;
        $transaksi->jenis_transaksi= $request->jenis_transaksi;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;





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
    }
}
