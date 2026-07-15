@if(session('success'))

<div class="mb-5 rounded-lg bg-green-100 border border-green-300 p-4 text-green-700">

    {{ session('success') }}

</div>

@endif