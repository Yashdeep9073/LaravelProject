@extends('layout.masterLayout')

@section('content')

    <h1>{{ $product->name }}</h1>
    @if ($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 200px;">
    @endif
    <p>{{ $product->description }}</p>
    <p>${{ $product->price }}</p>
    <form action="{{ route('cart.add', $product) }}" method="POST">
        @csrf
        <button type="submit">Add to Cart</button>
    </form>
@endsection
