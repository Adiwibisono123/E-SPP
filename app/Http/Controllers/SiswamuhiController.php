<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswamuhiController extends Controller
{
    public function index()
    {
        $data['siswa'] = Siswa::orderBy('nama', 'asc')->get();
        $data['row'] = 1;

        $siswa = Siswa::paginate(10);

        // $filterKeyword = $request->get('keyword');

        // if($filterKeyword){
        //     $siswa = Siswa::where('email', 'LIKE', "%$filterKeyword%")->paginate(10);
        // }

        return view('siswamuhi.index', ['siswa' => $siswa])->with($data);
    }

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswamuhi.show', ['siswa' => $siswa]);
    }
}
