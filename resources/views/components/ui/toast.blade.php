@if(session('success'))

<div
    x-data="{show:true}"
    x-show="show"
    x-init="setTimeout(()=>show=false,3000)"
    class="fixed top-5 right-5 bg-green-600 text-white px-6 py-3 rounded-lg shadow">

    {{ session('success') }}

</div>

@endif