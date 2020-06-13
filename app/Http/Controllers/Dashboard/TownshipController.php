<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class TownshipController extends Controller
{
    public function index()
    {
        $townships=\App\Township::all();
        return view("dashboard.township.index",compact('townships'));
    }

    public function store()
    {
        $township=new \App\Township;
        $township->name=request("name");
        $township->price=request("price");
        $township->save();
        return back()->with("success","Township is saved");
    }

    public function delete()
    {
        $township=\App\Township::find(request("id"));
        $township->delete();
        return back()->with("success","Township is deleted");
    }

    public function edit()
    {
        $township=\App\Township::find(request("id"));
        return view("dashboard.township.edit",compact('township'));
    }

    public function update()
    {
        $township=\App\Township::find(request("id"));
        $township->name=request("name");
        $township->price=request("price");
        $township->update();
        return redirect(route('dashboard.township.index'))->with("success","Township is updated");
    }

}
