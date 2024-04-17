@extends('layouts.app')

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* Дополнительные стили для рамки */
    .title-border {
        border: 2px solid #007bff; /* Цвет рамки - синий */
        border-radius: 10px; /* Скругление углов */
        padding: 10px; /* Внутренний отступ */
    }
</style>
@section('title-block')
    Страница о нас
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title-border">
                    <h1>О нас</h1>
                </div>
            </div>
        </div>
    </div>
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
