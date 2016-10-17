<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

use App\Http\Requests;

class PaymentController extends Controller
{

    public function index()
    {
        $payments = Payment::paginate(20);

        return view('payments.index', ['payments' => $payments]);

    }
}
