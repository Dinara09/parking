<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ClientController extends Controller
{
    public function edit($id){
        $car = (new \App\Models\Car)->getCarById($id);

        $client = (new \App\Models\Client())->getCarById($car[0] -> clientId);

        return view('edit',['clients'=>$client, 'cars' => $car]);
    }

    public function parkingShowClientCars()
    {
        $note = (new \App\Models\Client())->getAllClients();
        return view('parking', ['note' => $note]);
    }

    public function createAddClient(Request  $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'name' => 'required|min:3',
            'sex' => 'required',
            'telNumber' => 'required|unique:clients',
            'brand' => 'required',
            'model' => 'required',
            'bodyColor' => 'required',
            'number' => 'required|unique:cars',
        ]);

        if ($request->input('inlineRadioOptions') == 'sexMale') {
            $sex = 0;
        } else {
            $sex = 1;
        }

        if ($request->input('isParkedCar') == '1') {
            $isParkedCar = 1;
        } else {
            $isParkedCar = 0;
        }

        $clientsId = (new \App\Models\Client())->addNewData($request, $sex);

        (new \App\Models\Car())->addNewData($request, $isParkedCar, $clientsId);
        return response()->json([
            'message' => 'Запись создана'
        ]);
    }

    public function editSaveChanges(Request  $request, $id){
        $fullName = $request->input('name');
        $telNumber = $request->input('telNumber');
        $address= $request->input('address');
        $brand = $request->input('brand');
        $model= $request->input('model');
        $bodyColor = $request->input('bodyColor');
        $number = $request->input('number');

        if ($request->input('sex') == 'sexMale') {
            $sex = 0;
        } else {
            $sex = 1;
        }

        if ($request->input('isParkedCar') == '1') {
            $isParkedCar = 1;
        } else {
            $isParkedCar = 0;
        }

        $carNote = (new \App\Models\Car())->getCarById($id);
        $clientId = $carNote[0] -> clientId;
        (new \App\Models\Car())->updateData($id, $brand, $model, $bodyColor,
            $number, $isParkedCar, $clientId);

        (new \App\Models\Client())->updateData($clientId, $fullName, $telNumber, $address, $sex);

        return response()->json([
            'message' => 'Запись обновлена',

        ]);
    }
}
