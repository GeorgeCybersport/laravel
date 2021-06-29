@extends('index')
@section('content')
    <form method="POST" action="{{route('news.update', $news->id)}}">
        @csrf
        @method('PUT')
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}" @if($category->id == $news->category_id) selected @endif>{{$category->name}}</option>
            @endforeach
        </select><br/>
        <input type="text" name="title" placeholder="Заголовок" value="{{$news->title}}"><br/>
        <textarea name="content" id="content" placeholder="Контент" cols="30" rows="10">{{$news->content}}</textarea><br/>
        <input type="submit">
    </form>
@endsection

