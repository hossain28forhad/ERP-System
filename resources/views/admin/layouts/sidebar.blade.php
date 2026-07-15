<aside
    class="fixed inset-y-0 left-0 z-50 w-72 bg-slate-900 text-white transition-all duration-300 lg:translate-x-0"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'">

    <!-- Logo -->
    <div class="h-16 flex items-center justify-between px-6 border-b border-slate-800">

        <div>

            <h1 class="text-2xl font-bold tracking-wide">

                ERP

            </h1>

            <p class="text-xs text-slate-400">

                Management System

            </p>

        </div>

        <button
            class="lg:hidden"
            @click="sidebarOpen=false">

            ✕

        </button>

    </div>

    <!-- Menu -->

    <div class="py-4 overflow-y-auto h-[calc(100vh-64px)]">

        <ul class="space-y-1 px-3">

            <!-- Dashboard -->

            <li>

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 rounded-lg px-4 py-3 transition
                    {{ request()->routeIs('admin.dashboard')
                        ? 'bg-indigo-600 text-white'
                        : 'hover:bg-slate-800 text-slate-300' }}">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 12l9-9 9 9v8a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1z"/>

                    </svg>

                    Dashboard

                </a>

            </li>

            <!-- User Management -->

            <li
                x-data="{open:false}">

                <button
                    @click="open=!open"
                    class="w-full flex justify-between items-center px-4 py-3 rounded-lg hover:bg-slate-800">

                    <div class="flex items-center gap-3">

                        👤

                        User Management

                    </div>

                    <span x-text="open ? '-' : '+'"></span>

                </button>

                <ul
                    x-show="open"
                    x-transition
                    class="ml-8 mt-2 space-y-2">

                    <li>

                        <a
                            href="{{ route('admin.users.index') }}"
                            class="block hover:text-indigo-400">

                            Users

                        </a>

                    </li>

                    <li>

                        <a
                            href="#"
                            class="block hover:text-indigo-400">

                            Roles

                        </a>

                    </li>

                    <li>

                        <a
                            href="#"
                            class="block hover:text-indigo-400">

                            Permissions

                        </a>

                    </li>

                </ul>

            </li>

            <!-- Inventory -->

            <li
                x-data="{open:false}">

                <button
                    @click="open=!open"
                    class="w-full flex justify-between items-center px-4 py-3 rounded-lg hover:bg-slate-800">

                    <div class="flex items-center gap-3">

                        📦

                        Inventory

                    </div>

                    <span x-text="open ? '-' : '+'"></span>

                </button>

                <ul
                    x-show="open"
                    x-transition
                    class="ml-8 mt-2 space-y-2">

                    <li>

                        <a href="#" class="block hover:text-indigo-400">

                            Products

                        </a>

                    </li>

                    <li>

                        <a href="#" class="block hover:text-indigo-400">

                            Categories

                        </a>

                    </li>

                    <li>

                        <a href="#" class="block hover:text-indigo-400">

                            Brands

                        </a>

                    </li>

                    <li>

                        <a href="#" class="block hover:text-indigo-400">

                            Units

                        </a>

                    </li>

                </ul>

            </li>

            <!-- Purchase -->

            <li>

                <a
                    href="#"
                    class="flex gap-3 px-4 py-3 rounded-lg hover:bg-slate-800">

                    🛒 Purchase

                </a>

            </li>

            <!-- Sales -->

            <li>

                <a
                    href="#"
                    class="flex gap-3 px-4 py-3 rounded-lg hover:bg-slate-800">

                    💰 Sales

                </a>

            </li>

            <!-- Reports -->

            <li>

                <a
                    href="#"
                    class="flex gap-3 px-4 py-3 rounded-lg hover:bg-slate-800">

                    📊 Reports

                </a>

            </li>

            <!-- Settings -->

            <li>

                <a
                    href="#"
                    class="flex gap-3 px-4 py-3 rounded-lg hover:bg-slate-800">

                    ⚙ Settings

                </a>

            </li>

        </ul>

    </div>

</aside>