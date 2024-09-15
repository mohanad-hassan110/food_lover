@extends('layout')

@section('content')
    <h1>Add New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Product Name">
        <textarea name="description" placeholder="Product Description"></textarea>
        <input type="number" name="price" placeholder="Product Price">
        <input type="file" name="image">
        <button type="submit">Add Product</button>
    </form>
@endsection
