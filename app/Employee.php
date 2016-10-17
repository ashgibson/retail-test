<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = array('lastName', 'firstName', 'extension', 'email', 'officeCode', 'reportsTo', 'jobTitle');

    protected $primaryKey = 'employeeNumber';

    public function reportsTo() {
        return $this->belongsTo(Employee::class, 'employeeNumber');
    }

    public function office() {
        return $this->belongsTo(Office::class, 'officeCode', 'officeCode');
    }

    public function customers() {
        return $this->hasMany(Customer::class, 'employeeNumber', 'salesRepEmployeeNumber');
    }

    public $timestamps = false;
}
