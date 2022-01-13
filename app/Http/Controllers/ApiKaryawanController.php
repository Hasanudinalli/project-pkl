<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class ApiKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::where('id', 1)
                 ->where('nama', 'gugg')
                 ->get();

        if ($karyawan->count() >=1) {
            return response()->json([
                'status' => true,
                'code' => 200,
                'message' => 'Berhasil',
                'data' => $karyawan,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'code' => 404,
                'message' => 'Gagal',  
            ]);
        }
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $karyawan = new ArticleCategory();
        $karyawan->nama = $request->nama;
        $karyawan->alamat = $request->alamat;
        $karyawan->nik = $request->nik;
        $karyawan->no_telp = $request->no_telp;
        $karyawan->save();
        return redirect()->route('karyawan.index');



        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Karyawan::Find($id);
        if ($karyawan) {
            return response()->json([
                'succes' => true,
                'message' => 'Show Data Karyawan',
                'data' => $user,
            ], 200);
        } else {
            return response()->json([
                'succes' => false,
                'message' => 'Data User Tidak Ditemukan',
                'data' => [],
            ], 404);
        }
        

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $karyawan = Karyawan::find($id);
        if ($karyawan) {
        $karyawan->nama = $request->name;
        $karyawan->alamat = $request->email;
        $karyawan->nik = $request->nik;
        $karyawan->no_telp = bcrypt($request->no_telp);
        $karyawan->save();
        return response()->json([
            'succes' => true,
            'message' => 'data user berhasil di buat',
            'data' => $karyawan,
        ], 201);

        //
    }else {
        return response()->json([
            'succes' => false,
            'message' => 'Data User Tidak Ditemukan',
            'data' => [],
        ], 404);

    }
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::Find($id);
        if ($karyawan) {
            return response()->json([
                'succes' => true,
                'message' => 'Data Karyawan Berhasil dihapus',
                'data' => $user,
            ], 200);
        } else {
            return response()->json([
                'succes' => false,
                'message' => 'Data Karyawan Tidak Ditemukan',
                'data' => [],
            ], 404);
        }

        
    }
}
