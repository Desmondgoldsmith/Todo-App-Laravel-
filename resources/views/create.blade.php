@extends('inc.app')
@extends('inc.message')

<br><br><br>
<div class="container mt-2">
    <h3>Create Todo</h3>
<form action="/todo" method="POST">
    @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" value="{{old('content')}}" id="title" name="title" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <input type="text" class="form-control" id="content" value="{{old('content')}}" name="content" placeholder="content">
   
  </div>
  <div class="form-group">
    <label for="content">Due</label>
    <input type="text" class="form-control" id="due" name="due" value="{{old('content')}}" placeholder="due">
   
  </div>
  <div class="form-group">
    <button class="btn btn-lg btn-info" type="submit" name="submit">Save</button>
  </div>

</form>
</div>