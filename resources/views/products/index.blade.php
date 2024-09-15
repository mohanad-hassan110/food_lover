@extends('layout')

@section('content')
    <h1>Our Special Menu</h1>
    <div class="menu-items">
        @foreach ($products as $product)
            <div class="menu-item">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                <h3>{{ $product->name }} <span class="primary-text">${{ $product->price }}</span></h3>
                <p>{{ $product->description }}</p>
            </div>
        @endforeach
    </div>
@endsection
