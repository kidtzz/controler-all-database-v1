@extends('layouts.app')
@section('content')
<div class="border border-2 rounded p-3">
  <div class="d-flex justify-content-between">
    <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm mb-3">Back</a>
    <h5>Add Product</h5>
  </div>



  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $err)
      <li>{{ $err }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  @if (session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label class="form-label">Product Name</label>
      <input type="text" name="name" class="form-control" placeholder="Enter product name" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Price</label>
      <input type="number" name="price" class="form-control" placeholder="Enter price" required>
    </div>

    <button class="btn btn-primary">Save</button>
  </form>
</div>
@endsection