@props([
    'placeholder' => 'Search...'
])

<div class="relative">

    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="{{ $placeholder }}"
        class="w-80 rounded-lg border border-gray-300 pl-10 pr-4 py-2 focus:ring-indigo-500 focus:border-indigo-500">

    <svg
        class="absolute left-3 top-2.5 w-5 h-5 text-gray-400"
        fill="none"
        stroke="currentColor"
        viewBox="0 0 24 24">

        <path stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0a7 7 0 0114 0z"/>

    </svg>

</div>