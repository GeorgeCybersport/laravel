@extends('index')
@section('content')
    <h3>Редактирование пользователя - #{{$user->id}}</h3>
    <form method="POST" action="{{route('admin.users.update', $user->id)}}">
        <div class="form-group">
    @csrf
    @method('PUT')
        <label for="name">Никнейм</label>
        <input class="form-control" id="name" type="text" name="name" value="{{$user->name}}"><br>
        <label for="email">Email</label>
        <input class="form-control" id="email" type="email" name="email" value="{{$user->email}}"><br>
        <label for="admin">Роль</label>
        <select class="form-select form-select-lg mb-3" id="admin" name="admin">
            <option value="0" @if($user->admin) selected @endif>Пользователь</option>
            <option value="1" @if($user->admin) selected @endif>Администратор</option>
        </select>
            <br>
            <button class="btn btn-primary">Редактировать</button>
    </div>
    </form>
@endsection
