<?php

namespace App\Http\Controllers;

use\App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $a = Siswa::all();
        return view('siswa.index', ['siswa' => $a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('siswa.create');
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
        $validate = $request->validate([
            'nis' => 'required',
            'nama_siswa' => 'required',
            'alamat_siswa' => 'required',
            'tgl_lahir' => 'required'
        ]);
        $siswa = new Siswa();
        $siswa -> nis = $request->nis;
        $siswa -> nama_siswa = $request->nama_siswa;
        $siswa -> alamat_siswa = $request->alamat_siswa;
        $siswa -> tgl_lahir = $request->tgl_lahir;


        $siswa -> save();
        return redirect()->route('siswa.index')->with('succes','Data berhasil di buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
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
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
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
        //
        $validate = $request->validate([
            'nis' => 'required',
            'nama_siswa' => 'required',
            'alamat_siswa' => 'required',
            'tgl_lahir' => 'required'
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa -> nis = $request->nis;
        $siswa -> nama_siswa = $request->nama_siswa;
        $siswa -> alamat_siswa = $request->alamat_siswa;
        $siswa -> tgl_lahir = $request->tgl_lahir;
        $siswa -> save();
        return redirect()->route('siswa.index')->with('success','Data berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $siswa = Siswa::findOrFail($id);
        $siswa -> delete();
        return redirect()->route('siswa.index')->with('succes','Data berhasil di delete!');
    }
}
