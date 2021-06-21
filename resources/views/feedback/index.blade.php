@extends('index')
@section('content')
    <h3>Форма обратной связи</h3>
    <form method="POST" action="{{route('categories.store')}}">
        @csrf
        <input type="text" name="name" placeholder="Имя"><br><br>
        <input type="text" name="email" placeholder="Email"><br><br>
        <textarea name="message" placeholder="Текст сообщения"></textarea>
        <input type="submit">
    </form>
@endsection
