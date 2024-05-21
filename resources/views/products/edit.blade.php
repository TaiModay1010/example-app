@extends('layouts.app')

@section('content')
<div class="container">
   
<h2>Edit Product</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="productType">Product Type</label>
            <input type="text" name="productType" class="form-control" value="{{ old('productType', $product->productType) }}">
            @error('productType')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="productCode">Product Code</label>
            <input type="text" name="productCode" class="form-control" value="{{ old('productCode', $product->productCode) }}">
            @error('productCode')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="productName">Product Name</label>
            <input type="text" name="productName" class="form-control" value="{{ old('productName', $product->productName) }}">
            @error('productName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{ old('quantity', $product->quantity) }}">
            @error('quantity')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="note">Note</label>
            <input type="text" name="note" class="form-control" value="{{ old('note', $product->note) }}">
            @error('note')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection
