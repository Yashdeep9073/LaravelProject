@extends('layout.masterLayout')

@section('title' , 'Products')


@section('content')
<div class="container mt-5">
        <h1>Products</h1>
        <div class="d-flex flex-wrap justify-content-end">
            @foreach ($products as $product)
                <div class="col-md-3 mb-3 py-2 px-3 ">
                    <div class="card">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">${{ $product->price }}</p>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('products.show', $product) }}" class="btn btn-primary">Show</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                @endforeach
        </div>
    </div>
@endsection
