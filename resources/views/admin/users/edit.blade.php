@extends('admin.layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">

    Edit User

</h1>

<form method="POST" action="{{ route('admin.users.update', $user) }}">
    @csrf
    @method('PUT')

    @include('admin.users.partials.form')
</form>

@endsection