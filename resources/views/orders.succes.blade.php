@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-blue-100">
    <div class="bg-white rounded-lg shadow-md w-full max-w-2xl p-8 text-center">
        <h2 class="text-2xl font-bold text-blue-900 mb-6">Order Successful!</h2>
        <p class="mb-4">Thank you for your order. Here’s a summary:</p>
        <div class="text-left">
            <pre class="bg-gray-100 p-4 rounded">{{ print_r($data, true) }}</pre>
        </div>
    </div>
</div>
@endsection
