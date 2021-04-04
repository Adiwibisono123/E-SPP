@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{ url('siswa',$siswa->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="NIS">NIS</label>
                            <input type="text" name="NIS" value="{{ $siswa->NIS }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" value="{{ $siswa->kelas }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="detail_pembayaran">detail_pembayaran</label>
                            <input type="text" name="detail_pembayaran" value="{{ $siswa->detail_pembayaran }}" class="form-control">
                            <p class="text-muted">Contoh : <b>24/4/2021</b></p>
                            <p class="text-muted">catatan : <b>*Jika ada tambahan pembayaran tinggal ditambahkan, jangan menghapus yang kemarin!</b></p>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('siswa.index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
