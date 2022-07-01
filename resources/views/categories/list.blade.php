@extends('layouts.app')

@section('main')

<div class="container pt-5">
  <h2>Categories <a class="btn btn-info" href="/category-create">New Category</a></h2>
  @if(session()->has('success'))
  <div class="alert alert-info" role="alert">
    <strong>{{session()->get('success')}}</strong> 
  </div>
  @endif
            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S. No.</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($categories as $category)
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $category->title }}</td>
        <td>
            <a href="/category-edit/{{$category->id}}" class="btn btn-sm btn-info">Edit</a>
            <a href="/category-delete/{{$category->id}}" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  {{$categories->links()}}
</div>

{{-- <style>
    .btna{
    background-color: rgb(198, 41, 41);
}
</style> --}}
@endsection