<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $guarded = array('customerNumber');

    protected $primaryKey = 'checkNumber';

    public $incrementing = false;

    public function customer() {
        return $this->belongsTo(Customer::class, 'customerNumber', 'customerNumber');
    }

    public $timestamps = false;
}
