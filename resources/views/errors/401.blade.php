@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12 text-center">
                        <div class="alert alert-danger">
                          <h1>401</h1>
                          <h4>{{$exception->getMessage()}}</h4>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
