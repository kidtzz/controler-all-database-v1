@extends('layouts.app')
@section('content')
<div>
  <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm mb-3">Back</a>
</div>

<table class="table table-bordered table-hover">
  <thead class="table-dark">
    <tr>
      <th>TrackId</th>
      <th>Name</th>
      <th>Composer</th>
      <th>Milliseconds</th>
      <th>Bytes</th>
      <th>UnitPrice</th>
      <th width="100">Action</th>
    </tr>
  </thead>

  <tbody>
    @foreach($track as $track)
    <tr>
      <td>{{ $track->TrackId }}</td>
      <td>{{ $track->Name }}</td>
      <td>{{ $track->Composer }}</td>
      <td>{{ $track->Milliseconds }}</td>
      <td>{{ $track->Bytes }}</td>
      <td>{{ $track->UnitPrice }}</td>
      <td>{{ $track->created_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection