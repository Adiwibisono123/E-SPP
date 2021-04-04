@extends('layouts.master')

@section('content')
<div class="container">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-6 mt-5">
                <form action="">
                    <div class="input-group mb-3">
                    <input
                            value="{{Request::get('keyword')}}" 
                            name="keyword" 
                            class="form-control col-md-10" 
                            type="text"
                            placeholder="Cari berdasarkan nama."/>
            
                        <div class="input-group-append">
                            <input 
                            type="submit" 
                            value="Cari" 
                            class="btn btn-primary">
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <div class="text-right mt-5">
                <a href="{{ route('petugas.create') }}" class="btn btn-primary mb-4 pull-right"><i class="fas fa-plus"></i><b> Tambah</b></a>
            </div>
            <div class="card">
                <div class="card-header"><strong class=" text-center">Daftar Petugas Pengelola E - SPP</strong></div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>ID Petugas</th>
                                <th>Nama Petugas</th>
                                <th>No Telpon</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($petugas as $petugas)
                            <tr>
                                <td>{{ $row++ }}</td>
                                <td>{{ $petugas->id_petugas }}</td>
                                <td>{{ $petugas->nama }}</td>
                                <td>{{ $petugas->no_telp }}</td>
                                <td>{{ $petugas->alamat }}</td>
                                <td>
                                    <form action="{{ url('petugas',$petugas->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ url('petugas/'.$petugas->id.'/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin menghapus?')"><i class="fas fa-trash"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
</div>
@endsection
