<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Spp;

use App\Exports\SppExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   

     
    public function export_excel()
	{
		return Excel::download(new SppExport, 'spps.xlsx');
	}


    public function __construct(){
        $this->middleware(function($request, $next){

            if(Gate::allows('spp')) return $next($request);
          
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }

    public function index()
    {
        $data['spp'] = Spp::orderBy('kelas', 'asc')->get();
        $data['row'] = 1;
        return view('spp.index')->with($data);
    }

    // public function sppmuhi()
    // {
    //     return view('sppmuhi.index');
    // }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spp.create');
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
            "kelas" => "required|min:5|max:200",
            "tempat_bayar" => "required|min:3|max:1000",
            "jumlah_spp" => "required|min:3|max:100",
        ])->validate();

        $spp = new Spp;
        $spp->kelas = $request->kelas;
        $spp->tempat_bayar = $request->tempat_bayar;
        $spp->jumlah_spp = $request->jumlah_spp;
        $spp->save();

        return redirect('spp')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function show(Spp $spp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['spp'] = Spp::find($id);
        return view('spp.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $spp = Spp::find($id);
        $spp->kelas = $request->kelas;
        $spp->tempat_bayar = $request->tempat_bayar;
        $spp->jumlah_spp = $request->jumlah_spp;
        $spp->save();

        return redirect('spp')->with('status', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spp = Spp::find($id);
        $spp->delete();

        return redirect('spp')->with('status', 'Data berhasil dihapus!');
    }
}
