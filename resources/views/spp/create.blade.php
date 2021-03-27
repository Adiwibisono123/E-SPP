@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">Tambahkan Jumlah Pembayaran Spp Per-Kelas</div>

                <div class="card-body">
                    <form action="{{ url('spp') }}" method="post">
                        @csrf
                        {{-- <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" class="form-control" autocomplete="off">
                        </div> --}}

                        <div class="form-group">
                            <label for="prodi">Kelas</label>
                            {{-- <div class="col-md-6"> --}}
                            <select class="form-control {{$errors->first('kelas') ? "is-invalid" : ""}}" name="kelas" required="">
                                <option value="">----- Pilih Kelas -----</option>
                                <option value="kelas X">Kelas X</option>
                                <option value="kelas XI">Kelas XI </option>
                                <option value="kelas XII">Kelas XII</option>
                            </select>
                            <div class="invalid-feedback">
                                {{$errors->first('kelas')}}
                            </div>
                            {{-- </div>  --}}
                        </div>
                        <div class="form-group">
                            <label for="tempat_bayar">Tempat Pembayaran</label>
                            {{-- <input type="text" name="tempat_bayar" class="form-control" autocomplete="off"> --}}
                            <select class="form-control {{$errors->first('tempat_bayar') ? "is-invalid" : ""}} " name="tempat_bayar" required="">
                                <option value="">----- Tempat Bayar -----</option>
                                <option value="ASB WELERI">ASB WELERI</option>
                            </select>
                            <div class="invalid-feedback">
                                {{$errors->first('tempat_bayar')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_spp">Jumlah Spp</label>
                            <input type="text" name="jumlah_spp" class="form-control {{$errors->first('jumlah_spp') ? "is-invalid" : ""}}" autocomplete="off">
                            <div class="invalid-feedback">
                                {{$errors->first('jumlah_spp')}}
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="{{ route('spp.index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
