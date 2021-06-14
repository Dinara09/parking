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

    <form method="post"  action="/create/addClient">
        @csrf
        <input type="text" name="name" placeholder="Введите ФИО..." class="form-control" id="name">
        <input type="tel" name="telNumber" placeholder="Введите номер телефона..." class="form-control" id="telNumber">
        <input type="text" name="address" placeholder="Введите адрес..." class="form-control" id="address">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex" id="sexMale" value="sexMale">
            <label class="form-check-label" for="sexMale">М</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex" id="sexFemale" value="sexFemale">
            <label class="form-check-label" for="sexFemale">Ж</label>
        </div>
        <br><a class="btn btn-primary" href="#linkToCarForm">Заполнить информацию о автомобилях</a></br>
        <br><button type="submit" class="btn btn-success">Сохранить</button></br>


    <div id="linkToCarForm"><h1>Автомобили</h1></div>
        <input type="text" name="brand" placeholder="Введите наименование бренда..." class="form-control" id="brand">
        <input type="text" name="model" placeholder="Введите наименование модели..." class="form-control"  id="model">
        <input type="text" name="bodyColor" placeholder="Введите цвет кузова..." class="form-control" id="bodyColor">
        <input type="text" name="number" placeholder="Введите номер автомобиля..." class="form-control" id="number">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="isParkedCar" id="isParkedCar" value="isParked">
            <label class="form-check-label" for="isParkedCar">Отметить, если машина на парковке</label>
        </div>
{{--        <br><button type="submit" class="btn btn-success">Сохранить</button></br>--}}
    <br><a class="btn btn-primary" href="#linkToClientForm">Сохранить</a></br>
    </form>
@endsection
