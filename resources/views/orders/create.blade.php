@extends('index')
@section('content')
    <form method="POST" action="{{route('orders.store')}}">
        @csrf
        <div class="form-group mt-3">
            <label for="name">Введите имя</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Имя">
        </div>
        <div class="form-group mt-3">
            <label for="phone">Введите номер телефона</label>
            <input class="form-control" type="text" name="phone" id="phone" placeholder="Номер телефона">
        </div>
        <div class="form-group mt-3">
            <label for="email">Введите email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="email">
        </div>
        <div class="form-group mt-3">
            <label for="info">Что хотите купить?</label>
            <textarea class="form-control" name="info" id="info" placeholder="Информация" cols="30"
                      rows="10"></textarea><br/>
        </div>
        <input class="btn btn-success" type="submit">
    </form>
@endsection
