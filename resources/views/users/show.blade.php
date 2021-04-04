@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <div class="col-md-8">
                        <div class="card">
                          <div class="card-body text-center">
                              <h3 class="text-center">Detail User Hanya bisa di lihat oleh admin</h3>
                            <b>Name:</b> <br/>
                            {{$user->name}}
                            <br><br>
                    
                            {{-- @if($user->avatar)
                              <img src="{{asset('storage/'. $user->avatar)}}" width="128px"/>
                            @else 
                              No avatar
                            @endif  --}}
                    
                            <br>
                            <br>
                            <b>Username:</b><br>
                            {{$user->email}}
                    
                            <br>
                            <br>
                            <b>Phone number</b> <br>
                            {{$user->phone}}
                    
                            <br><br>
                            <b>Address</b> <br>
                            {{$user->address}}
                    
                            <br>
                            <br>
                            <b>Roles:</b> <br>
                                @foreach (json_decode($user->roles) as $role)
                                    &middot; {{$role}} <br>
                                @endforeach
                                <a href="{{ route('users.index') }}" class="btn btn-primary mt-3">Kembali</a>

                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
