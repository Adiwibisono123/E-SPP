@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{ url('petugas',$petugas->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="id_petugas">ID Petugas</label>
                            <input type="number" name="id_petugas" value="{{ $petugas->id_petugas }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="{{ $petugas->nama }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No telpon</label>
                            <input type="text" name="no_telp" value="{{ $petugas->no_telp }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" value="{{ $petugas->alamat }}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('petugas.index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
