@extends('index')
@section('content')
    <form method="POST" action="{{route('orders.store')}}">
        @csrf
        <div class="form-group mt-3">
            <label for="name">Введите имя</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}" id="name" placeholder="Имя">
        </div>
        <div class="form-group mt-3">
            <label for="phone">Введите номер телефона</label>
            <input class="form-control" type="text" name="phone" value="{{ old('phone') }}" id="phone"
                   placeholder="Номер телефона">
        </div>
        <div class="form-group mt-3">
            <label for="email">Введите email</label>
            <input class="form-control" type="email" value="{{ old('email') }}" name="email" id="email"
                   placeholder="email">
        </div>
        <div class="form-group mt-3">
            <label for="info">Что хотите купить?</label>
            <textarea class="form-control" name="info" value="{{ old('info') }}" id="info" placeholder="Информация"
                      cols="30"
                      rows="10"></textarea><br/>
        </div>
        <input class="btn btn-success" type="submit">
    </form>
    @if ($errors->any())
        <div>
            <div class="font-medium text-red-600">
                {{ __('Whoops! Something went wrong.') }}
            </div>

            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
