@extends('admin.layouts.app')

@section('content')

<div class="mb-8">

    <h1 class="text-3xl font-bold">

        Dashboard

    </h1>

    <p class="text-gray-500">

        Welcome back,
        {{ auth()->user()->name }}

    </p>

</div>

<div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6">

    <x-admin.card
        title="Products"
        value="120"
        icon="📦"
        growth="+15% This Month" />

    <x-admin.card
        title="Customers"
        value="58"
        icon="👥"
        growth="+8% This Month" />

    <x-admin.card
        title="Sales"
        value="$12,500"
        icon="💰"
        growth="+22% This Month" />

    <x-admin.card
        title="Purchase"
        value="$8,200"
        icon="🛒"
        growth="+5% This Month" />

</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">

    <div
        class="lg:col-span-2 bg-white rounded-xl shadow border p-6">

        <h3 class="font-bold text-lg mb-4">

            Monthly Sales

        </h3>

        <div id="salesChart"></div>

    </div>

    <div
        class="bg-white rounded-xl shadow border p-6">

        <h3 class="font-bold text-lg mb-4">

            Quick Actions

        </h3>

        <div class="space-y-3">

            <x-ui.button class="w-full">

                Add Product

            </x-ui.button>

            <x-ui.button class="w-full bg-green-600 hover:bg-green-700">

                New Sale

            </x-ui.button>

            <x-ui.button class="w-full bg-orange-600 hover:bg-orange-700">

                Purchase

            </x-ui.button>

        </div>

    </div>

</div>

<div class="grid lg:grid-cols-2 gap-6 mt-8">

    <div
        class="bg-white rounded-xl shadow border">

        <div class="p-5 border-b">

            <h3 class="font-bold">

                Recent Orders

            </h3>

        </div>

        <table class="w-full">

            <thead>

                <tr class="bg-gray-50">

                    <th class="p-3 text-left">Invoice</th>

                    <th>Status</th>

                    <th>Total</th>

                </tr>

            </thead>

            <tbody>

                <tr class="border-t">

                    <td class="p-3">INV-001</td>

                    <td class="text-green-600">Paid</td>

                    <td>$120</td>

                </tr>

                <tr class="border-t">

                    <td class="p-3">INV-002</td>

                    <td class="text-yellow-600">Pending</td>

                    <td>$350</td>

                </tr>

            </tbody>

        </table>

    </div>

    <div
        class="bg-white rounded-xl shadow border">

        <div class="p-5 border-b">

            <h3 class="font-bold">

                Low Stock Products

            </h3>

        </div>

        <div class="p-5 space-y-4">

            <div class="flex justify-between">

                <span>Mouse</span>

                <span class="text-red-600">

                    2 Left

                </span>

            </div>

            <div class="flex justify-between">

                <span>Keyboard</span>

                <span class="text-red-600">

                    5 Left

                </span>

            </div>

        </div>

    </div>

</div>

@endsection

@push('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function() {

        new ApexCharts(

            document.querySelector("#salesChart"),

            {

                chart: {

                    type: 'area',

                    height: 320

                },

                series: [{

                    name: 'Sales',

                    data: [20, 30, 45, 40, 60, 75, 90]

                }],

                xaxis: {

                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul']

                }

            }

        ).render();

    });
</script>

@endpush