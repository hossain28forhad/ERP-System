@extends('admin.layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">

    Create User

</h1>

<form method="POST" action="{{ route('admin.users.store') }}">
    @csrf

    @include('admin.users.partials.form')
</form>

@endsection