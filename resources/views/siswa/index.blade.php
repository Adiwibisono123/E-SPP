@extends('layouts.master')

@section('content')
<div class="container">



            <section class="section">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12  mb-4">
                    <div class="card card-statistic-2">
                      <div class="card-stats">
                      </div>
                      <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-user-graduate mt-3"></i>
                      </div>
                      <div class="card-wrap">
                        <div class="card-header">
                          <h4>Total Siswa</h4>
                        </div>
                        <div class="card-body">
                          {{ $siswa->count()}}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                  </div>
                </div>
              </section>




          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
          <div class="row">
            <div class="col-md-6 mt-5">
            <form action="{{route('siswa.index')}}">
                <div class="input-group mb-3">
                <input
                    value="{{Request::get('keyword')}}" 
                    name="keyword" 
                    class="form-control col-md-10 mr-3" 
                    type="text"
                    placeholder="Filter berdasarkan email"/>
        
                    <div class="input-group-append">
                        {{-- <input type="submit" value="Cari" class="btn btn-primary"> --}}
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"> Cari</i></button>
                    </div>
                </div>
            </form>
            </div>
        </div>  
          <div class="text-right mt-3"> 
            <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-4"><b>+ Tambah</b></a>
          </div>
            <div class="card">
                <div class="card-header">Daftar Siswa </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Kelas</th>
                                <th>Alamat</th>
                                <th>Status Pembayaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($siswa as $siswa)
                            <tr>
                                <td>{{ $row++ }}</td>
                                <td>{{ $siswa->NIS }}</td>
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $siswa->email }}</td>
                                <td>{{ $siswa->kelas }}</td>
                                <td>{{ $siswa->alamat }}</td>
                                <td></td>
                                <td>
                                    <form action="{{ url('siswa',$siswa->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ url('siswa/'.$siswa->id.'/show') }}" class="btn btn-warning">Detail</a>
                                        <a href="{{ url('siswa/'.$siswa->id.'/edit') }}" class="btn btn-primary">Edit</a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?')">Hapus</button>
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


  <script>
      $("document").ready(function() {
      setTimeout(function() {
        $("div.alert-success").remove();
      }. 2 ); //3sec
    })
  </script>

