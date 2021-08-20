<template>
    <form v-on:submit.prevent="onSubmit">
        <p v-if="Object.keys(this.errors).length">
            <b style="color:red">Пожалуйста исправьте указанные ошибки:</b>
        <ul>
            <li v-for="error in this.errors">{{ error }}</li>
        </ul>
        </p>

        <input v-model="name" type="text" name="name" placeholder="Введите ФИО..." class="form-control" id="name">
        <input v-model="telNumber" type="tel" name="telNumber" placeholder="Введите номер телефона..." class="form-control" id="telNumber">
        <input v-model="address" type="text" name="address" placeholder="Введите адрес..." class="form-control" id="address">
        <div class="form-check form-check-inline">
            <input v-model="sex" class="form-check-input" type="radio" name="sex" id="sexMale" value="sexMale">
            <label class="form-check-label" for="sexMale">М</label>
        </div>
        <div class="form-check form-check-inline">
            <input v-model="sex" class="form-check-input" type="radio" name="sex" id="sexFemale" value="sexFemale">
            <label class="form-check-label" for="sexFemale">Ж</label>
        </div>
        <br><a class="btn btn-primary" href="#linkToCarForm">Заполнить информацию о автомобилях</a>
        <br><button type="submit" class="btn btn-success">Сохранить</button>

        <div id="linkToCarForm"><h1>Автомобили</h1></div>
        <input v-model="brand" type="text" name="brand" placeholder="Введите наименование бренда..." class="form-control" id="brand">
        <input v-model="model" type="text" name="model" placeholder="Введите наименование модели..." class="form-control"  id="model">
        <input v-model="bodyColor" type="text" name="bodyColor" placeholder="Введите цвет кузова..." class="form-control" id="bodyColor">
        <input v-model="number" type="text" name="number" placeholder="Введите номер автомобиля..." class="form-control" id="number">
        <div class="form-check form-check-inline">
            <input v-model="isParkedCar"  class="form-check-input" type="radio" name="isParkedCar" id="isParkedCar" value="1">
            <label class="form-check-label" for="isParkedCar">Отметить, если машина на парковке</label>
        </div>
        <br><a class="btn btn-primary" href="#linkToClientForm">Сохранить</a>
    </form>
</template>
<script>
import Vue from "vue";
export default {
    name: "CreateNote",
    data() {
        return {
            errors: Object,
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
    methods: {
        onSubmit: function(e) {
                axios.post('/create/addClient', {name: this.name, telNumber: this.telNumber,
                    address: this.address, sex: this.sex, brand: this.brand, model: this.model,
                    bodyColor: this.bodyColor, number: this.number, isParkedCar: this.isParkedCar})
                    .catch(error => {
                        alert("Запись не добавлена");
                        this.errors = (error.response.data.errors);
                        console.log(error.response.data.errors.length);
                    }).then(r => {
                    if(Object.keys(this.errors).length=== 0){
                        alert("Запись добавлена");
                    }
                })
        }
    }
}
window.onload = function () {
    let app = new Vue({
        el: '#app',
    });
}
</script>

