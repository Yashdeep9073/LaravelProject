@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    {{-- <a href="{{ route('products.create') }}">Create Product</a> --}}
    <ul>
        @foreach ($products as $product)
            <li>
                <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a> - ${{ $product->price }}
                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <a href="{{ route('products.edit', $product) }}">Edit</a>
            </li>
        @endforeach
    </ul>
@endsection
