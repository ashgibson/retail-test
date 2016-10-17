<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::paginate(20);

        return view('customers.index', ['customers' => $customers]);
    }
}
