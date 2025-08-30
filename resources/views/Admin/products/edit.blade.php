@extends('adminlte::page')
@section('css')
        <link rel="icon" href="{{ asset('assets/img/logos/Amazon-icon.png') }}">
    @endsection
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
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
            </div>

            @error('description')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            </div>
            @error('price')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label for="price" class="form-label">Product Price:</label>
                <input type="number" step="0.01" class="form-control w-50" name="price" id="price"
                    value="{{ old('price', $product->price ?? '') }}">
            </div>

            @error('discount')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label for="discount" class="form-label">Product Discount (%):</label>
                <input type="number" class="form-control w-50" name="discount" id="discount"
                    value="{{ old('discount', $product->discount ?? 0) }}" min="0" max="100">
            </div>
            @error('price_after_discount')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label for="price_after_discount" class="form-label">Price After Discount:</label>
                <input type="number" step="0.01" class="form-control w-50 bg-light" name="price_after_discount"
                    id="price_after_discount" readonly
                    value="{{ old('price_after_discount', $product->price_after_discount ?? '') }}">
            </div>
            @error('stock_quantity')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label>Stock Quantity</label>
                <input type="number" name="stock_quantity" class="form-control" value="{{ $product->stock_quantity }}"
                    required>
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
            @error('brand')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label>Brand</label>
                <input type="text" name="brand" class="form-control" value="{{ $product->brand }}">
            </div>
            @error('image')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label for="exampleInputFile">Product Image</label>

                @php
                    $defaultImage = asset('assets/images/products/defaultProduct.png');
                    $createdPath = public_path('assets/images/products/created/' . $product->image);
                    $updatedPath = public_path('assets/images/products/updated/' . $product->image);

                    if ($product->image && file_exists($createdPath)) {
                        $imagePath = asset('assets/images/products/created/' . $product->image);
                    } elseif ($product->image && file_exists($updatedPath)) {
                        $imagePath = asset('assets/images/products/updated/' . $product->image);
                    } else {
                        $imagePath = $defaultImage;
                    }
                @endphp

                {{-- Preview current image --}}
                <div class="mb-2">
                    <img src="{{ $imagePath }}" alt="Product Image" width="120" class="img-thumbnail">
                </div>

                {{-- Upload new image --}}
                <div class="input-group w-50">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose new image</label>
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Update
            </button>
        </form>
    </div>
</div>
@stop
@section('js')
    <script>
        $(document).ready(function () {
            function calculateDiscount() {
                let price = parseFloat($('#price').val()) || 0;
                let discount = parseFloat($('#discount').val()) || 0;

                if (price === 0 && discount > 0) {
                    $('#warning').removeClass('d-none');
                    $('#price_after_discount').val('');
                } else {
                    $('#warning').addClass('d-none');
                    let finalPrice = price - ((price * discount) / 100);
                    $('#price_after_discount').val(finalPrice.toFixed(2));
                }
            }

            $('#price, #discount').on('input', calculateDiscount);


            calculateDiscount();
        });
    </script>
@endsection