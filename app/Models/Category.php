<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'image'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveSImage($value,'/slider/');
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
