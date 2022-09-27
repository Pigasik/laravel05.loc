<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name']; //поля кот можно изменять
    //protected $guarded = ['id']; // кот нельзя изменять
    //protected $primaryKey = 'category_id';
    //protected $table = 'catalog_categories'; переменовка таблица

    public function products(){
        return $this->hasMany(Product::class);
        //$this->belongsToMany(Product::class, 'role_users', 'category_id', 'product_id');
    }
}
