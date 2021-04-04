@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{ url('siswa') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="NIS">NIS</label>
                        <input type="number" name="NIS" class="form-control  {{$errors->first('NIS') ? "is-invalid" : ""}} " value="{{ old('NIS')}}" autocomplete="off">
                            <div class="invalid-feedback">
                                {{$errors->first('NIS')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control {{$errors->first('nama') ? "is-invalid" : ""}} " value="{{ old('nama')}}" autocomplete="off">
                            <div class="invalid-feedback">
                                {{$errors->first('nama')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" name="email" class="form-control {{$errors->first('email') ? "is-invalid" : ""}} " value="{{ old('email')}}" autocomplete="off">
                            <div class="invalid-feedback">
                                {{$errors->first('email')}}
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" class="form-control {{$errors->first('kelas') ? "is-invalid" : ""}} " autocomplete="off">
                            <div class="invalid-feedback">
                                {{$errors->first('kelas')}}
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            {{-- <input type="text" name="kelas" class="form-control" autocomplete="off"> --}}
                            <select class="form-control {{$errors->first('kelas') ? "is-invalid" : ""}} " value="{{ old('kelas')}}" name="kelas" required="">
                                <option value="">----- Pilih Kelas -----</option>
                                <option value="XAKL">X AKL</option>
                                <option value="XOTKP">X OTKP</option>
                                <option value="XRPL">X RPL</option>
                                <option value="XBOGA">X BOGA</option>
                                <option value="XIAKL1">XI AKL1</option>
                                <option value="XIAKL2">XI AKL2</option>
                                <option value="XIOTKP">XI OTKP</option>
                                <option value="XIRPL">XI RPL</option>
                                <option value="XIBOGA">XI BOGA</option>
                                <option value="XIIAKL">XII AKL</option>
                                <option value="XIIOTKP1">XII OTKP1</option>
                                <option value="XIIOTKP2">XII OTKP2</option>
                                <option value="XIIRPL">XII RPL</option>
                                <option value="XIIBOGA">XII BOGA</option>
                            </select>
                            <div class="invalid-feedback">
                                {{$errors->first('kelas')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control {{$errors->first('alamat') ? "is-invalid" : ""}} "  value="{{ old('alamat')}}" autocomplete="off">
                            <div class="invalid-feedback">
                                {{$errors->first('alamat')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="detail_pembayaran">pembayaran</label>
                            <input type="text" name="detail_pembayaran" class="form-control {{$errors->first('detail_pembayaran') ? "is-invalid" : ""}} "  value="{{ old('detail_pembayaran')}}" autocomplete="off">
                            <div class="invalid-feedback">
                                {{$errors->first('detail_pembayaran')}}
                            </div>
                            <p class="text-muted">Contoh : <b>24/4/2021</b></p>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="{{ route('siswa.index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
