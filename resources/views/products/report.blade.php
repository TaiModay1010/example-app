@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Product Report</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product Type</th>
                <th>Total Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($report as $item)
                <tr>
                    <td>{{ $item->productType }}</td>
                    <td>{{ $item->total_quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
