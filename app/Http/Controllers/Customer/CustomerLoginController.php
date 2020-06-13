<?php

namespace App\Http\Controllers\Customer;
use App\Misc\Validatable;
use App\Misc\AuthUser;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class CustomerLoginController extends Controller
{
    use Validatable;
    use AuthUser;
    public function login()
    {
        return view('customer.login.index');
    }

    public function register()
    {
        $townships=\App\Township::all();
        return view('customer.register.index',compact('townships'));
    }

    public function registerAction()
    {
        $model=\App\Customer::where("phone",request("phone"))->first();
        if ($model)
        {
            return back()->with("error","Phone number is used for another account");
        }
        $model=new \App\Customer;
        $model->name=request("name");
        $model->address=request("address");
        $model->phone=request("phone");
        $model->township_id=request("township_id");
        $model->password=bcrypt(request("password"));
        $model->save();
        return redirect(route('customer.login'))->with("success","Registeration is successful");
    }

    public function loginAction(Request $request)
    {
        $model=\App\Customer::where("phone",request("phone"))->first();
        if ($model)
        {
           if (Hash::check($request->password, $model->password))
           {
               $this->setAuthUser($model,"customer");
               return redirect("/customer/home");
           }
           else 
           {
                 return back()->with("error","Login failed");
           }
        }
        else 
        {
            return back()->with("error","Login failed");
        }
    }

    public function logout(Request $request)
    {
        $this->forgetAuthUser("customer");
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect("/customer/login");
    }

  
}
