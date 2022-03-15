<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggan'));

        return redirect()->route('pelanggan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.create', compact('pelanggan'));

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

             'nama_pelanggan' => 'required',
            'jumlah_bayar' => 'required',
            'alamat' => 'required',



        ]);

        $pelanggan = new Pelanggan;
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->jumlah_bayar = $request->jumlah_bayar;
        $pelanggan->alamat = $request->alamat;





        $pelanggan->save();


        Alert::success('Mantap','Data berhasil disimpan');
        return redirect()->route('pelanggan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.show', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validated = $request->validate([

            'nama_pelanggan' => 'required',
            'jumlah_bayar' => 'required',
            'alamat' => 'required',



        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->jumlah_bayar = $request->jumlah_bayar;
        $pelanggan->alamat = $request->alamat;




        $pelanggan->save();
        Alert::success('Mantap','Data berhasil disimpan');
        return redirect()->route('pelanggan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        Alert::success('Mantap','Data berhasil dihapus');
        return redirect()->route('pelanggan.index');
    }


}
