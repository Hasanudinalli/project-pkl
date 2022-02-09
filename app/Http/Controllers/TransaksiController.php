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
        //
        $transaksi = transaksi::all();
        return view('transaksi.index', compact('transaksi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('transaksi.create');

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
            'total_harga' => 'required',

        ]);

        $transaksi = new transaksi;
        $transaksi->id = $request->id;
        $transaksi->total_harga = $request->total_harga;

        $transaksi->save();
        return redirect()->route('transaksi.index');
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {$transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('transaksi'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validated = $request->validate([

            'id' => 'required',
            'total_harga' => 'required',


        ]);

        $transaksi = Transaksi::findOrFail($id);

        $transaksi->id = $request->id;
        $transaksi->total_harga = $request->total_harga;


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
        //
    }
}
