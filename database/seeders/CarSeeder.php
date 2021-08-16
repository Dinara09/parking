<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert(
            [
                'brand' => 'Hyundai',
                'model' => 'Accent',
                'bodyColor' => 'Серый',
                'number' => 'A894MM134',
                'isParkedCar' => 0,
                'clientId' => 6
            ]);
        DB::table('cars')->insert([
                'brand' => 'Hyundai',
                'model' => 'Accent',
                'bodyColor' => 'Красный',
                'number' => 'M893EE134',
                'isParkedCar' => 0,
                'clientId' => 1
            ]);
        DB::table('cars')->insert([
                'brand' => 'Hyundai',
                'model' => 'Accent',
                'bodyColor' => 'Белый',
                'number' => 'M866EE134',
                'isParkedCar' => 1,
                'clientId' => 2
            ]);
        DB::table('cars')->insert([
                'brand' => 'Hyundai',
                'model' => 'Solaris',
                'bodyColor' => 'Серый',
                'number' => 'A234OB134',
                'isParkedCar' => 0,
                'clientId' => 3
            ]);
        DB::table('cars')->insert([
                'brand' => 'Hyundai',
                'model' => 'Solaris',
                'bodyColor' => 'Серый',
                'number' => 'M532XX134',
                'isParkedCar' => 1,
                'clientId' => 4
            ]);
        DB::table('cars')->insert([
                'brand' => 'Hyundai',
                'model' => 'Sonata',
                'bodyColor' => 'Черный',
                'number' => 'O843MM134',
                'isParkedCar' => 0,
                'clientId' => 5
            ]);
        DB::table('cars')->insert([
                'brand' => 'Hyundai',
                'model' => 'Sonata',
                'bodyColor' => 'Синий',
                'number' => 'A030PO134',
                'isParkedCar' => 1,
                'clientId' => 6
            ]);
        DB::table('cars')->insert([
                'brand' => 'Hyundai',
                'model' => 'Creta',
                'bodyColor' => 'Красный',
                'number' => 'O311KK134',
                'isParkedCar' => 1,
                'clientId' => 7
            ]);
        DB::table('cars')->insert([
                'brand' => 'Hyundai',
                'model' => 'Creta',
                'bodyColor' => 'Красный',
                'number' => 'P734PA134',
                'isParkedCar' => 0,
                'clientId' => 8
            ]);
        DB::table('cars')->insert([
                'brand' => 'Hyundai',
                'model' => 'Accent',
                'bodyColor' => 'Серый',
                'number' => 'B119OA134',
                'isParkedCar' => 1,
                'clientId' => 9
            ]);
        DB::table('cars')->insert([
                'brand' => 'Kia',
                'model' => 'Ceed',
                'bodyColor' => 'Белый',
                'number' => 'T213XX134',
                'isParkedCar' => 0,
                'clientId' => 10
            ]);
        DB::table('cars')->insert([
                'brand' => 'Kia',
                'model' => 'Ceed',
                'bodyColor' => 'Серый',
                'number' => 'A001AA134',
                'isParkedCar' => 0,
                'clientId' => 1
            ]);
        DB::table('cars')->insert([
                'brand' => 'Kia',
                'model' => 'Rio',
                'bodyColor' => 'Белый',
                'number' => 'C123OO134',
                'isParkedCar' => 0,
                'clientId' => 12
            ]);
        DB::table('cars')->insert([
                'brand' => 'Kia',
                'model' => 'Rio',
                'bodyColor' => 'Черный',
                'number' => 'C453CA134',
                'isParkedCar' => 0,
                'clientId' => 13
            ]);
        DB::table('cars')->insert([
                'brand' => 'Kia',
                'model' => 'Rio',
                'bodyColor' => 'Белый',
                'number' => 'O653CO134',
                'isParkedCar' => 0,
                'clientId' => 14
            ]);
        DB::table('cars')->insert([
                'brand' => 'Kia',
                'model' => 'Rio',
                'bodyColor' => 'Серый',
                'number' => 'E154ET134',
                'isParkedCar' => 0,
                'clientId' => 15
            ]);
        DB::table('cars')->insert([
                'brand' => 'Kia',
                'model' => 'Cerato',
                'bodyColor' => 'Красный',
                'number' => 'E012HK134',
                'isParkedCar' => 0,
                'clientId' => 16
            ]);
        DB::table('cars')->insert([
                'brand' => 'Kia',
                'model' => 'Cerato',
                'bodyColor' => 'Серый',
                'number' => 'P501PP134',
                'isParkedCar' => 0,
                'clientId' => 17
            ]);
        DB::table('cars')->insert([
                'brand' => 'BMW',
                'model' => 'X1',
                'bodyColor' => 'Белый',
                'number' => 'H721HH134',
                'isParkedCar' => 0,
                'clientId' => 18
            ]);
        DB::table('cars')->insert([
                'brand' => 'BMW',
                'model' => 'X1',
                'bodyColor' => 'Синий',
                'number' => 'X312OP134',
                'isParkedCar' => 0,
                'clientId' => 19
            ]);
        DB::table('cars')->insert([
                'brand' => 'BMW',
                'model' => 'X5',
                'bodyColor' => 'Синий',
                'number' => 'O007XA134',
                'isParkedCar' => 1,
                'clientId' => 20
            ]);
        DB::table('cars')->insert([
                'brand' => 'Renault',
                'model' => 'Arkana',
                'bodyColor' => 'Коричневый',
                'number' => 'A982XA134',
                'isParkedCar' => 1,
                'clientId' => 21
            ]);
        DB::table('cars')->insert([
                'brand' => 'Renault',
                'model' => 'Arkana',
                'bodyColor' => 'Серый',
                'number' => 'P345CE134',
                'isParkedCar' => 1,
                'clientId' => 22
            ]);
        DB::table('cars')->insert([
                'brand' => 'Renault',
                'model' => 'Kaptur',
                'bodyColor' => 'Серый',
                'number' => 'C156TB134',
                'isParkedCar' => 0,
                'clientId' => 23
            ]);
        DB::table('cars')->insert([
                'brand' => 'Renault',
                'model' => 'Kaptur',
                'bodyColor' => 'Серый',
                'number' => 'X534XT134',
                'isParkedCar' => 1,
                'clientId' => 24
            ]);
        DB::table('cars')->insert([
                'brand' => 'Renault',
                'model' => 'Kaptur',
                'bodyColor' => 'Серый',
                'number' => 'A932AB134',
                'isParkedCar' => 0,
                'clientId' => 25
            ]);
        DB::table('cars')->insert([
                'brand' => 'Renault',
                'model' => 'Logan',
                'bodyColor' => 'Серый',
                'number' => 'H784BO134',
                'isParkedCar' => 1,
                'clientId' => 1
            ]);
        DB::table('cars')->insert([
                'brand' => 'Renault',
                'model' => 'Logan',
                'bodyColor' => 'Серый',
                'number' => 'K312KT134',
                'isParkedCar' => 0,
                'clientId' => 2
            ]);
        DB::table('cars')->insert([
                'brand' => 'Renault',
                'model' => 'Logan',
                'bodyColor' => 'Коричневый',
                'number' => 'T523OO134',
                'isParkedCar' => 1,
                'clientId' => 3
            ]);
        DB::table('cars')->insert([
                'brand' => 'Skoda',
                'model' => 'Octavia',
                'bodyColor' => 'Красный',
                'number' => 'A352PO134',
                'isParkedCar' => 0,
                'clientId' => 5
            ]);
        DB::table('cars')->insert([
                'brand' => 'Skoda',
                'model' => 'Octavia',
                'bodyColor' => 'Серый',
                'number' => 'A902AC134',
                'isParkedCar' => 0,
                'clientId' => 6
            ]);
        DB::table('cars')->insert([
                'brand' => 'Skoda',
                'model' => 'Kodiaq',
                'bodyColor' => 'Коричневый',
                'number' => 'K463OK134',
                'isParkedCar' => 0,
                'clientId' => 7
            ]);
        DB::table('cars')->insert([
                'brand' => 'Skoda',
                'model' => 'Kodiaq',
                'bodyColor' => 'Серый',
                'number' => 'A872XE134',
                'isParkedCar' => 1,
                'clientId' => 26
            ]);
    }
}
