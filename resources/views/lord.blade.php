@extends('layout')

@section('content')
    <h1>Князь {{$lord->name}}, якому служили:</h1>
    <div class="column-container">
        @foreach($lord->boyars as $boyar)
            <a class="link" href="http://127.0.0.1:8000/boyar/{{$boyar->id}}">{{$boyar->name}}</a>
        @endforeach
    </div>
    <a class="link" id="to_start" href="http://127.0.0.1:8000/principalities">Назад до князівств -></a>
@endsection
