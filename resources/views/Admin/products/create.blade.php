@extends('adminlte::page')

@section('title', 'Add Product')

@section('content_header')
<h1>Add Product</h1>
@stop

@section('content')
@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<div class="card">
    <div class="card-body">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            @error('price')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div>
                <label for="price" class="form-label">Product Price:</label>
                <input type="number" value="{{ old('price') }}" class="form-control w-50" name="price" id="price">
            </div>

           @error('discount')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div>
            <label for="discount" class="form-label">Product discount:</label>
            <input type="number" class="form-control w-50" name="discount" id="discount">
            <span id="warning" style="color: red;">Enter product price first</span>
        </div>
        {{--  --}}
        @error('price_after_discount')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div>
            <label for="price_after_discount" class="form-label">Price after discount:</label>
            <input type="number" class="form-control w-50" name="price_after_discount" id="price_after_discount" readonly>
        </div>

            <div class="form-group">
                <label>Stock Quantity</label>
                <input type="number" name="stock_quantity" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Category</label>
                <select name="category_id" class="form-control">
                    <option value="">-- Select Category --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Brand</label>
                <input type="text" name="brand" class="form-control">
            </div>

            <div class="form-group">
                <label>Image URL</label>
                <input type="text" name="image_url" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Save
            </button>
        </form>
    </div>
</div>
@stop
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#price, #discount').on('input', function () {
                // Get the values of the input fields
                var num1 = parseFloat($('#price').val()) || 0;
                var num2 = parseFloat($('#discount').val()) || 0;
                if (num1 === 0 && num2 > 0) {
                    // Display the warning message
                    $('#warning').show();
                } else {
                    // Hide the warning message and calculate the sum
                    $('#warning').hide();
                    var result = (num1 * num2) / 100;
                    $('#discount').val(result);
                }
            });
        });
    </script>

@endsection