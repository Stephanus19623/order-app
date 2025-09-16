@extends('layouts.app')

@section('title', 'Order Success')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card p-4 text-center">
      <h2 class="mb-3 text-success">🎉 Order Submitted Successfully!</h2>
      <p class="text-muted">Here are your order details:</p>

      <div class="text-start bg-light p-3 rounded">
        <pre>{{ print_r($data, true) }}</pre>
      </div>

      <div class="mt-4">
        <a href="{{ route('home') }}" class="btn btn-primary rounded-pill px-4">🏠 Back to Home</a>
      </div>
    </div>
  </div>
</div>
@endsection
