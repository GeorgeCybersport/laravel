@extends('index')
@section('content')
    @foreach($news as $item)
        @foreach($item as $key=>$singleItem)
            @if($key==$id)
                <h1>{{$singleItem}}</h1>
            @endif
        @endforeach
    @endforeach
@endsection
