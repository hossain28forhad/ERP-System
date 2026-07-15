@props([
'label',
'name'
])

<div class="mb-5">

<label class="block mb-2">

{{ $label }}

</label>

<textarea

name="{{ $name }}"

rows="5"

{{ $attributes->merge([

'class'=>'w-full rounded-lg border border-gray-300 px-4 py-2'

]) }}

>{{ old($name) }}</textarea>

</div>