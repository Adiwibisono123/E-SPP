<?php

namespace App\Http\Controllers;

use UxWeb\SweetAlert\SweetAlert;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        
        $data['siswa'] = Siswa::orderBy('nama', 'asc')->get();
        $data['row'] = 1;

        $siswa = Siswa::paginate(10);

        $filterKeyword = $request->get('keyword');

        if($filterKeyword){
            $siswa = Siswa::where('email', 'LIKE', "%$filterKeyword%")->paginate(10);
        }

        return view('siswa.index', ['siswa' => $siswa])->with($data);
        // return view('layouts.master');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

       \Validator::make($request->all(), [
            "NIS" => "required|min:5|max:200",
            "nama" => "required|min:5|max:1000",
            // "email" => "required|unique:email|min:5|max:1000",
            "kelas" => "required|min:3|max:100",
            "alamat" => "required|min:3|max:200",
        ])->validate(); 


        SweetAlert::info('Robots are working!');
        $siswa = new Siswa;
        $siswa->NIS = $request->NIS;
        $siswa->nama = $request->nama;
        $siswa->email = $request->email;
        $siswa->kelas = $request->kelas;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return redirect('siswa')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        return view('petugas.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['siswa'] = Siswa::find($id);
        return view('siswa.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->NIS = $request->NIS;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return redirect('siswa')->with('status', 'Data berhasil diUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('siswa');
    }
}
