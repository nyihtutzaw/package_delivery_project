<?php

namespace App\Misc;


trait Validatable {
    
    private function validateInput($validationRules,$request) 
    {
        $this->validate($request,$validationRules);
    }

      
}

?>