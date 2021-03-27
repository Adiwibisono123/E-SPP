<?php

namespace App\Http\Controllers;

use App\XAKL;
use Illuminate\Http\Request;

class XAKLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['xakl'] = XAKL::orderBy('nama', 'asc')->get();
        $data['row'] = 1;
        return view('kelas.xakl.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.xakl.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $xakl = new XAKL;
        $xakl->NIS = $request->NIS;
        $xakl->nama = $request->nama;
        $xakl->no_telp = $request->no_telp;
        $xakl->alamat = $request->alamat;
        $xakl->status_bayar = $request->status_bayar;
        $xakl->save();

        return redirect('xakl')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\XAKL  $xAKL
     * @return \Illuminate\Http\Response
     */
    public function show(XAKL $xAKL)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\XAKL  $xAKL
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $xakl = XAKL::find($id);
        return view('kelas.xakl.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\XAKL  $xAKL
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, XAKL $xAKL)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\XAKL  $xAKL
     * @return \Illuminate\Http\Response
     */
    public function destroy(XAKL $xAKL)
    {
        //
    }
}
