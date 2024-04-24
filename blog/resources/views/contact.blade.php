@extends('layouts.app')


@section('title-block')
    Страница контактов
@endsection

@section('content')
    <h1>Contact</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form action="{{ route('contact-form') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label for="name"></label>
            <input type="text" name="name" placeholder="Как вас зовут?" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email"></label>
            <input type="email" name="email" placeholder="Укажите вашу почту" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject"></label>
            <input type="text" name="subject" placeholder="Укажите тему обращения" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message"></label>
            <textarea name="message" id="message" class="form-control" placeholder="Напишите ваше сообщение" cols="30"
                      rows="10"></textarea>
        </div>

        <br>
        <button type="submit" class="btn btn-success">Отправить</button>

    </form>

@endsection


