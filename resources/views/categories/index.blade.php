
@foreach($categories as $key=>$items)
    <a href="{{route("categories.single", $key)}}">{{$key}}</a>
@endforeach
