@extends('index')
@section('content')
    <form method="POST" action="{{route('reviews.store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}" id="name" placeholder="Имя">
        </div>
        <div class="form-group">
            <label for="comment">Введите текст комментария</label>
            <textarea class="form-control" name="comment" id="comment" value="{{ old('comment') }}" placeholder="Коментарий" cols="30"
                      rows="10"></textarea><br/>
        </div>
        <input class="btn btn-success" type="submit">
    </form>
    @if ($errors->any())
        <div >
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
