@extends('admin.layouts.app')

@section('content')

<x-admin.breadcrumb title="Dashboard"/>

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

    <x-admin.card
        title="Products"
        value="0"/>

    <x-admin.card
        title="Customers"
        value="0"/>

    <x-admin.card
        title="Suppliers"
        value="0"/>

    <x-admin.card
        title="Sales"
        value="0"/>

</div>

@endsection