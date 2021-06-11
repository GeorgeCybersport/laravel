@extends('index')
@section('content')
    <form method="POST" action="{{route('reviews.store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Имя">
        </div>
        <div class="form-group">
            <label for="comment">Введите текст комментария</label>
            <textarea class="form-control" name="comment" id="comment" placeholder="Коментарий" cols="30"
                      rows="10"></textarea><br/>
        </div>
        <input class="btn btn-success" type="submit">
    </form>
@endsection
