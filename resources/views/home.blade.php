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
    </div>
</div>
@endsection
