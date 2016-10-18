@extends('layouts.app')

@section('content')

    <h2>Products</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Product Line</th>
            <th>Product Scale</th>
            <th>Product Vendor</th>
            <th>Product Description</th>
            <th>Qty in Stock</th>
            <th>Qty on Order</th>
            <th>Qty on Order</th>
            <th>Qty on Order</th>
            <th>Buy Price</th>
            <th>MSRP</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->productCode}}</td>
                <td style="white-space: nowrap">{{$product->productName}}</td>
                <td>{{$product->productLine}}</td>
                <td>{{$product->productScale}}</td>
                <td>{{$product->productVendor}}</td>
                <td>{{$product->productDescription}}</td>
                <td>{{$product->quantityInStock}}</td>
                <td>{{$product->quantityOrdered}}</td>
                <td>{{$product->orders->sum('pivot.quantityOrdered')}}</td>
                @if(($product->orders()->sum('quantityOrdered')) > ($product->quantityInStock))
                    <td class="text-danger"><strong>{{$product->orders()->sum('quantityOrdered')}}</strong></td>
                @else
                    <td>{{$product->orders()->sum('quantityOrdered')}}</td>
                @endif
                <td>$&nbsp{{$product->buyPrice}}</td>
                <td>$&nbsp{{$product->MSRP}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{ $products->links() }}
    </div>

@stop