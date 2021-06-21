@extends('index')
@section('content')
    <div class="list-group">
        @foreach($orders as $order)
        <div class="list-group-item list-group-item-action mt-3" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$order["name"]}}</h5>
            </div>
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$order["phone"]}}</h5>
            </div>
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$order["email"]}}</h5>
            </div>
            <p class="mb-1">{{$order["info"]}}</p>
        </div>
        @endforeach
    </div>
@endsection
