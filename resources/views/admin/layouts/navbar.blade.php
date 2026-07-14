<nav class="sticky top-0 z-40 bg-white border-b border-gray-200 h-16">

    <div class="flex items-center justify-between h-full px-6">

        <!-- Left -->

        <div class="flex items-center gap-4">

            <!-- Mobile Sidebar Button -->

            <button
                @click="sidebarOpen=true"
                class="lg:hidden rounded-lg p-2 hover:bg-gray-100">

                ☰

            </button>

            <!-- Search -->

            <div class="hidden md:block">

                <input
                    type="text"
                    placeholder="Search..."
                    class="w-72 rounded-lg border border-gray-300 px-4 py-2 focus:border-indigo-500 focus:ring-indigo-500">

            </div>

        </div>

        <!-- Right -->

        <div class="flex items-center gap-5">

            <!-- Notification -->

            <div
                class="relative"
                x-data="{open:false}">

                <button
                    @click="open=!open"
                    class="relative">

                    🔔

                    <span
                        class="absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full">
                    </span>

                </button>

                <div
                    x-show="open"
                    @click.outside="open=false"
                    x-transition
                    class="absolute right-0 mt-4 w-80 rounded-xl bg-white shadow-xl border">

                    <div class="p-4 border-b font-semibold">

                        Notifications

                    </div>

                    <div class="divide-y">

                        <a href="#" class="block p-4 hover:bg-gray-50">

                            New User Registered

                        </a>

                        <a href="#" class="block p-4 hover:bg-gray-50">

                            Low Stock Product

                        </a>

                        <a href="#" class="block p-4 hover:bg-gray-50">

                            New Sale Completed

                        </a>

                    </div>

                </div>

            </div>

            <!-- Dark Mode -->

            <button
                @click="darkMode=!darkMode"
                class="rounded-lg p-2 hover:bg-gray-100">

                🌙

            </button>

            <!-- Profile -->

            <div
                class="relative"
                x-data="{open:false}">

                <button
                    @click="open=!open"
                    class="flex items-center gap-3">

                    <div
                        class="w-10 h-10 rounded-full bg-indigo-600 text-white flex items-center justify-center">

                        {{ strtoupper(substr(auth()->user()->name,0,1)) }}

                    </div>

                    <div class="hidden md:block text-left">

                        <div class="font-semibold">

                            {{ auth()->user()->name }}

                        </div>

                        <div class="text-sm text-gray-500">

                            Administrator

                        </div>

                    </div>

                </button>

                <div
                    x-show="open"
                    @click.outside="open=false"
                    x-transition
                    class="absolute right-0 mt-3 w-56 rounded-xl border bg-white shadow-xl">

                    <a
                        href="#"
                        class="block px-5 py-3 hover:bg-gray-100">

                        My Profile

                    </a>

                    <a
                        href="#"
                        class="block px-5 py-3 hover:bg-gray-100">

                        Account Settings

                    </a>

                    <hr>

                    <form
                        action="{{ route('logout') }}"
                        method="POST">

                        @csrf

                        <button
                            class="w-full text-left px-5 py-3 text-red-600 hover:bg-red-50">

                            Logout

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</nav>