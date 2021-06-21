@extends('index')
@section('content')
    <form method="POST" action="{{route('categories.store')}}">
        @csrf
        <input type="text" name="name" placeholder="Название"><br/>
        <input type="submit">
    </form>
@endsection
