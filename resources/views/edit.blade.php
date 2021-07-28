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
        <form class="form" method="post"  action="/edit/saveChanges/{{$cars[0]-> id}}">
            @csrf
            <input type="text" name="name" placeholder="Введите ФИО..." class="form-control" id="name"
                   value="{{$clients[0]-> fullName}}">
            <input type="tel" name="telNumber" placeholder="Введите номер телефона..." class="form-control" id="telNumber"
                   value="{{$clients[0]-> telNumber}}">
            <input type="text" name="address" placeholder="Введите адрес..." class="form-control" id="address"
                   value="{{$clients[0]-> address}}">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="sexMale" value="sexMale"
                    {{$clients[0]-> sex == 0 ? 'checked' : ''}}>
                <label class="form-check-label" for="sexMale">М</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="sexFemale" value="sexFemale"
                    {{$clients[0]-> sex == 1 ? 'checked' : ''}}>
                <label class="form-check-label" for="sexFemale">Ж</label>
            </div>
            <br><a class="btn btn-primary" href="#linkToCarForm">Заполнить информацию о автомобилях</a></br>

            <br><button type="submit" name="addChanges" class="btn btn-success">Сохранить</button></br>


            <div class="form-wrapper" id="carForm">
                <div id="linkToCarForm"><h1>Автомобили</h1></div>
                <input type="text" name="brand" placeholder="Введите наименование бренда..." class="form-control" id="brand"
                       value="{{$cars[0]-> brand}}">
                <input type="text" name="model" placeholder="Введите наименование модели..." class="form-control"  id="model"
                       value="{{$cars[0]-> model}}">
                <input type="text" name="bodyColor" placeholder="Введите цвет кузова..." class="form-control" id="bodyColor"
                       value="{{$cars[0]-> bodyColor}}">
                <input type="text" name="number" placeholder="Введите номер автомобиля..." class="form-control" id="number"
                       value="{{$cars[0]-> number}}">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="isParkedCar" id="isParkedCar" value="isParked"
                        {{$cars[0]-> isParkedCar == 1 ? 'checked' : ''}}>
                    <label class="form-check-label" for="isParkedCar">Отметить, если машина на парковке</label>
                </div>
            </div>
        </form>
@endsection
