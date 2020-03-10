@extends('layout.app_admin')
 @section('form')
<div class="">
  <form class="form" enctype="multipart/form-data" action="/send_post" method="post">
    <div class="form-group">
        <h3><label class="col-md-12 col-xs-6">Post Title</label></h3>
          <div class="col-md-12">
            <input type="text" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus placeholder="post_title"/>
          </div>
          <div class="text-danger">{{$errors->first('title')}}</div>

    </div>
      <br><br>
    <div class="form-group">
        <h3><label class="col-md-12 col-xs-6">Post Caption</label></h3>
          <div class="col-md-12">
            <input type="text"  name="caption" value="{{ old('title') }}" required autocomplete="title" autofocus placeholder="post_title"/>
          </div>
          <div class="text-danger">{{$errors->first('title')}}</div>
    </div>
    <br>
    <div class="form-group">
        <h3><label class="col-md-12 col-xs-6">Author Name</label></h3>
          <div class="col-md-12">
            <input type="text"  name="author" value="{{ old('author') }}" required autocomplete="author" autofocus placeholder="author_name" />
          </div>
          <div class="text-danger">{{$errors->first('author')}}</div>
    </div>
     <br>

     <div class="form-group">
        <h3><label class="col-md-12 col-xs-6">Post Section</label></h3>
          <div class="col-md-12">
          <select name="post_position">
            <option value="post_main_section">Main Section</option>
            <option value="post_sub_section">Sub-Section</option>
            <option value="post_min_section">Min-section</option>
          </select>
          </div>
          
          <div class="text-danger">{{$errors->first('post_position')}}</div>
    </div>
     <br>

     <div class="form-group">
        <h3><label class="col-md-12 col-xs-6">Post Section Number</label></h3>
          <div class="col-md-12">
          <select name="post_position">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
           
          </select>
          </div>
          
          <div class="text-danger">{{$errors->first('post_position')}}</div>
    </div>
     <br>

     <textarea name="content" rows="8" cols="80" placeholder="What's in your mind"></textarea>
      <br>
        <button type="submit" class="button">Post</button>
  @csrf
  </form>

</div>
@endsection
