@extends('admin.layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Dashboard
</h1>

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

    <div class="bg-white rounded-lg shadow p-6">
        <h3>Total Products</h3>
        <p class="text-3xl font-bold mt-2">0</p>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <h3>Total Customers</h3>
        <p class="text-3xl font-bold mt-2">0</p>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <h3>Total Suppliers</h3>
        <p class="text-3xl font-bold mt-2">0</p>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <h3>Total Sales</h3>
        <p class="text-3xl font-bold mt-2">0</p>
    </div>

</div>

@endsection