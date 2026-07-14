<button
    {{ $attributes->merge([
        'class'=>'px-4 py-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 transition'
    ]) }}>

    {{ $slot }}

</button>