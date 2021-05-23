
@foreach($categories as $key=>$items)
    @if($key==$id)
        <h1>{{$key}}</h1>
        @foreach($items as $newsKey=>$item)
            <li><a href="{{route("news.single", $newsKey)}}">{{$item}}</a></li>
        @endforeach
    @endif
@endforeach
