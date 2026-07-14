<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP System</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body
    x-data="{
        sidebarOpen:false,
        darkMode:false
    }"
    :class="darkMode ? 'bg-slate-900' : 'bg-gray-100'">

    <div class="flex min-h-screen">

        @include('admin.layouts.sidebar')

        <div class="flex-1 flex flex-col lg:ml-72 overflow-x-hidden">

            @include('admin.layouts.navbar')

            <main class="flex-1 p-6">
                @yield('content')
            </main>

            @include('admin.layouts.footer')

        </div>

    </div>

    @stack('scripts')
    <x-ui.toast />

</body>

</html>