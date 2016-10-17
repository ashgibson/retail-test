<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public $fillable = array('orderDate', 'requiredDate', 'shippedDate', 'status', 'comments', 'customerNumber');

    protected $primaryKey = 'orderNumber';

    public function customer() {
        return $this->belongsTo(Customer::class, 'customerNumber', 'customerNumber');
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'orderdetails', 'orderNumber', 'productCode')
                    ->withPivot('quantityOrdered', 'priceEach', 'orderLineNumber');
    }

    public $timestamps = false;
}
