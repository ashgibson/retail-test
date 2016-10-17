@extends('layouts.app')

@section('content')

    <h2>Payments</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Payment Date</th>
            <th>Customer Number</th>
            <th>Customer Name</th>
            <th>Amount</th>
            <th>Check #</th>
        </tr>
        </thead>
        <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>{{$payment->paymentDate}}</td>
                <td>{{$payment->customer->customerNumber}}</td>
                <td>{{$payment->customer->customerName}}</td>
                <td>{{$payment->amount}}</td>
                <td>{{$payment->checkNumber}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{ $payments->links() }}
    </div>
@stop