@extends('index')
@section('content')
    <ul class="list-group">
        @foreach($categories as $key=>$items)
            <li class="list-group-item"><a href="{{route("categories.single", $key)}}">{{$key}}</a></li>
        @endforeach
    </ul>
@endsection
