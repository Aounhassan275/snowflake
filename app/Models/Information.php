<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = [
        'name','phone','image','email','about','address','hdescription','bcdescription','bdescription','cdescription',
        'adescription','pdescription','fb','insta','twitter','pt','site','website_switch'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveIImage($value,'/information/');
    }
    public static function siteName(){
        $information = Information::find(1);
        return @$information->name;
    }
    public static function facebook(){
        $information = Information::find(1);
        return @$information->fb;
    }
    public static function instagram(){
        $information = Information::find(1);
        return @$information->insta;
    }
    public static function twitter(){
        $information = Information::find(1);
        return @$information->twitter;
    }
    public static function phone(){
        $information = Information::find(1);
        return @$information->phone;
    }
    public static function email(){
        $information = Information::find(1);
        return @$information->email;
    }
    public static function address(){
        $information = Information::find(1);
        return @$information->address;
    }
    public static function aboutUs(){
        $information = Information::find(1);
        return @$information->about;
    }
}
