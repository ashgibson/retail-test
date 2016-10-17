<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    public $guarded = array('productLine');

    protected $primaryKey = 'productLine';

    public function products() {
        return $this->hasMany(Product::class, 'productLine', 'productLine');
    }

    public $timestamps = false;
}
