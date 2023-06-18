@extends('layout')

@section('content')
    <h1>Князівства Київської русі</h1>
    <div class="column-container">
    @foreach($principalities as $principality)
        <a class="link" href="http://127.0.0.1:8000/principality/{{$principality->id}}">{{$principality->name}}</a>
        @endforeach
    </div>
@endsection
