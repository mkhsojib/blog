@extends('layouts.template')
    
@section('title', 'Add New Blog Post')
    
@section('content')
  <div class="row">
    <a href="{{ URL::to('/') }}">Go to Home</a>
  </div>
  <h1>Add New Blog Post</h1>
  <div class="col-sm-8 col-sm-offset-2">

    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">


      {{ csrf_field() }}

      
      <div class="form-group">
        <label for="title">Title:</label>
        <input name="title" type="text" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="body">Body:</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" name="images" id="exampleInputFile">

      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a class="btn btn-default pull-right" href="{{ route('blogs.index') }}">Go Back</a>
    </form>
  </div>
@endsection