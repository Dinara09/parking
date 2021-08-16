<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert(
            [
                'fullName' => 'Макаров Мартин Адольфович',
                'sex' => 0,
                'telNumber' => '+79046745456',
                'address' => 'Хорошева 2 34'
            ]);
        DB::table('clients')->insert(
            [
                'fullName' => 'Калашников Арнольд Агафонович',
                'sex' => 0,
                'telNumber' => '+79062378943',
                'address' => 'Бакинская 15 67'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Субботин Геннадий Григорьевич',
                'sex' => 0,
                'telNumber' => '+79083476521',
                'address' => 'Московская 34 113'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Егоров Наум Яковлевич',
                'sex' => 0,
                'telNumber' => '+79046123567',
                'address' => 'Киевская 4 25'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Богданов Вениамин Федосеевич',
                'sex' => 0,
                'telNumber' => '+79041458788',
                'address' => 'Еременко 67 54'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Макаров Кассиан Арсеньевич',
                'sex' => 0,
                'telNumber' => '+79024561345',
                'address' => 'Солнечная 100 305'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Ефремов Мечеслав Артёмович',
                'sex' => 0,
                'telNumber' => '+79616683456',
                'address' => 'Магнитная 12Б 105'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Моисеев Кондратий Юрьевич',
                'sex' => 0,
                'telNumber' => '+79617845643',
                'address' => 'Географическая 2'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Бобылёв Абрам Донатович',
                'sex' => 0,
                'telNumber' => '+79042765453',
                'address' => 'Мира 10 78'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Фокин Велор Кириллович',
                'sex' => 0,
                'telNumber' => '+79067843456',
                'address' => 'Танкистов 1 102'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Родионов Тимур Тимофеевич',
                'sex' => 0,
                'telNumber' => '+79066749043',
                'address' => 'Мирная 34 102'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Пестов Эдуард Германович',
                'sex' => 0,
                'telNumber' => '+79043671122',
                'address' => 'Прямая 3 56'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Большаков Аверкий Филиппович',
                'sex' => 0,
                'telNumber' => '+79048943443',
                'address' => 'Хрустальная 7 112'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Симонов Александр Станиславович',
                'sex' => 0,
                'telNumber' => '+79089131212',
                'address' => 'Жукова 3 76'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Карпов Глеб Тарасович',
                'sex' => 0,
                'telNumber' => '+79086452344',
                'address' => 'Жукова 1 34'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Сафонова Илона Лукьевна',
                'sex' => 0,
                'telNumber' => '+79047832231',
                'address' => 'Хорошово 10 78'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Белозёрова Нинна Петровна',
                'sex' => 1,
                'telNumber' => '+79049846755',
                'address' => 'Швейная 5 43'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Зимина Диана Игнатьевна',
                'sex' => 1,
                'telNumber' => '+79063425654',
                'address' => 'Мартовская 3 44'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Сафонова Ульна Михайловна',
                'sex' => 1,
                'telNumber' => '+79082451209',
                'address' => 'Московская 10 90'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Чернова Розалина Игнатьевна',
                'sex' => 1,
                'telNumber' => '+79067844325',
                'address' => '30-летия Победы бульвар 3 44'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Романова Алла Филипповна',
                'sex' => 1,
                'telNumber' => '+79067841190',
                'address' => 'Абрикосовая 4 56'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Козлова Сабина Семёновна',
                'sex' => 1,
                'telNumber' => '+79048933309',
                'address' => 'Белгородская 6 79'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Зыкова Полина Глебовна',
                'sex' => 1,
                'telNumber' => '+79081347854',
                'address' => 'Батурская 2 89'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Сысоева Сабрина Юрьевна',
                'sex' => 1,
                'telNumber' => '+79089036743',
                'address' => 'Баумана 10 203'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Лукина Дарина Андреевна',
                'sex' => 1,
                'telNumber' => '+79047643231',
                'address' => 'Венская 1 67'
            ]);
        DB::table('clients')->insert([
                'fullName' => 'Большакова Агния Максовна',
                'sex' => 1,
                'telNumber' => '+79069836731',
                'address' => 'Газовая 8 98'
            ]);
    }
}
