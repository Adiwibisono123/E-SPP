@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header"><h5 class="text-center">Tambahkan Data Petugas</h5></div>

                <div class="card-body">
                    <form action="{{ url('petugas') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="id_petugas">ID Petugas</label>
                            <input type="number" name="id_petugas" class="form-control {{$errors->first('id_petugas') ? "is-invalid" : ""}} " autocomplete="off">
                            <div class="invalid-feedback">
                                {{$errors->first('id_petugas')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control {{$errors->first('nama') ? "is-invalid" : ""}}" autocomplete="off">
                            <div class="invalid-feedback">
                                {{$errors->first('nama')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No Telpon</label>
                            <input type="number" name="no_telp" class="form-control {{$errors->first('no_telp') ? "is-invalid" : ""}}" autocomplete="off">
                            <div class="invalid-feedback">
                                {{$errors->first('no_telp')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control {{$errors->first('alamat') ? "is-invalid" : ""}}" autocomplete="off">
                            <div class="invalid-feedback">
                                {{$errors->first('alamat')}}
                            </div>
                        </div>
                        
                        {{-- <div class="form-group">
                            <label for="">Roles</label>
                            <br>
                            <input 
                              type="checkbox" 
                              name="roles[]" 
                              id="ADMIN" 
                              value="ADMIN"> 
                              <label for="ADMIN">Administrator</label>
                      
                            <input 
                              type="checkbox" 
                              name="roles[]" 
                              id="STAFF" 
                              value="STAFF"> 
                              <label for="STAFF">Staff</label>
                      
                            <input 
                              type="checkbox" 
                              name="roles[]" 
                              id="CUSTOMER" 
                              value="CUSTOMER"> 
                              <label for="CUSTOMER">Customer</label>
                            <br>
                            <p class="text-muted">*Pilih salah satu</p>
                      
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="{{ route('petugas.index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
