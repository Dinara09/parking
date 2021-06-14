<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use DB;

class MainController extends Controller{
    public function home(){
        $client = DB::table('cars')
            ->join('clients', 'cars.clientId', '=', 'clients.id')
            ->select('clients.id', 'clients.fullName', 'cars.brand', 'cars.number', 'cars.model', 'cars.id as carId')->paginate(15);

        return view('home', ['clients' => $client]);
    }

    public function create(){
        return view('create');
    }

    public function edit($id){
        $car = DB::table('cars')
            ->select('brand', 'model', 'bodyColor', 'number', 'isParkedCar', 'clientId', 'id')
            ->where('id', '=', $id)
            ->get();

        $client = DB::table('clients')
            ->select('fullName', 'telNumber', 'address', 'sex', 'id')
            ->where('id', '=', $car[0] -> clientId)
            ->get();

        return view('edit',['clients'=>$client, 'cars' => $car]);
    }

    public function parking(){
        $allClients = DB::table('cars')
            ->join('clients', 'cars.clientId', '=', 'clients.id')
            ->select('clients.id', 'clients.fullName', 'cars.brand', 'cars.number', 'cars.model', 'cars.id as carId')
            ->get();

        $parkedCars = DB::table('cars')
            ->join('clients', 'cars.clientId', '=', 'clients.id')
            ->where('cars.isParkedCar', '=', '1')
            ->select('clients.id', 'clients.fullName', 'cars.brand', 'cars.number', 'cars.model', 'cars.id as carId')
            ->paginate(15);

        $note = DB::table('cars')
            ->join('clients', 'cars.clientId', '=', 'clients.id')
//            ->where('clients.id', '=', )
            ->select('clients.id', 'clients.fullName', 'cars.brand', 'cars.number', 'cars.model', 'cars.id as carId')
            ->get();

        return view('parking', ['parkedCars' => $parkedCars, 'note' => $note,
            'allClients' => $allClients]);
    }

    public function parkingShowClientCars($fullName)
    {
        $note = DB::table('cars')
            ->join('clients', 'cars.clientId', '=', 'clients.id')
            ->select('clients.id', 'clients.fullName', 'cars.brand', 'cars.number', 'cars.model', 'cars.id as carId');
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

        $clientsId = DB::table('clients')->insertGetId([
            'fullName' => $request->input('name'),
            'telNumber' => $request->input('telNumber'),
            'address' => $request->input('address'),
            'sex' => $sex,
        ]);

        DB::table('cars')->insert([
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'bodyColor' => $request->input('bodyColor'),
            'number' => $request->input('number'),
            'isParkedCar' => $isParkedCar,
            'clientId' => $clientsId
        ]);


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
        $clientId = $request->input('clientId');

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

        $carNote = DB::table('cars')
            ->select('brand', 'model', 'bodyColor', 'number', 'isParkedCar', 'clientId', 'id')
            ->where('id', '=', $id)
            ->get();

        DB::table('cars')
            ->where('id', $id)
            ->update(['brand' => $brand,'model' => $model, 'bodyColor' => $bodyColor, 'number' => $number,
                'isParkedCar' => $isParkedCar, 'clientId' =>  $carNote[0] -> clientId ]);

        DB::table('clients')
            ->where('id', $clientId)
            ->update(['fullName' => $fullName,'telNumber' => $telNumber, 'address' => $address, 'sex' => $sex]);


        return redirect()->route('edit');

    }

    public function delete($id){
        $car = DB::table('cars')
            ->select('*')
            ->where('id', '=', $id)
            ->get();
        DB::table('cars')->where('id', '=', $id)->delete();
        DB::table('clients')->where('id', '=', '$car -> clientId')->delete();
        return redirect()->route('home');
    }
}
