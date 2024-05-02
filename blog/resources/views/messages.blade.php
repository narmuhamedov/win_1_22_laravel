@extends('layouts.app')
@section('title-block')Все сообщения@endsection

@section('content')
    <h1>Все сообщения</h1>
    @foreach($data as $element)
        <div class="alert alert-info">
            <h2>{{$element->name}}</h2>
            <h3>{{$element->subject}}</h3>
            <p>{{$element->created_at}}</p>
            <a href=""><button class="btn btn-warning">Подробнее</button></a>
        </div>
    @endforeach
@endsection
