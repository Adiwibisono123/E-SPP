@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mt-5">
             {{-- <img src="{{asset('image/Logo_Gerindra.svg.png')}}"  height="80px" width="60px" alt="" srcset=""> --}}
            <div class="card mt-5">
                {{-- <div class="card-header">Login<div> --}}
                    

                <div class="card-body">
                    <div class="text-center mb-3">
                        <img src="{{asset('image/logo-skamuhi.png')}}"  height="60px" alt="" srcset="">
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right"></label> --}}

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="Masukan Email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right"></label> --}}

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off" placeholder="Masukan Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mt-5">
                            <div class="col-sm-12">
                                {{-- <button type="submit" class="btn btn-block-primary">
                                    {{ __('Login') }}
                                </button> --}}
                                <button type="submit" class="btn btn-outline-primary btn-block">Login</button>
                                {{-- <p class="text-muted text-center">Belum memiliki akun? Silahkan <a href="{{ route('register') }}">Daftar</a> Sekarang!</p> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
