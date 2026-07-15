@extends('admin.layouts.app')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>

        <h1 class="text-3xl font-bold">

            Users

        </h1>

        <p class="text-gray-500">

            Manage all system users.

        </p>

    </div>

    <a
        href="{{ route('admin.users.create') }}">

        <x-ui.button>

            + Add User

        </x-ui.button>

    </a>

</div>

<x-ui.table>

    <thead>

        <tr>

            <th class="p-4 text-left">Name</th>

            <th>Email</th>

            <th>Role</th>

            <th width="150">

                Action

            </th>

        </tr>

    </thead>

    <tbody>
        @forelse($users as $user)

        <tr class="border-b">

            <td class="p-4">{{ $user->name }}</td>

            <td>{{ $user->email }}</td>

            <td>

                <x-ui.badge>

                    {{ $user->roles->first()?->name }}

                </x-ui.badge>

            </td>

            <td class="space-x-2">

                <a href="{{ route('admin.users.edit', $user) }}">
                    Edit
                </a>

                <form
                    action="{{ route('admin.users.destroy', $user) }}"
                    method="POST"
                    class="inline">

                    @csrf
                    @method('DELETE')

                    <button class="text-red-600">
                        Delete
                    </button>

                </form>

            </td>

        </tr>

        @empty

        <tr>

            <td colspan="4" class="p-6 text-center">
                No users found.
            </td>

        </tr>

        @endforelse
    </tbody>

</x-ui.table>

@endsection