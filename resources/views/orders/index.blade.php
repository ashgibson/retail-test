@extends('layouts.app')

@section('content')

    <h2>Orders</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Order Number</th>
            <th>Order Date</th>
            <th>Product Name</th>
            <th>Product Code</th>
            <th>Qty Ordered</th>
            <th>Price (ea)</th>
            <th>Required Date</th>
            <th>Shipped Date</th>
            <th>Status</th>
            <th>Comments</th>
            <th>Customer Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->orderNumber}}</td>
                <td>{{$order->orderDate}}</td>
                <td style="white-space: nowrap">
                    @foreach($order->products as $product)
                    {{$product->productName}}<br>
                    @endforeach
                </td>
                <td>
                    @foreach($order->products as $product)
                    {{$product->productCode}}<br>
                    @endforeach
                </td>
                <td>
                    @foreach($order->products as $product)
                    {{$product->pivot->quantityOrdered}}<br>
                    @endforeach
                </td>
                <td>
                    @foreach($order->products as $product)
                    $&nbsp{{$product->pivot->priceEach}}<br>
                    @endforeach
                </td>
                <td>{{$order->requiredDate}}</td>
                <td>{{$order->shippedDate}}</td>
                <td>{{$order->status}}</td>
                <td>{{$order->comments}}</td>
                <td>{{$order->customer->customerName}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{ $orders->links() }}
    </div>

@stop