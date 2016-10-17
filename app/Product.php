<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $guarded = array('productCode');

    protected $primaryKey = 'productCode';

    public $incrementing = false;

    public function productLine() {
        return $this->belongsTo(ProductLine::class, 'productLine', 'productLine');
    }

    public function orders() {
        return $this->belongsToMany(Order::class, 'orderdetails', 'productCode', 'orderNumber')
                    ->withPivot('quantityOrdered', 'priceEach', 'orderLineNumber');
    }

    public $timestamps = false;
}
