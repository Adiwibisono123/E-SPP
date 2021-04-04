<?php

namespace App\Http\Controllers;

use App\Sppmuhi;
use App\Spp;
use Illuminate\Http\Request;

class SppmuhiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data['spp'] = Spp::orderBy('kelas', 'asc')->get();
        $data['row'] = 1;
        return view('spp.siswa')->with($data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sppmuhi  $sppmuhi
     * @return \Illuminate\Http\Response
     */
    public function show(Sppmuhi $sppmuhi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sppmuhi  $sppmuhi
     * @return \Illuminate\Http\Response
     */
    public function edit(Sppmuhi $sppmuhi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sppmuhi  $sppmuhi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sppmuhi $sppmuhi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sppmuhi  $sppmuhi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sppmuhi $sppmuhi)
    {
        //
    }
}
