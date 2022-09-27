<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'description', 'price', 'image', 'active', 'category_id'];
   
    public function getImageAttribute(){
        $image = $this->attributes['image'];
        if($image){
            if(Str::startsWith($image, 'http')){
                return $image;
            }else{
                if (Storage::exists($image)){
                    return Storage::url($image);
                }
                return 'https://millionstatusov.ru/pic/statpic/all8/5e04c21a52a39.jpg';               
            }
        }
        return 'https://millionstatusov.ru/pic/statpic/all8/5e04c21a52a39.jpg';
    }

    public function setImageAttribute($value){
        $this->attributes['image'] = Str::lower($value);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
