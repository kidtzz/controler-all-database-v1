@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between">
  <div class=" mx-0">
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3 btn-sm">Add Product</a>
  </div>
  <div class=" mx-0">
    <form action="{{ route('products.index') }}" method="GET" class="mb-3">
      <div class="input-group">
        <input type="text" name="search" class="form-control"
          placeholder="Search product..." value="{{ request('search') }}">
        <button class="btn btn-primary btn-sm" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

<table class="table table-bordered table-hover">
  <thead class="table-dark">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Price</th>
      <th>Create date</th>
      <th width="100">Action</th>
    </tr>
  </thead>

  <tbody>
    @foreach($products as $product)
    <tr>
      <td>{{ $product->id }}</td>
      <td>{{ $product->name }}</td>
      <td>{{ $product->price }}</td>
      <td>{{ $product->created_at }}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <form action="{{ route('products.destroy', $product->id) }}"
            class="m-0 mx-2"
            method="POST"
            onsubmit="return confirmDelete()">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
          <a href="{{ route('products.edit', $product->id) }}"><button class="m-0 mx-2 btn btn-warning btn-sm">Edit</button></a>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

<script>
  function confirmDelete() {
    return confirm("Apakah kamu yakin ingin menghapus product ini?");
  }
</script>