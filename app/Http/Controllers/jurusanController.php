<?php

namespace App\Http\Controllers;

use\App\Models\jurusan;
use Illuminate\Http\Request;

class jurusanController extends Controller
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
        $a = jurusan::all();
        return view('jurusan.index', ['jurusan' => $a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jurusan.create');
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
            'kode_mapel' => 'required',
            'nama_mapel' => 'required',
            'semester' => 'required',
            'jurusan' => 'required'
        ]);
        $jurusan = new jurusan();
        $jurusan-> kode_mapel = $request->kode_mapel;
        $jurusan-> nama_mapel = $request->nama_mapel;
        $jurusan-> semester = $request->semester;
        $jurusan-> jurusan = $request->jurusan;


        $jurusan-> save();
        return redirect()->route('jurusan.index')->with('success','Data berhasil di buat!');
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
        $jurusan= jurusan::findOrFail($id);
        return view('jurusan.show', compact('jurusan'));
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
        $jurusan = jurusan::findOrFail($id);
        return view('jurusan.edit', compact('jurusan'));
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
            'kode_mapel' => 'required',
            'nama_mapel' => 'required',
            'semester' => 'required',
            'jurusan' => 'required'
        ]);

        $jurusan = jurusan::findOrFail($id);
        $jurusan-> kode_mapel = $request->kode_mapel;
        $jurusan-> nama_mapel = $request->nama_mapel;
        $jurusan-> semester = $request->semester;
        $jurusan-> jurusan = $request->jurusan;
        $jurusan-> save();
        return redirect()->route('jurusan.index')->with('success','Data berhasil di edit!');
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
        $jurusan = jurusan::findOrFail($id);
        $jurusan -> delete();
        return redirect()->route('jurusan.index')->with('succes','Data berhasil di delete!');
    }
}
