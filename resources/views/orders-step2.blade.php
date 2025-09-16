@extends('layouts.app')

@section('title', 'Order - Step 2')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card p-4">
      <h3 class="mb-4 text-center" style="color:#004a99;">Step 2 - Additional Details</h3>

      <form action="{{ route('orders.step2.submit') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Materials</label>
          <input type="text" class="form-control" name="materials" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Delivery Method</label>
          <select class="form-select" name="delivery" required>
            <option value="Courier">Courier</option>
            <option value="Pickup">Pickup</option>
            <option value="Freight">Freight</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Quantity</label>
          <input type="number" class="form-control" name="quantity" min="1" required>
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-success rounded-pill px-4">✅ Complete Order</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
