@extends('layout.app')

<div class="">
  <form class="form" enctype="multipart/form-data" action="index.html" method="post">
    @section('heading')
    <h2 class="center">Edit Post</h2>
    <div class="form-group">
        <h3><label class="col-md-12 col-xs-6">Post Title</label></h3>
          <div class="col-md-12">
            <input type="text" class="form-control form-control-line" name="date_in" value="{{ old('date_in') }}" required autocomplete="date_in" autofocus placeholder="post_title"/>
          </div>
          <div class="text-danger">{{$errors->first('date_in')}}</div>
    </div>
    @endsection


    @section('date')
     {{date('M, D Y')}}
    @endsection


    @section('author')
    <div class="form-group">
          <div class="col-md-12">
            <input type="text"  name="date_in" value="{{ old('date_in') }}" required autocomplete="date_in" autofocus placeholder="author_name" />
          </div>
          <div class="text-danger">{{$errors->first('date_in')}}</div>
    </div>
    @endsection

    @section('image')
    <div class="form">
      <h1>Post Photo</h1>
      <div class="label">
        <input type="file" name ="image" class="form" required autocomplete="image" autofocus>
      </div>
    </div>
    @endsection


    @section('content')
     <textarea name="name" rows="8" cols="80" placeholder="What's in your mind"></textarea>
    @endsection

  </form>

</div>
