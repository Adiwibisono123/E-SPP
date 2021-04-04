@extends('layouts.master')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
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
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($spp as $spp)
                            <tr>
                                <td>{{ $row++ }}</td>
                                <td>{{ $spp->kelas }}</td>
                                <td>{{ $spp->tempat_bayar }}</td>
                                <td>Rp. {{ $spp->jumlah_spp }}</td>
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
