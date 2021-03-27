@extends('layouts.master')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">

                {{-- <div class="col-md-2 text-left">
                    <a href="{{ url('/spp/export_excel') }}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                </div> --}}

                <div class="col-md-12 text-right mt-5">
                    <a href="{{ route('spp.create') }}" class="btn btn-primary mb-4"><b>+ Tambah</b></a>

                    {{-- <a href="{{ route('petugas.create') }}" class="btn btn-primary mb-4 pull-right"><b>+ Tambah</b></a> --}}
    
                    {{-- <form class="d-flex mb-4">
                        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success push-right" type="submit">Search</button>
                    </form> --}}
                </div>
               </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            
            <div class="card">
                <div class="card-header text-center"><b>SPP SMK MUHAMMADIYAH 1 WELERI</b></div>

                <div class="card-body">
                    <table class="table">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th>Tempat Pembayaran</th>
                                <th>Jumlah Spp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($spp as $spp)
                            <tr>
                                <td>{{ $row++ }}</td>
                                <td>{{ $spp->kelas }}</td>
                                <td>{{ $spp->tempat_bayar }}</td>
                                <td>Rp. {{ $spp->jumlah_spp }}</td>
                                <td>
                                    <form action="{{ url('spp',$spp->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ url('spp/'.$spp->id.'/show') }}" class="btn btn-warning"><i class="fas fa-clipboard "></i>  Detail</a>
                                        <a href="{{ url('spp/'.$spp->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-pen "></i> Edit</a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?')"><i class="fas fa-trash "></i> Hapus</button>
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
