<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function getClientsAndCars(){
        return DB::table('cars')
            ->join('clients', 'cars.clientId', '=', 'clients.id')
            ->select('clients.id', 'clients.fullName', 'cars.brand', 'cars.number', 'cars.model', 'cars.id as carId');
    }

    public function getCarById($id)
    {
        return DB::table('cars')
            ->select('brand', 'model', 'bodyColor', 'number', 'isParkedCar', 'clientId', 'id')
            ->where('id', '=', $id)
            ->get();
    }

    public function getParkedCars()
    {
        return DB::table('cars')
            ->join('clients', 'cars.clientId', '=', 'clients.id')
            ->where('cars.isParkedCar', '=', '1')
            ->select('clients.id', 'clients.fullName', 'cars.brand', 'cars.number', 'cars.model', 'cars.id as carId')
            ->paginate(15);
    }

    public function addNewData($request, $isParkedCar, $clientsId)
    {
        return DB::table('cars')->insert([
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'bodyColor' => $request->input('bodyColor'),
            'number' => $request->input('number'),
            'isParkedCar' => $isParkedCar,
            'clientId' => $clientsId
        ]);
    }

    public function updateData($id, $brand, $model, $bodyColor, $number, $isParkedCar, $clientId)
    {
        return DB::table('cars')
            ->where('id', $id)
            ->update(['brand' => $brand,'model' => $model, 'bodyColor' => $bodyColor, 'number' => $number,
                'isParkedCar' => $isParkedCar, 'clientId' => $clientId ]);
    }

    public function deleteData($clientID)
    {
        return DB::table('cars')->where('id', '=', $clientID)->delete();
    }

    public function getClientCars($id)
    {
        //$clientId = htmlspecialchars(trim($clients['id']));
        //if ($clients->has('clientId')) {
            // Строка запроса из базы данных
            return DB::table('cars')
                ->where('clientId', '=', $id)
                ->select('id', 'brand', 'model')
                ->orderBy('model');
        //}
    }
}
