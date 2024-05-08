@extends('layouts.app')
@section('title-block')Подробная информация@endsection

@section('content')
    <h1>Подробная информация</h1>
        <div class="alert alert-info">
            <h2>{{$data->name}}</h2>
            <h3>{{$data->subject}}</h3>
            <h4>{{$data->email}}</h4>
            <p>{{$data->message}}</p>
            <p>{{$data->created_at}}</p>
            <a href="{{ route('contact-update',$data->id) }}">
                <button class="btn btn-primary">Редактировать</button></a>

            <a href="{{ route('contact-delete',$data->id) }}">
                <button class="btn btn-primary">Удалить</button></a>

        </div>

@endsection
