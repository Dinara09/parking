<template>
    <form v-on:submit.prevent="onEdit">
        <input v-model="name"  type="text" name="name" placeholder="Введите ФИО..." class="form-control" id="name">
        <input v-model="telNumber" type="tel" name="telNumber" placeholder="Введите номер телефона..." class="form-control" id="telNumber">
        <input v-model="address" type="text" name="address" placeholder="Введите адрес..." class="form-control" id="address">
        <div  class="form-check form-check-inline">
            <input v-model="sex" class="form-check-input" type="radio" name="sex" id="sexMale" value="0">
            <label class="form-check-label" for="sexMale">М</label>
        </div>
        <div class="form-check form-check-inline">
            <input v-model="sex" class="form-check-input" type="radio" name="sex" id="sexFemale" value="1">
            <label class="form-check-label" for="sexFemale">Ж</label>
        </div>
        <br><a class="btn btn-primary" href="#linkToCarForm">Заполнить информацию о автомобилях</a>

        <br><button type="submit" name="addChanges" class="btn btn-success">Сохранить</button>


        <div class="form-wrapper" id="carForm">
            <div id="linkToCarForm"><h1>Автомобили</h1></div>
            <input v-model="brand" type="text" name="brand" placeholder="Введите наименование бренда..." class="form-control" id="brand">
            <input v-model="model" type="text" name="model" placeholder="Введите наименование модели..." class="form-control"  id="model">
            <input v-model="bodyColor" type="text" name="bodyColor" placeholder="Введите цвет кузова..." class="form-control" id="bodyColor">
            <input v-model="number" type="text" name="number" placeholder="Введите номер автомобиля..." class="form-control" id="number">
            <div class="form-check form-check-inline">
                <input v-model="isParkedCar" class="form-check-input" type="radio" name="isParkedCar" id="isParkedCar" value="1">
                <label class="form-check-label" for="isParkedCar">Отметить, если машина на парковке</label>
            </div>
        </div>
    </form>
</template>
<script>

import Vue from "vue";
export default {
    name: "EditNote",
    props: {
        clients: Object,
        cars: Object
    },
    data() {
        return {
            name: '',
            telNumber: '',
            address: '',
            sex: '',
            brand: '',
            model: '',
            bodyColor: '',
            number: '',
            isParkedCar: '',
        }
    },
    mounted() {
        this.name = this.clients.fullName;
        this.telNumber = this.clients.telNumber;
        this.address = this.clients.address;
        this.sex = this.clients.sex;
        this.brand = this.cars.brand;
        this.model = this.cars.model;
        this.bodyColor = this.cars.bodyColor;
        this.number = this.cars.number;
        this.isParkedCar = this.cars.isParkedCar;
    },
    methods: {
        onEdit: function() {
            axios.post('/edit/saveChanges/' + this.cars.id, {name: this.name, telNumber: this.telNumber,
                address: this.address, sex: this.sex, brand: this.brand, model: this.model,
                bodyColor: this.bodyColor, number: this.number, isParkedCar: this.isParkedCar}).then(r => this)
                .catch(error => {
                    console.error(error.response.data)
                }).then();

        }
    }
}
window.onload = function () {
    let app = new Vue({
        el: '#app',
    });
}
</script>
