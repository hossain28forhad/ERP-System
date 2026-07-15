@props([
    'label',
    'name'
])

<div class="mb-5">

    <label class="block mb-2 font-medium">

        {{ $label }}

    </label>

    <select
        name="{{ $name }}"

        {{ $attributes->merge([
            'class'=>'w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-indigo-500 focus:ring-indigo-500'
        ]) }}>

        {{ $slot }}

    </select>

    @error($name)

        <p class="text-red-500 text-sm mt-1">

            {{ $message }}

        </p>

    @enderror

</div>