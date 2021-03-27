@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('X AKL') }}</div>

                <div class="card-body">
                    <form action="{{ url('xakl') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="NIS">NIS</label>
                            <input type="text" name="NIS" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="no_telp">no_telp</label>
                            <input type="text" name="no_telp" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="status_bayar">Status Pembayaran</label>
                            <input type="text" name="status_bayar" class="form-control" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="{{ route('xakl.index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
