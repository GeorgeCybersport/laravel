@foreach($news as $key=>$item)
    <h3><a href="{{route("categories.single", $key)}}">{{$key}}</a></h3>

    <ul>
        @foreach($item as $newsKey=>$singleItem)
            <li><a href="{{route("news.single", $newsKey)}}">{{$singleItem}}</a></li>
        @endforeach
    </ul>
@endforeach
