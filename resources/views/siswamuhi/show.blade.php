@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <div class="col-md-12">
                        <div class="card">
                          <div class="card-body text-center">
                              <h3 class="text-center">Detail Data Siswa</h3><br>
                            <b>Nomor Induk Siswa:</b> <br/>
                            {{$siswa->NIS}}
                            <br><br>
                    
                            {{-- @if($siswa->avatar)
                              <img src="{{asset('storage/'. $siswa->avatar)}}" width="128px"/>
                            @else 
                              No avatar
                            @endif  --}}
                    
                            <br>
                            <b>Nama :</b><br>
                            {{$siswa->nama}}
                            <br>

                            <br>
                            <b>email :</b><br>
                            {{$siswa->email}}
                    
                            <br>
                            <br>
                            <b>Kelas</b> <br>
                            {{$siswa->kelas}}
                    
                            <br><br>
                            <b>Alamat</b> <br>
                            {{$siswa->alamat}}
                    


                            <br><br>
                            <b>Histori Pembayaran</b> <br>
                            {{$siswa->detail_pembayaran}}


                            <br>
                            <br>
                            {{-- <b>Roles:</b> <br>
                                @foreach (json_decode($siswa->roles) as $role)
                                    &middot; {{$role}} <br>
                                @endforeach --}}
                                <a href="{{ route('siswamuhi.index') }}" class="btn btn-primary mt-3">Kembali</a>

                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
