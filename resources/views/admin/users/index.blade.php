@extends('admin.layouts.app')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>

        <h1 class="text-3xl font-bold">

            Users

        </h1>

        <p class="text-gray-500">

            Manage all users

        </p>

    </div>

    <a href="{{ route('admin.users.create') }}">

        <x-ui.button>

            + Add User

        </x-ui.button>

    </a>

</div>

<form>

    <div class="flex justify-between items-center mb-5">

        <x-ui.search
            placeholder="Search user..." />

    </div>

</form>

<x-ui.datatable>

    <table class="min-w-full">

        <thead class="bg-gray-100">

            <tr>

                <th class="p-4">

                    <input type="checkbox">

                </th>

                <th>Name</th>

                <th>Email</th>

                <th>Role</th>

                <th width="150">

                    Action

                </th>

            </tr>

        </thead>

        <tbody>

            @forelse($users as $user)

            <tr class="border-t hover:bg-gray-50">

                <td class="p-4">

                    <input type="checkbox">

                </td>

                <td>{{ $user->name }}</td>

                <td>{{ $user->email }}</td>

                <td>

                    <x-ui.badge>

                        {{ $user->roles->first()?->name }}

                    </x-ui.badge>

                </td>

                <td>

                    <a
                        href="{{ route('admin.users.edit',$user) }}"
                        class="text-indigo-600">

                        Edit

                    </a>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="5">

                    <x-ui.empty />

                </td>

            </tr>

            @endforelse

        </tbody>

    </table>

</x-ui.datatable>

<div class="mt-6">

    {{ $users->links() }}

</div>

@endsection