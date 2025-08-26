@extends('adminlte::page')

@section('title', 'Edit Product')

@section('content_header')
    <h1>Edit Product</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label>Price ($)</label>
                <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}" required>
            </div>

            <div class="form-group">
                <label>Stock Quantity</label>
                <input type="number" name="stock_quantity" class="form-control" value="{{ $product->stock_quantity }}" required>
            </div>

            <div class="form-group">
                <label>Category</label>
                <select name="category_id" class="form-control">
                    <option value="">-- Select Category --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Brand</label>
                <input type="text" name="brand" class="form-control" value="{{ $product->brand }}">
            </div>

            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control" value="{{ $product->image }}">
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Update
            </button>
        </form>
    </div>
</div>
@stop
