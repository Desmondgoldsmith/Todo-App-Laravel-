@extends('inc.app')
@extends('inc.message')

<br><br><br>
<div class="container mt-2">
    <h3>Edit Todo</h3>

<form action="/todo/{{$todo->id}}" method="post">
    @csrf
    @method('put')
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" value="{{$todo->title}}" id="title" name="title" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <input type="text" class="form-control" id="content" value="{{$todo->content}}" name="content" placeholder="content">
   
  </div>
  <div class="form-group">
    <label for="content">Due</label>
    <input type="text" class="form-control" id="due" name="due" value="{{$todo->due}}" placeholder="due">
   
  </div>
  <div class="form-group">
    <button class="btn btn-lg btn-info" type="submit" id="create" name="create">Edit</button>
  </div>

</form>
</div>