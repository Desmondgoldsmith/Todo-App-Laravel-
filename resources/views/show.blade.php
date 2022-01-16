@extends('inc.app')
@extends('inc.message')

<br><br>
<div class="mx-auto" style="width: 900px;height:0px">
<div class="card">
<h1>🌟{{$todo->title}}🌟</h1>
<h3>{{$todo->content}}</h3>
<h4>{{$todo->due}}</h4>
</div>
<h3><a href="/" class="btn btn-info btn-lg">Back</a>
<a href="/todo/{{$todo->id}}/edit" class="btn btn-warning btn-lg">Update</a></h3>
<form action="/todo/{{$todo->id}}" method="post">
@csrf    
@method('delete')
<button type="submit" name="delete" id="delete" class="btn btn-danger">Delete</button>
</form>
</div>
