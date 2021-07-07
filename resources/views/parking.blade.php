@extends('header')

@section('content')
    <form method="post"  action="/parking/saveChanges">
        @csrf
        <div class="form-group">
            <label for="name">Выберите клиента:</label>
            <select class="form-control" name="client" id="client">
                <option disabled selected>Выберите из списка</option>
                @foreach ( $allClients as $client ) {
                <option value = "{{$client -> id}}">{{$client -> fullName}}</option>--}}
                @endforeach
                }
            </select>
        </div>
        <div class="form-group">
            <label for="name">Автомобиль:</label>
            <select class="form-control" name="car" id="car">
                <option disabled>Выберите автомобиль</option>
            </select>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="parked" id="isParked" value="isParked">
            <label class="form-check-label" for="isParked">Поставить на стоянку</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="parked" id="notParked" value="notParked">
            <label class="form-check-label" for="notParked">Убрать со стоянки</label>
        </div>

        <br><button type="submit" class="btn btn-success">Сохранить</button></br>
    </form>
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

            @foreach($parkedCars  as $item)
                <tr>
                    <td class="text-white" > {{ $item -> fullName }}</td>
                    <td class="text-white" >{{ $item -> brand}} {{$item -> model}}</td>
                    <td class="text-white" >{{ $item -> number}}</td>
                    <td class="text-white" ><a href="/edit/{{ $item-> carId }}"><img src="{{ asset('/public/image/pencil.png')}}"></a></td>
                    <td class="text-white" ><a href="/delete/{{ $item-> carId }}"><img src="{{ asset('/public/image/delete.png')}}"></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$parkedCars->links()}}
    </div>
@endsection
