@extends('layout.masterLayout')

@section('title' , 'Add Product')

@section('content')
    <h1>Add Product</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" required >
        </div>
        
        <div class="form-group">
          <label for="description">Description:</label>
          <textarea class="form-control" name="description" id="description" required></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input class="form-control" type="text" name="price" id="price" required>
        </div>
        
        <div class="form-group">
            <label for="image">Image:</label>
            <input class="form-control" type="file" name="image" id="image" required>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
      </form>
@endsection
