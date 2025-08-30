@extends('adminlte::page')

@section('title', 'Category Details')
@section('css')
        <link rel="icon" href="{{ asset('assets/img/logos/Amazon-icon.png') }}">
    @endsection
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