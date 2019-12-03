<?php

namespace App\Http\Controllers;

use App\Services\UploadImageService;
use Illuminate\Http\Request;
use App\User;
use App\ServiceDetail;
use Illuminate\Support\Facades\Auth;
use App\Service;

class ServiceDetailController extends Controller
{
    public function __construct(UploadImageService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function index()
    {
        $idSpa = Auth::guard('spa')->user()->id;
        $service = ServiceDetail::where('spa_id', $idSpa)->paginate(6);

        return view('pages-spa.ListServiceDetail', compact('service'));
    }

    public function destroy($id)
    {
        ServiceDetail::where('id', $id)->delete();

        return $this->index(Auth::user()->id);
    }

    public function getAdd($spaId)
    {
        $service = Service::where('spa_id', $spaId)->get();

        return view('pages-spa.addServiceDetail', compact('spaId', 'service'));
    }

    public function postAddServiceDetail(Request $request)
    {
        $this->validate($request, [
            'name_service' => 'required',
            'spa_id' => 'required',
            'service_id' => 'required',
            'price_service' => 'required',
            'discount' => 'nullable',
            'detail_service' => 'required',
            'image_service' => 'required'
        ]);
        $serviceDetail = new ServiceDetail();
        $serviceDetail->fill($request->all());
        if ($request->hasFile('image_service')) {
            $avatar = $request->image_service;
            $serviceDetail->image_service = $this->uploadService->uploadFile($avatar);
        }
        $serviceDetail->save();

        return $this->index($request->spa_id);
    }

    public function getUpdate($id)
    {
        $service = ServiceDetail::where('id', $id)->get();

        return view('pages-spa.updateServiceDetail', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_service' => 'required',
            'spa_id' => 'required',
            'service_id' => 'required',
            'price_service' => 'required',
            'discount' => 'nullable',
            'detail_service' => 'required',
            'image_service' => 'nullable'
        ]);
        $serviceDetail = ServiceDetail::find($id);
        $serviceDetail->fill($request->all());
        $serviceDetail->spa_id = Auth::user()->id;
        if ($request->hasFile('image_service')) {
            $avatar = $request->image_service;
            $serviceDetail->image_service = $this->uploadService->uploadFile($avatar);
        }
        $serviceDetail->update();

        return $this->index($serviceDetail->spa_id);
    }
}
