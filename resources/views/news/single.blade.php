@extends('index')
@section('content')
    <h1>{{$news->title}}</h1>
    <br>
    <p>{{$news->content}}</p>
@endsection
