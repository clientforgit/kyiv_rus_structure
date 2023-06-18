@extends('layout')

@section('content')
<h1>Князь {{$lord->name}}, яким керувалися такі князівства:</h1>
<div class="column-container">
    @foreach($lord->principalities as $principality)
    <a class="link" href="http://127.0.0.1:8000/principality/{{$principality->id}}">{{$principality->name}}</a>
    @endforeach
</div>
<a class="link" id="to_start" href="http://127.0.0.1:8000/principalities">Назад до князівств -></a>
@endsection
