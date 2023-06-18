@extends('layout')

@section('content')
    <h1>Князівство {{$principality->name}}, яким керували:</h1>
    <div class="column-container">
        @foreach($principality->lords as $lord)
            <a class="link" href="http://127.0.0.1:8000/lord/{{$lord->id}}">{{$lord->name}}</a>
        @endforeach
    </div>
    <a class="link" id="to_start" href="http://127.0.0.1:8000/principalities">Назад до князівств -></a>
@endsection
