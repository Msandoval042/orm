@extends('layout')
@section('title')
    This is the Cards page
@endsection
@section('content')
    <h1>This is the cards page </h1>
<?php
    $image_url='https://i.ytimg.com/vi/MveqXxB12YA/hqdefault.jpg';
?>
    <ul>
    @foreach($cards as $card)
        <li> <a href="/show/{{$card->id}}">{{ $card->title }} </a></li>
    @endforeach
</ul>

@endsection