@extends('header')

@section('content')
    <!-- форма для добавления записи клиента-->
    <div id="linkToClientForm"><h1>Клиенты</h1></div>
    @if($errors->any())
        <div class = "alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div id="app">
        <edit :clients="{{json_encode($clients[0])}}" :cars="{{json_encode($cars[0])}}"></edit>
    </div>
@endsection
