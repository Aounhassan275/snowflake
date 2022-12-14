<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title','price','description','display_order','dune_bashing','belly_dance','fire_show',
        'sand_boarding','tanoura_show','refreshments','short_camel_ride','photography','henaa_tattoo',
        'category_id'
    ];
    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }
    public function category()
    {
        return $this->belongTo(Category::class);
    }
}
