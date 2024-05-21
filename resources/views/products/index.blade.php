@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Product List</h2>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add New Product</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Type</th>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->productType }}</td>
                    <td>{{ $product->productCode }}</td>
                    <td>{{ $product->productName }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->note }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
