@extends('layouts.app')
@section('content')


<div class="border border-2 rounded p-3 container mt-4">
  <div class="d-flex justify-content-end">
    <h5>Edit Product</h5>
  </div>

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