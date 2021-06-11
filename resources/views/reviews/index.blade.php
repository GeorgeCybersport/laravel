@extends('index')
@section('content')
    <div class="list-group">
        @foreach($reviews as $review)
            <div class="list-group-item list-group-item-action mt-3" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$review["name"]}}</h5>
                </div>
                <p class="mb-1">{{$review["comment"]}}</p>
            </div>
        @endforeach
    </div>
@endsection
