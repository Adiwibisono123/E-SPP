<?php

namespace App\Http\Controllers;

use App\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct(){
        $this->middleware(function($request, $next){

            if(Gate::allows('petugas')) return $next($request);
          
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }


    public function index()
    {
        $data['petugas'] = Petugas::orderBy('nama', 'asc')->get();
        $data['row'] = 1;
        return view('petugas.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        \Validator::make($request->all(), [
            "id_petugas" => "required|min:4|max:200",
            "nama" => "required|min:5|max:1000",
            "no_telp" => "required|min:11|max:100",
            "alamat" => "required|min:3|max:200",
        ])->validate(); 

        $petugas = new Petugas;
        $petugas->id_petugas = $request->id_petugas;
        $petugas->nama = $request->nama;
        $petugas->no_telp = $request->no_telp;
        $petugas->alamat = $request->alamat;
        $petugas->save();

        return redirect('petugas')->with('status', 'Data Petugas Berhasil Di Tammbahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['petugas'] = Petugas::find($id);
        return view('petugas.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $petugas = Petugas::find($id);
        $petugas->id_petugas = $request->id_petugas;
        $petugas->nama = $request->nama;
        $petugas->no_telp = $request->no_telp;
        $petugas->alamat = $request->alamat;
        $petugas->save();

        return redirect('petugas')->with('status', 'Data Petugas Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $petugas = Petugas::find($id);
        $petugas->delete();

        return redirect('petugas');
    }
}
