@extends('adminlte::page')

@section('title', 'Add Category')

@section('content_header')
<h1>Add Category</h1>
@stop

@section('content')
@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<div class="card">
    <div class="card-body">
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
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

            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Save
            </button>
        </form>
    </div>
</div>
@stop