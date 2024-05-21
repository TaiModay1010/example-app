<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Hiển thị danh sách sản phẩm
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Hiển thị form thêm sản phẩm mới
    public function create()
    {
        return view('products.create');
    }

    // Lưu sản phẩm mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'productType' => 'required|alpha_num|size:3',
            'productCode' => 'required|alpha_num|size:6',
            'productName' => 'required|string|max:50',
            'quantity' => 'required|numeric',
            'note' => 'nullable|string|max:60',
        ]);

        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }

    // Hiển thị form chỉnh sửa sản phẩm
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // Cập nhật thông tin sản phẩm trong cơ sở dữ liệu
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'productType' => 'required|alpha_num|size:3',
            'productCode' => 'required|alpha_num|size:6',
            'productName' => 'required|string|max:50',
            'quantity' => 'required|numeric',
            'note' => 'nullable|string|max:60',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
    public function report()
{
    $report = Product::select('productType', \DB::raw('SUM(quantity) as total_quantity'))
                      ->groupBy('productType')
                      ->get();

    return view('products.report', compact('report'));
}

}
