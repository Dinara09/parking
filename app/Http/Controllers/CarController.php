<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function dropDown( $id){
        $cars = (new \App\Models\Car())->getClientCars($id)->get();
        return json_encode($cars);
    }

    public function parkingSaveChanges(Request  $request){
        $id = $_POST['car'];
        if ($request->input('parked') == 'isParked') {
            $isParkedCar = 1;
        } else {
            $isParkedCar = 0;
        }
        $carNote = (new \App\Models\Car())->getCarById($id);
        (new \App\Models\Car())->updateData($id, $carNote[0] -> brand, $carNote[0] -> model, $carNote[0] ->
        bodyColor, $carNote[0] -> number, $isParkedCar, $carNote[0] -> clientId);
        return redirect()->route('parking' , $id);
    }
}
