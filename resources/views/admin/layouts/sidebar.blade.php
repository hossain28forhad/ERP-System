<aside class="w-64 bg-slate-900 text-white min-h-screen hidden lg:block">

    <div class="text-center py-6 text-2xl font-bold border-b border-slate-700">

        ERP SYSTEM

    </div>

    <nav class="p-4 space-y-2">

        <a href="{{ route('admin.dashboard') }}"
           class="block px-4 py-3 rounded-lg
           {{ request()->routeIs('admin.dashboard')
                ? 'bg-indigo-600'
                : 'hover:bg-slate-700' }}">

            Dashboard

        </a>

        <a href="#" class="block px-4 py-3 rounded hover:bg-slate-700">
            Users
        </a>

        <a href="#" class="block px-4 py-3 rounded hover:bg-slate-700">
            Products
        </a>

        <a href="#" class="block px-4 py-3 rounded hover:bg-slate-700">
            Sales
        </a>

    </nav>

</aside>