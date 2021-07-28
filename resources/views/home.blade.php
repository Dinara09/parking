@extends('header')

@section('content')
<h1>Все клиенты</h1>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th class="text-white">ФИО</th>
            <th class="text-white">Автомобиль</th>
            <th class="text-white">Номер</th>
            <th class="text-white"></th>
            <th class="text-white"></th>
        </tr>
        </thead>
        <tbody>

        @foreach($clients as $item)
            <tr>
                <td class="text-white" > {{ $item -> fullName }}</td>
                <td class="text-white" >{{ $item -> brand}} {{$item -> model}}</td>
                <td class="text-white" >{{ $item -> number}}</td>
                <td class="text-white" ><a href="/edit/{{ $item-> carId }}"><img src="{{ asset('/image/pencil.png')}}"></a></td>
                <td class="text-white" ><a href="/delete/{{ $item-> carId }}"><img src="{{ asset('/image/delete.png')}}"></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$clients->links()}}
</div>
@endsection
