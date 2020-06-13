<?php 
use \Illuminate\Http\Request;
namespace App\Misc;
trait AuthUser {
    private $session_key = '__authUser';
    
    protected function getAuthUser($type)
    {
        $auth_user=session()->get($type.$this->session_key);
        if ($auth_user)
        {
            return $auth_user;
        }
        return false;
    }

    protected function setAuthUser($auth_user,$type)
    {
        session()->put($type.$this->session_key,$auth_user);
    }
    protected  function forgetAuthUser($type) {
        session()->forget($type.$this->session_key);
    }

      
}

?>
