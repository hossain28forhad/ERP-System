<x-guest-layout>
    <div class="min-h-screen flex bg-gray-100">

        <!-- Left -->
        <div class="hidden lg:flex w-1/2 bg-indigo-700 items-center justify-center p-10">

            <div class="text-white">

                <h1 class="text-5xl font-extrabold mb-6">
                    ERP System
                </h1>

                <p class="text-xl text-indigo-100 leading-8 max-w-md">
                    Inventory, Sales, Purchase, Accounting and HR Management
                    in one modern ERP platform.
                </p>

            </div>

        </div>

        <!-- Right -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6">

            <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">

                <div class="text-center mb-8">

                    <h2 class="text-3xl font-bold">
                        Welcome Back
                    </h2>

                    <p class="text-gray-500 mt-2">
                        Sign in to continue
                    </p>

                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">

                    @csrf

                    <div class="mb-5">

                        <label class="block mb-2 font-medium">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            class="w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    </div>

                    <div class="mb-5">

                        <label class="block mb-2 font-medium">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            required
                            class="w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    </div>

                    <div class="flex justify-between items-center mb-6">

                        <label class="flex items-center gap-2">

                            <input type="checkbox" name="remember">

                            Remember Me

                        </label>

                        @if(Route::has('password.request'))

                            <a href="{{ route('password.request') }}"
                               class="text-indigo-600 hover:underline">

                                Forgot Password?

                            </a>

                        @endif

                    </div>

                    <button
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-3 rounded-lg font-semibold transition">

                        Login

                    </button>

                </form>

            </div>

        </div>

    </div>
</x-guest-layout>