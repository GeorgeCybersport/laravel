@extends('index')
@section('content')
    <form method="POST" action="{{route('news.store')}}">
        @csrf
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select><br/>
        <input type="text" name="title" placeholder="Заголовок"><br/>
        <textarea name="content" id="content" placeholder="Контент" cols="30" rows="10"></textarea><br/>
        <input type="submit">
    </form>
@endsection

