<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Client;
use DB;

class MainController extends Controller{
    public function home(){
        $client = (new Car)->getClientsAndCars()->paginate(15);

        return view('home', ['clients' => $client]);
    }

    public function create(){
        return view('create');
    }

    public function parking(){
        $allClients = (new Client())->getAllClients();

        $parkedCars = (new Car)->getParkedCars();

        $note = (new Car())->getClientsAndCars();

        return view('parking', ['parkedCars' => $parkedCars, 'note' => $note,
            'allClients' => $allClients]);
    }

    public function delete($id){
        $car = (new Car())->getCarById($id);
        $clientId = $car[0] -> clientId;
        (new Car())->deleteData($id);
        (new Client())->deleteData($clientId);

        return redirect()->route('home');
    }
}
