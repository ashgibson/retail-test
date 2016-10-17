<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = array('customerName', 'contactLastName', 'contactFirstName', 'phone', 'addressLine1',
        'addressLine2', 'city', 'state', 'postalCode', 'country', 'salesRepEmployeeNumber', 'creditLimit');

    protected $primaryKey = 'customerNumber';

    public function salesRep() {
        return $this->belongsTo(Employee::class, 'salesRepEmployeeNumber', 'employeeNumber');
    }

    public function orders() {
        return $this->hasMany(Order::class, 'customerNumber', 'customerNumber');
    }

    public function payments() {
        return $this->hasMany(Payment::class, 'customerNumber', 'customerNumber');
    }

    public $timestamps = false;
}
