@extends('layouts.app')

@section('main')

<div class="container pt-5">
  <h2>New Categories</h2>
  <div class="row">
    <div class="col-sm-4">
        <form action="/category-store" method="POST">
            @csrf
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title')}}">
            @if($errors->has('title'))
            <p class="text-danger">{{$errors->first('title')}}</p>
            @endif
            <button class="btn btn-info mt-4" type="submit">Create Category</button>
        </form>
    </div>
  </div>
            
 
</div>

@endsection