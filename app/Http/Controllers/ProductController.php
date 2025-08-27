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
        $products = Product::select('id', 'name', "description", "price", "price_after_discount", "image", "stock_quantity", 'brand', 'rating_avg')
            ->paginate(5);

        return view('Admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id', 'name')->get();
        return view('Admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {

        $request->validate(['image' => 'required']);
        if (!$request->hasFile('image')) {
            $newName = 'defaultProduct.png';
        } else {
            $ext = $request->image->extension();
            $newName = 'Product' . time() . rand(0, mt_getrandmax()) . '.' . $ext;
            $request->image->move(public_path('assets/images/products/created'), $newName);
        }


        $discount = $request->discount ?? 0;
        $finalPrice = $request->price - (($request->price * $discount) / 100);
        // dd($request->category_id);
        Product::create([
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "discount" => $request->discount,
            "price_after_discount" => $finalPrice,
            "stock_quantity" => $request->stock_quantity,
            "brand" => $request->brand,
            "rating_avg" => $request->rating_avg,
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

        $request->validate(['image' => 'sometimes']);
        if (!$request->hasFile('image')) {
            $newName = 'defaultProduct.png';
        } else {
            $ext = $request->image->extension();
            $newName = 'Product' . time() . rand(0, mt_getrandmax()) . '.' . $ext;
            $request->image->move(public_path('assets/images/products/updated'), $newName);
        }

        $discount = $request->discount ?? 0;
        $finalPrice = $request->price - (($request->price * $discount) / 100);
        $product->update([
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "discount" => $request->discount,
            "price_after_discount" => $finalPrice,
            "stock_quantity" => $request->stock_quantity,
            "brand" => $request->brand,
            "rating_avg" => $request->rating_avg,
            "image" => $newName,
            "category_id" => $request->category_id,
        ]);
        // $product->categories()->sync($request->input('category_id'));
        return redirect()->route('products.index')->with('updated', "Data updated Successfully");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);


        if ($product->image && $product->image !== 'defaultProduct.png') {
            $createdPath = public_path('assets/images/products/created/' . $product->image);
            $updatedPath = public_path('assets/images/products/updated/' . $product->image);

            if (file_exists($createdPath)) {
                unlink($createdPath);
            } elseif (file_exists($updatedPath)) {
                unlink($updatedPath);
            }
        }
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
