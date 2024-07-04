@extends('layout.masterLayout')

@section('title' , 'Cart')


@section('content')
<div class="container pb-5 mt-n2 mt-md-n3">
    <h1>Cart</h1>
@foreach ($cartItems as $item)
        
        <div class="row">
            <div class="col-xl-9 col-md-8">
                <h2 class="h6 d-flex flex-wrap justify-content-between align-items-center px-4 py-3 bg-light"><span>Products</span><a class="font-size-sm" href="{{route('products.index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left" style="width: 1rem; height: 1rem;"><polyline points="15 18 9 12 15 6"></polyline></svg>Continue shopping</a></h2>

                <div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                    <div class="media d-block d-sm-flex text-center text-sm-left">
                        <a class="cart-item-thumb mx-auto mr-sm-4" href="#"><img src="{{ asset('storage/' . $item->product->image) }}" alt="Product"></a>
                        
                        <div class="media-body pt-3">
                            <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="{{route('products.show',$item->product)}}">{{ $item->product->name }}</a></h3>
                            <div class="font-size-lg text-primary pt-2">{{ $item->product->price }}</div>
                        </div>
                    </div>

                    <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                        <div class="form-group mb-2">
                            <label for="quantity1">{{ $item->quantity }}</label>
                            <input class="form-control form-control-sm" type="number" id="quantity1" value="1">
                        </div>

                        <form action="{{ route('cart.remove', $item) }}" method="POST" >
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm btn-block mb-2" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-1">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>Remove</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @endforeach
</div>

@endsection
