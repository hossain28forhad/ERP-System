<x-ui.input
    label="Name"
    name="name"
    :value="$user->name ?? ''"
    required />

<x-ui.input
    label="Email"
    name="email"
    type="email"
    :value="$user->email ?? ''"
    required />

<x-ui.input
    label="Password"
    name="password"
    type="password" />

<x-ui.select
    label="Role"
    name="role">

    @foreach($roles as $role)

        <option
            value="{{ $role }}"
            @selected(isset($user) && $user->hasRole($role))>

            {{ $role }}

        </option>

    @endforeach

</x-ui.select>

<x-ui.button>
    Save User
</x-ui.button>