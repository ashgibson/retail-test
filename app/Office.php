<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = array('city', 'phone', 'addressLine1', 'addressLine2', 'state', 'country',
        'postalCode', 'territory');

    protected $primaryKey = 'officeCode';

    public function employees() {
        return $this->hasMany(Employee::class, 'employeeNumber');
    }

    public $timestamps = false;

}
