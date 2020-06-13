<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryMen extends Model
{
    public function township()
    {
        return $this->belongsTo("App\Township");
    }

    public function getPhotoAttribute()
    {
        if (isset($this->attributes['photo']))
        return asset('storage/deliveryman/photos/' . $this->attributes['photo']);
        else 
        return null;
    }
}
