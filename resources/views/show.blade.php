@extends('master')
@section('content') 

@if ($message= Session::get('success'))
    <div class="alert alert-sucess alert-block">
  <strong> {{$message}} </strong>
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8 mt-8">
        <div class="card p-3">
       <p>{{$product->name}}</p>
       <p>{{$product->description}}</p>
       <img width="100" src="/products/{{$product->image}}" alt="">
      </div>
      </div>
    </div>
</div>
@endsection