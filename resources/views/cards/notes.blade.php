@extends('layout')
@section('title')
    This is the Cards page
@endsection
@section('content')
    <h1>This is the cards page </h1>
    <ul>
    @foreach($notes as $note)
        <li>{{ $note->id}}: {{ $note->body}} <strong>related card:</strong>{{ $note->card}}</li>
    @endforeach
</ul>

@endsection