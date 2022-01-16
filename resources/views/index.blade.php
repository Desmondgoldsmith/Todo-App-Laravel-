@extends('inc.app')
@extends('inc.nav')
@extends('inc.message')

<br><br>
<div class="container">
    <h1>Todo List</h1>
     <div class="container">
         @if(count($todo)>0)
         @foreach($todo as $todo)
            <div class="card mt-2">
                <h2><a href="todo/{{$todo->id}}">{{$todo->title}}</h2>
                 <!-- <h3>{{$todo->content}}</h3> -->
                  <h4><div class="badge badge-danger">{{$todo->due}}</div></h4>
         </div>
         @endforeach
         @endif
     </div>
</div>