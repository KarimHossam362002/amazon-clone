@extends('adminlte::page')
@section('css')
        <link rel="icon" href="{{ asset('assets/img/logos/Amazon-icon.png') }}">
    @endsection
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
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            @error('description')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            @error('price')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label for="price" class="form-label">Product Price:</label>
                <input type="number" class="form-control w-50" name="price" id="price">
            </div>

            @error('discount')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label for="discount" class="form-label">Product Discount (%):</label>
                <input type="number" class="form-control w-50" name="discount" id="discount" min="0" max="100">
                <small id="warning" class="text-danger d-none">Enter product price first</small>
            </div>
            {{-- --}}
            @error('price_after_discount')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label for="price_after_discount" class="form-label">Price After Discount:</label>
                <input type="number" class="form-control w-50 bg-light" name="price_after_discount"
                    id="price_after_discount" readonly>
            </div>
            @error('stock_quantity')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
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
            @error('brand')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label>Brand</label>
                <input type="text" name="brand" class="form-control">
            </div>

            {{-- --}}
            <label for="exampleInputFile">Product Image</label>
            @error('image')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="input-group w-50">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Upload</label>
                </div>
            </div>
            {{-- --}}

            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Save
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