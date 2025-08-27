@extends('adminlte::page')

@section('title', 'Edit Category')

@section('content_header')
<h1>Edit Category</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('categories.update', $category) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
            </div>

            @error('description')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ $category->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Update
            </button>
        </form>
    </div>
</div>
@stop