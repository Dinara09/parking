<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Client;
use Illuminate\Http\Request;
use DB;

class MainController extends Controller{
    public function home(){
        $client = (new \App\Models\Car)->getClientsAndCars()->paginate(15);

        return view('home', ['clients' => $client]);
    }

    public function create(){
        return view('create');
    }

    public function edit($id){
        $car = (new \App\Models\Car)->getCarById($id);

        $client = (new \App\Models\Client())->getCarById($car[0] -> clientId);

        return view('edit',['clients'=>$client, 'cars' => $car]);
    }

    public function parking(){
        $allClients = (new \App\Models\Client())->getAllClients();

        $parkedCars = (new \App\Models\Car)->getParkedCars();

        $note = (new \App\Models\Car())->getClientsAndCars();

        return view('parking', ['parkedCars' => $parkedCars, 'note' => $note,
            'allClients' => $allClients]);
    }

    public function parkingShowClientCars()
    {
        $note = (new \App\Models\Client())->getAllClients();
        return view('parking', ['note' => $note]);
    }

    public function createAddClient(Request  $request)
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

        if ($request->input('inlineRadioOptions1') == '1') {
            $isParkedCar = 1;
        } else {
            $isParkedCar = 0;
        }

        $clientsId = (new \App\Models\Client())->addNewData($request, $sex);

        (new \App\Models\Car())->addNewData($request, $isParkedCar, $clientsId);

        return redirect()->route('create');
    }

    public function editSaveChanges(Request  $request, $id){
        $fullName = $request->input('name');
        $telNumber = $request->input('telNumber');
        $address= $request->input('address');
        $brand = $request->input('brand');
        $model= $request->input('model');
        $bodyColor = $request->input('bodyColor');
        $number = $request->input('number');

        if ($request->input('inlineRadioOptions') == 'sexMale') {
            $sex = 0;
        } else {
            $sex = 1;
        }

        if ($request->input('inlineRadioOptions1') == '1') {
            $isParkedCar = 1;
        } else {
            $isParkedCar = 0;
        }

        $carNote = (new \App\Models\Car())->getCarById($id);
        $clientId = $carNote[0] -> clientId;
        (new \App\Models\Car())->updateData($id, $brand, $model, $bodyColor,
            $number, $isParkedCar, $id);

        (new \App\Models\Client())->updateData($clientId, $fullName, $telNumber, $address, $sex);

        return redirect()->route('edit' , $id);
    }

    public function delete($id){
        $car = (new \App\Models\Car())->getCarById($id);
        $clientId = $car[0] -> clientId;
        (new \App\Models\Car())->deleteData($id);
        (new \App\Models\Client())->deleteData($clientId);

        return redirect()->route('home');
    }

    public function dropDown( $id){
            $cars = (new \App\Models\Car())->getClientCars($id)->get();
            return json_encode($cars);
    }
}
