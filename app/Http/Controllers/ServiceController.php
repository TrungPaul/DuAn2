<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\User;

class ServiceController extends Controller
{
    public function index($spaId)
    {
        $spa = User::find($spaId);
        $service = Service::where('spa_id', $spaId)->get();

        return view('pages-spa.list-service', compact( 'service' , 'spa'));
    }

    public function destroy($serviceId)
    {
        $servicedelete = Service::destroy($serviceId);
    }

    public function storeService($spaId)
    {
        return view('pages-spa.addService', ['spa' => $spaId]);
    }

    public function add(Request $request)
    {
        $this->validate($request, [
             'name_service' => 'required',
             'spa_id' => 'required'
             ]);
        Service::create($request->all());

        return $this->index($request->spa_id);
    }
    public function getUpdate($id){
        $service = Service::where('id', $id)->get();

        return view('pages-spa.UpdateService', compact( 'service' ));
    }

    public function update(Request $request)
    {
        $data = $request->except('_token' , 'id');
        Service::where('id', $request->id)->update($data);

        return $this->index($request->spa_id);
    }
}
