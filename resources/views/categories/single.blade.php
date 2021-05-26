@extends('index')
@section('content')
    @foreach($categories as $key=>$items)
        @if($key==$id)
            <h1>{{$key}}</h1>
            <ul class="list-group">
                @foreach($items as $newsKey=>$item)
                    <li class="list-group-item"><a href="{{route("news.single", $newsKey)}}">{{$item}}</a></li>
                @endforeach
            </ul>
        @endif
    @endforeach
@endsection
