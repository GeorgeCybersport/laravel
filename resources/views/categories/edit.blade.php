@extends('index')
@section('content')
    <form method="POST" action="{{route('categories.update', $category->id)}}">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Название" value="{{$category->name}}"><br/>
        <input type="submit">
    </form>
@endsection

