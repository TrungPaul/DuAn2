<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetailServiceRequest;
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

    public function index(Request $request)
    {
        $key = $request->keyword;
        $idSpa = Auth::guard('spa')->user()->id;
        if (!$request->has('keyword') || empty($key)) {
            $service = ServiceDetail::where('spa_id', $idSpa)->orderBy('id', 'DESC')->paginate(5);
        } else {
            $service = ServiceDetail::where([
                ['spa_id', $idSpa],
                ['name_service', 'like', "%$key%"]
            ])->orderBy('id', 'DESC')->paginate(5);
            $service->withPath("spa/service-detail/?keyword=$key");
        }

        return view('pages-spa.ListServiceDetail', compact('service'));
    }

    public function destroy($id)
    {
        ServiceDetail::where('id', $id)->delete();

        return redirect()->route('list-serviceDetail')->with('destroy', 'Xóa dịch vụ thành công');
    }

    public function getAdd()
    {
        $service = Service::all();

        return view('pages-spa.addServiceDetail', compact('spaId', 'service'));
    }

    public function postAddServiceDetail(DetailServiceRequest $request)
    {

        $serviceDetail = new ServiceDetail();
        $request['spa_id'] = $idSpa = Auth::guard('spa')->user()->id;
        $request['price_service'] = number_format($request->price_service , 0,'.' , ',');
        $request['image_service'] = 'face.jpg';
        $serviceDetail->fill($request->all());
        if ($request->hasFile('image_service')) {
            $avatar = $request->image_service;
            $serviceDetail->image_service = $this->uploadService->uploadFile($avatar);
        }
        $serviceDetail->save();

        return redirect()->route('list-serviceDetail')->with('create', 'Thêm dịch vụ thành công');
    }

    public function getUpdate($id)
    {
        $ser = ServiceDetail::find($id);
        $service = Service::all();

        return view('pages-spa.updateServiceDetail', compact('ser', 'service'));
    }

    public function update(DetailServiceRequest $request, $id)
    {
        $serviceDetail = ServiceDetail::find($id);
        $serviceDetail->fill($request->all());
        if ($request->hasFile('image_service')) {
            $avatar = $request->image_service;
            $serviceDetail->image_service = $this->uploadService->uploadFile($avatar);
        }
        $serviceDetail->update();

        return redirect()->route('list-serviceDetail')->with('update', 'Sửa đổi dịch vụ thành công');
    }
}
