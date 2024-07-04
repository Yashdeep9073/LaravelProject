@extends('layouts.app')

@section('content')
    <h1 >Cart</h1>
    <ul>
        @foreach ($cartItems as $item)
            <li>
                <img src="{{ $item->product->image }} " alt="">
                {{ $item->product->name }} - ${{ $item->product->price }} x {{ $item->quantity }}
                <form action="{{ route('cart.remove', $item) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
