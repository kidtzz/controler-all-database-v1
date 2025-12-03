@extends('layouts.app')
@section('content')
<div class="container mt-4">

  <h2>Edit Product</h2>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label>Name</label>
      <input type="text"
        name="name"
        class="form-control"
        value="{{ $product->name }}">
    </div>

    <div class="mb-3">
      <label>Description</label>
      <textarea name="description" class="form-control">{{ $product->description }}</textarea>
    </div>

    <div class="mb-3">
      <label>Price</label>
      <input type="number"
        name="price"
        class="form-control"
        value="{{ $product->price }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
  </form>

</div>
@endsection