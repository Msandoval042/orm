@extends('layout')


@section('content')
    <h1>edit the note</h1>
    <form method="POST" action="/notes/{{ $note->id }}">
        {{ method_field('PATCH')}}
        
         <div class="form-group"><textarea name="body" class="form-control">{{ $note->body}}</textarea></div>
         <div class="form-group"><button type="submit" class="btn btn-primary">Update new note</button>
         <a href="/show/{{ $note->card_id}}" class="btn btn-primary">Return Card</a>
         </div>
         
     </form>
@endsection