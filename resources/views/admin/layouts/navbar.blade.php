<nav class="bg-white shadow px-6 py-4 flex justify-between items-center">

    <div>

        <button class="lg:hidden">

            ☰

        </button>

    </div>

    <div class="flex items-center gap-4">

        <span class="font-semibold">

            {{ auth()->user()->name }}

        </span>

        <form action="{{ route('logout') }}" method="POST">

            @csrf

            <button class="text-red-500">

                Logout

            </button>

        </form>

    </div>

</nav>