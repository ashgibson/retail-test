<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::paginate(20);

        return view('orders.index', ['orders' => $orders]);
    }
}
