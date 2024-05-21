@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Product</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="productType">Product Type</label>
            <input type="text" name="productType" class="form-control" value="{{ old('productType') }}">
            @error('productType')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="productCode">Product Code</label>
            <input type="text" name="productCode" class="form-control" value="{{ old('productCode') }}">
            @error('productCode')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="productName">Product Name</label>
            <input type="text" name="productName" class="form-control" value="{{ old('productName') }}">
            @error('productName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}">
            @error('quantity')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="note">Note</label>
            <input type="text" name="note" class="form-control" value="{{ old('note') }}">
            @error('note')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
@endsection
