<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){

        return $this->belongsTo('App\User');

    }

    public function Products(){

        return $this->belongsToMany('App\Product')
                        ->using('App\Order_product')
                        ->withPivot([
                            'product_id',
                            'quantity',
                            'price',
                            'total'
                        ]);

    }
}
