@extends('layouts.app')

@section('title', 'Order Lists')

@section('content')
<div class="absolute top-48 left-8 flex flex-col gap-4">
    <a href="{{ url('/') }}" class="bg-red-500 text-white font-bold py-3 px-8 rounded-lg shadow-lg hover:bg-red-600 transition duration-300">Homepage</a>
    <a href="{{ url()->previous() }}" class="bg-red-300 text-white font-bold py-3 px-8 rounded-lg shadow-lg hover:bg-red-400 transition duration-300">Back</a>
</div>
<div class="w-full max-w-4xl mx-auto flex flex-col items-center justify-center">
    <div class="bg-[#1a4d8c] text-white p-4 text-center font-bold text-xl w-full mb-4">
        Order Lists
    </div>
    <h2 class="text-3xl font-bold text-[#1a4d8c] mb-8">Maar Tsel Precision, Ltd.</h2>
    <table class="w-full bg-white border border-gray-300 rounded-lg shadow-lg overflow-hidden">
        <thead class="bg-[#e6f0ff] text-[#1a4d8c] font-bold text-lg">
            <tr>
                <th class="p-4 border-b">Product ID</th>
                <th class="p-4 border-b">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="p-4 border-b">INV-001</td>
                <td class="p-4 border-b">In Stock</td>
            </tr>
            <tr>
                <td class="p-4 border-b">INV-002</td>
                <td class="p-4 border-b">Shipped</td>
            </tr>
            <tr>
                <td class="p-4 border-b">INV-003</td>
                <td class="p-4 border-b">Processing</td>
            </tr>
            <tr>
                <td class="p-4 border-b">INV-004</td>
                <td class="p-4 border-b">In Stock</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection