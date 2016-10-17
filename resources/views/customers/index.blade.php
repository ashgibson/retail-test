@extends('layouts.app')

@section('content')

    <h2>Customers</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Phone</th>
            <th>Address 1</th>
            <th>Address 2</th>
            <th>City</th>
            <th>State</th>
            <th>Postcode</th>
            <th>Country</th>
            <th>Sales Rep</th>
            <th>Credit Limit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{$customer->customerNumber}}</td>
                <td>{{$customer->customerName}}</td>
                <td>{{$customer->contactLastName}}</td>
                <td>{{$customer->contactFirstName}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->addressLine1}}</td>
                <td>{{$customer->addressLine2}}</td>
                <td>{{$customer->city}}</td>
                <td>{{$customer->state}}</td>
                <td>{{$customer->postalCode}}</td>
                <td>{{$customer->country}}</td>
                @if($customer->salesRep)
                    <td>{{$customer->salesRep->firstName}}</td>
                    @else <td></td>
                @endif
                <td>$&nbsp{{$customer->creditLimit}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{ $customers->links() }}
    </div>

@stop