<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $products = Product::select('id', 'name', "description", "price","price_after_discount", "image_url", "stock_quantity", 'brand','rating_avg')
            ->paginate(5);

        return view('Admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id','name')->get();
        return view('Admin.products.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $request->validate(['image' => 'required']);
        $ext = $request->image->extension();
        $newName = 'Product' . time() . rand(0, mt_getrandmax()) . '.' . $ext;
        $request->image->move(public_path('assets/images/products'), $newName);
            Product::create([
                "name" => $request->name,
                "description" => $request->description,
                "price" => $request->price,
                "price_after_discount" => $request->price_after_discount,
                "stock_quantity" => $request->stock_quantity,
                "brand" => $request->brand,
                "image" => $newName,
                "category_id" => $request->category_id,
            ]);
            return back()->with('success', "Data created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('Admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        return view('Admin.products.edit', compact('product', "categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $defaultProduct = asset('assets/images/products/defaultProduct.png');
        if ($request->hasFile('image')) {
            $request->validate(['image' => 'sometimes']);
            $ext = $request->image->extension();
            $newName = 'Product' . time() . rand(0, mt_getrandmax()) . '.' . $ext;
            $request->image->move(public_path('assets/images/products'), $newName);
        }
        $product->update([
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "price_after_discount" => $request->price_after_discount,
            "stock_quantity" => $request->stock_quantity,
            "brand" => $request->brand,
            "image" => $request->hasFile('image') ? $newName : ($product->image ?? 'defaultProduct.png'),
            "category_id" => $request->category_id,
        ]);
        return redirect()->route('products.index')->with('updated', "Data updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('products.index')->with('success', 'Data deleted successfully');
    }
}
