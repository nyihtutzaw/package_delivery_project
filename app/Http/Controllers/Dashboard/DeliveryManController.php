<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class DeliveryManController extends Controller
{
    public function index()
    {
        $deliveryMens=\App\DeliveryMen::all();
        $townships=\App\Township::all();
        return view("dashboard.deliveryman.index",compact('deliveryMens','townships'));
    }

    public function store()
    {
        $township=new \App\DeliveryMen;
        $township->name=request("name");
        $township->address=request("address");
        $township->phone=request("phone");
        $township->township_id=request("township_id");
        $township->nrc=request("nrc");

        if (request("photo"))
        {
            $township->photo= \App\Service\FileService::save(request("photo"),"deliveryman/photos");
        }

        $township->save();
        return back()->with("success","Delivery Man is saved");
    }

    public function delete()
    {
        $deliveryMan=\App\DeliveryMen::find(request("id"));
        \App\Service\FileService::remove($deliveryMan->photo,"deliveryman/photos");
        $deliveryMan->delete();
        return back()->with("success","Delivery Man is deleted");
    }

    public function edit()
    {
        $deliveryMan=\App\DeliveryMen::find(request("id"));
        $townships=\App\Township::all();
        return view("dashboard.deliveryman.edit",compact('deliveryMan','townships'));
    }

    public function update()
    {
        $deliveryMan=\App\DeliveryMen::find(request("id"));
        $deliveryMan->name=request("name");
        $deliveryMan->address=request("address");
        $deliveryMan->phone=request("phone");
        $deliveryMan->township_id=request("township_id");
        $deliveryMan->nrc=request("nrc");

        if (request("photo"))
        {
            \App\Service\FileService::remove($deliveryMan->photo,"deliveryman/photos");
            $deliveryMan->photo= \App\Service\FileService::save(request("photo"),"deliveryman/photos");
        }

        $deliveryMan->update();
        return redirect(route('dashboard.deliveryman.index'))->with("success","Delivery Man is saved");
    }

}
