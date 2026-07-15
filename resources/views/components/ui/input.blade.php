@props([
    'label',
    'name',
    'type' => 'text',
    'value' => '',
    'required' => false,
])

<div class="mb-5">

    <label
        for="{{ $name }}"
        class="block mb-2 text-sm font-medium text-gray-700">

        {{ $label }}

        @if($required)
            <span class="text-red-500">*</span>
        @endif

    </label>

    <input
        id="{{ $name }}"
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        {{ $required ? 'required' : '' }}

        {{ $attributes->merge([
            'class' => 'w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:border-indigo-500 focus:ring-indigo-500'
        ]) }}>

    @error($name)
        <p class="mt-1 text-sm text-red-600">
            {{ $message }}
        </p>
    @enderror

</div>