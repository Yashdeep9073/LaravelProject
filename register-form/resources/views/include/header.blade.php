<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">@auth
        {{auth()->user()->name}}
        @endauth</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">


        @auth
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('products.index') }}">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('products.create') }}">Add Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cart.index') }}" aria-disabled="true">Cart</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
              <a class="nav-link btn btn-outline-danger" href="{{route('logout')}}">Logout</a>
          </li>
      </ul>
      
        @else
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}" aria-disabled="true">Register</a>
          </li>
        </ul>
      @endauth
        
      </div>
    </div>
  </nav>