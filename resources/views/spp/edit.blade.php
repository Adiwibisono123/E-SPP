@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{ url('spp',$spp->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" value="{{ $spp->kelas }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tempat_bayar">Tempat Pembayaran</label>
                            <input type="text" name="tempat_bayar" value="{{ $spp->tempat_bayar }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_spp">Jumlah Spp</label>
                            <input type="text" name="jumlah_spp" value="{{ $spp->jumlah_spp }}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('spp.index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
