<div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">

    <div class="flex justify-between items-center">

        <div>

            <p class="text-sm text-gray-500">

                {{ $title }}

            </p>

            <h2 class="text-3xl font-bold mt-2">

                {{ $value }}

            </h2>

        </div>

        <div
            class="w-14 h-14 rounded-full bg-indigo-100 flex items-center justify-center text-2xl">

            {{ $icon }}

        </div>

    </div>

    <div class="mt-4 text-green-600 text-sm">

        ↑ {{ $growth }}

    </div>

</div>