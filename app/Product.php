<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    protected $fillable = [
        'name', 'description' , 'price' , 'price2' , 'category_id' , 'created_at' , 'updated_at'
    ];
    public function category(){

        return $this->belongsTo('App\Category', 'foreign_key' , 'category_id');

    }
}
