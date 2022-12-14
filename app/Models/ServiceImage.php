<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class ServiceImage extends Model
{
    
    protected $fillable = [
        'image','service_id'
    ];
    public function products()
    {
        return $this->belongsTo(Service::class,'service_id');
    }
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveTuitionImage($value,'/tuition/');
    }
}
