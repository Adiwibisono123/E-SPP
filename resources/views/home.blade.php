@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 class="text-center mb-5">Selamat datang {{ auth::user()->name}}</h3>
                    <h4 class="text-center">
                        Aplikasi E- SPP dapat membantu mengurus keuangan sekolah anak anda
                    </h4>
                </div>
            </div>
        </div>
        
        <div class="container mt-4">
            <div class="row">
              {{-- <div class="col-sm">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header"><strong>Kelas X</strong></div>
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Spp</h5>
                        <p class="card-text">
                            Rp. 225.000
                        </p>
                    </div>
                </div>
              </div>
              <div class="col-sm">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header"><strong>Kelas XI</strong></div>
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Spp</h5>
                        <p class="card-text">
                            Rp. 220.000
                        </p>
                    </div>
                </div>
              </div>
              <div class="col-sm">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header"><strong>Kelas XII</strong></div>
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Spp</h5>
                        <p class="card-text">
                            Rp. 190.000
                        </p>
                    </div>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
</div>





@endsection
