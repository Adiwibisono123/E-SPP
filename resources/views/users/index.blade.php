@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif    

            <div class="row">
                <div class="col-md-6 mt-5">
                <form action="{{route('users.index')}}">
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
            {{-- button create --}}
            <div class="row">
                <div class="col-md-12 text-right">
                    <a 
                    href="{{route('users.create')}}" 
                    class="btn btn-primary"><i class="fas fa-plus"></i> Tambah user</a>
                </div>
            </div>
            <br>
            {{-- end button create --}}

            <div class="card mt-5">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="text-center">
                          <tr>
                            <th><b>Name</b></th>
                            <th><b>Username</b></th>
                            <th><b>Email</b></th>
                            <th><b>Avatar</b></th>
                            <th><b>Action</b></th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
                          @foreach($users as $user)
                            <tr>
                              <td>{{$user->name}}</td>
                              <td>{{$user->username}}</td>
                              <td>{{$user->email}}</td>
                              <td>
                                @if($user->avatar)
                                  <img src="{{asset('storage/'.$user->avatar)}}" width="70px"/> 
                                @else 
                                  N/A
                                @endif
                  
                              </td>
                              <td>
                                <a class="btn btn-info text-white btn-sm" href="{{route('users.edit', [$user->id])}}">Edit</a>
                                <a href="{{route('users.show', [$user->id])}}" 
                                   class="btn btn-primary btn-sm">Detail</a>
                                <form 
                                    onsubmit="return confirm('Delete this user permanently?')" 
                                    class="d-inline" 
                                    action="{{route('users.destroy', [$user->id])}}" 
                                    method="POST">

                                        @csrf

                                        <input 
                                        type="hidden" 
                                        name="_method" 
                                        value="DELETE">

                                        <input 
                                        type="submit" 
                                        value="Delete" 
                                        class="btn btn-danger btn-sm">
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
