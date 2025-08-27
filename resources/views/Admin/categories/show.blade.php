@extends('adminlte::page')

@section('title', 'Category Details')

@section('content_header')
<h1>Category Details</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <h4>{{ $category->name }}</h4>
        <p><strong>Description:</strong> {{ $category->description }}</p>
    </div>
</div>
@stop