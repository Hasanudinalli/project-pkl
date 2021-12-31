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
        $transaksi = transaksi::all();  
        return view('transaksi.index', ['transaksi' => $transaksi]); 
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi.create');

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
        $request->validate([
            'id' => 'required|unique:posts|max:150',
            'total_harga' => 'required',
            
          ]);
        
          $input = $request->all();
        
          $transaksi = transaksi::create($input);
         
          return back()->with('success',' Post baru berhasil dibuat.');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
    public function edit(transaksi $id)
    {
        $transaksi = transaksi::findOrFail($id);
   
        return view('transaksi.edit', [
               'transaksi' => $transaksi
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksi $id)
    {
        $request->validate([
        'id' => 'required|unique:posts|max:150',
            'total_harga' => 'required',
         ]);
               
         $transaksi = transaksi::find($id)->update($request->all()); 
                
         return back()->with('success',' Data telah diperbaharui!');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $id)
    {
        $transaksi = transaksi::find($id);

        $transaksi->delete();
     
        return back()->with('success',' Penghapusan berhasil.');

        //
    }
}
