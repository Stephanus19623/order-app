@extends('layouts.app')

@section('title', 'Order - Step 1')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card p-4">
      <h3 class="mb-4 text-center" style="color:#004a99;">Step 1 - Order Information</h3>

      <form action="{{ route('order.submit') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Buyer Name</label>
          <input type="text" class="form-control" name="buyer_name" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Company Name</label>
          <input type="text" class="form-control" name="company_name" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Address</label>
          <input type="text" class="form-control" name="address" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Parts Name</label>
          <input type="text" class="form-control" name="parts_name" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Due Date</label>
          <input type="date" class="form-control" name="due_date" required>
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-warning rounded-pill px-4">Next ➡️</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
