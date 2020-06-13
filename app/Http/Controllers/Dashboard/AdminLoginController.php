<?php

namespace App\Http\Controllers\Dashboard;
use App\Misc\Validatable;
use App\Misc\AuthUser;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class AdminLoginController extends Controller
{
    use Validatable;
    use AuthUser;
    public function index(Request $request)
    {
        return view('dashboard.login.index');
    }

    public function save(Request $request)
    {
        $admin=new Admin;
        $admin->email="admin@gmail.com";
        $admin->password=bcrypt("alliswell");
        $admin->save();
    }

    public function login(Request $request)
    {
              $validationRules=[ 
                    'email' => 'required', 'password' => 'required',
              ];
             $this->validateInput($validationRules,$request);
            
             $admin=Admin::where("email",$request->email)->first();
             if ($admin)
             {
                if (Hash::check($request->password, $admin->password))
                {
                    $this->setAuthUser($admin,"admin");
                    return redirect("/dashboard/home");
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

    public function changepassword(Request $request)
    {
        $validationRules=[ 
            'old_pw' => 'required', 'password' => 'required|same:password_confirmation',
            'password_confirmation'=>'required'
        ];
        $this->validateInput($validationRules,$request);

        $admin=Admin::first();
        if ($admin)
        {
            if (Hash::check($request->old_pw, $admin->password))
           {
               $admin->password=bcrypt($request->password);
               if ($admin->update())
               {
                   return back()->with("success","Admin password is changed successfully");
               }
           }
           else 
           {
            return back()->with("error","Admin password is failed to change");
           }
        }
        else 
        {
            return back()->with("error","Admin password is failed to change");
        }
    }

     public function logout(Request $request) {
        $this->forgetAuthUser("admin");
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect("/dashboard/login");
    }
}
