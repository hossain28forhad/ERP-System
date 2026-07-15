@props([
'type'=>'submit',
'color'=>'indigo'
])

@php

$colors=[

'indigo'=>'bg-indigo-600 hover:bg-indigo-700',

'green'=>'bg-green-600 hover:bg-green-700',

'red'=>'bg-red-600 hover:bg-red-700',

'orange'=>'bg-orange-600 hover:bg-orange-700',

];

@endphp

<button

    type="{{ $type }}"

    {{ $attributes->merge([

'class'=>'px-5 py-2.5 rounded-lg text-white transition '.$colors[$color]

]) }}>

    {{ $slot }}

</button>