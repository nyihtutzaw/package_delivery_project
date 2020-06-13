<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller; 
use App\Misc\AuthUser;


class OrderController extends Controller
{
    use AuthUser;

    public function create()
    {
        $townships=\App\Township::all();
        return view("customer.order.create",compact('townships'));
    }
    
    public function store()
    {
        $customer= $this->getAuthUser("customer");
        $model=new \App\Order;
        $model->from_township_id=request("from_township_id");
        $model->to_township_id=request("to_township_id");
        $model->date=request("date");
        $model->destination=request("destination");
        $model->customer_id=$customer->id;
        $model->save();
        return redirect(route('customer.home.index'))->with("success","New order is added");
    }
}