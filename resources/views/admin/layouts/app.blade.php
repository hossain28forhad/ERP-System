<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP System</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="flex">

        @include('admin.layouts.sidebar')

        <div class="flex-1 min-h-screen">

            @include('admin.layouts.navbar')

            <main class="p-6">
                @yield('content')
            </main>

        </div>

    </div>

    @include('admin.layouts.footer')
    @stack('scripts')
</body>

</html>