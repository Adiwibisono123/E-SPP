@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 text-right">
    
                    <a href="{{ route('petugas.create') }}" class="btn btn-primary mb-4 pull-right"><b>+ Tambah</b></a>
    
                    {{-- <form class="d-flex mb-4">
                        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success push-right" type="submit">Search</button>
                    </form> --}}
                </div>
               </div>
            <div class="card">
                <div class="card-header text-center">Data Kelas X AKL</div>

                <div class="card-body">
                    <table class="table">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>No Telpon</th>
                                <th>Status Pembayaran</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($xakl as $xakl)
                            <tr>
                                <td>{{ $row++ }}</td>
                                <td>{{ $xakl->NIS }}</td>
                                <td>{{ $xakl->nama }}</td>
                                <td>{{ $xakl->no_telp }}</td>
                                <td>{{ $xakl->status_bayar }}</td>
                                <td>{{ $xakl->alamat }}</td>
                                <td>
                                    <form action="{{ url('xakl',$xakl->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ url('xakl/'.$xakl->id.'/edit') }}" class="btn btn-primary">Edit</a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
