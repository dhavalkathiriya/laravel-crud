@extends('master')
@section('content') 

@if ($message= Session::get('success'))
    <div class="alert alert-sucess alert-block">
  <strong> {{$message}} </strong>
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <div class="card mt-3 p-3">
        <form action="/{{$product->id}}/update" method="post" enctype="multipart/form-data">
            <h1>Product edit {{$product->id}}</h1>
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" 
            class="form-control" 
            value="{{old('name',$product->name)}}">

            @if ($errors->has('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
            @endif
          </div>

          <div class="form-group">
            <label for="">Description</label>
            <textarea rows="4" name="description" class="form-control">{{old('description',$product->description)}}</textarea>
            @if ($errors->has('description'))
            <span class="text-danger">{{$errors->first('description')}}</span>
        @endif
          </div>

          <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control">
            @if ($errors->has('image'))
            <span class="text-danger">{{$errors->first('image')}}</span>
        @endif
          </div>

       <button type="submit" class="btn btn-dark">Submit</button>
        </form>
      </div>
      </div>
    </div>
</div>
@endsection
