<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function getCarById($clientId)
    {
        return DB::table('clients')
            ->select('fullName', 'telNumber', 'address', 'sex', 'id')
            ->where('id', '=', $clientId)
            ->get();
    }

    public function getAllClients()
    {
        return DB::table('clients')
            ->select('id', 'fullName')
            ->groupBy('fullName', 'id')
            ->get();
    }

    public function addNewData($request, $sex)
    {
        return DB::table('clients')->insertGetId([
            'fullName' => $request->input('name'),
            'telNumber' => $request->input('telNumber'),
            'address' => $request->input('address'),
            'sex' => $sex,
        ]);
    }

    public function updateData($clientId, $fullName, $telNumber, $address, $sex)
    {
        DB::table('clients')
            ->where('id', $clientId)
            ->update(['fullName' => $fullName,'telNumber' => $telNumber, 'address' => $address, 'sex' => $sex]);
    }
    public function deleteData($id)
    {
        return DB::table('clients')->where('id', '=', $id)->delete();
    }
}
