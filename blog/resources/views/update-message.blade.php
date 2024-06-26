@extends('layouts.app')


@section('title-block')
    Обновление записей
@endsection

@section('content')
    <h1>Обновить</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form action="{{route('contact-update-submit', $data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name"></label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="введите имя" id="name"
                   class="form-control">
        </div>

        <div class="form-group">
            <label for="email"></label>
            <input type="text" name="email" value="{{$data->email}}" placeholder="введите email" id="email"
                   class="form-control">
        </div>

        <div class="form-group">
            <label for="subject"></label>
            <input type="text" name="subject" value="{{$data->subject}}" placeholder="введите тему сообщения"
                   id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message"></label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщения" cols="30"
                      rows="10">{{$data->message}}</textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>

@endsection


