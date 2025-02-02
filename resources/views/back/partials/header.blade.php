<header class="tw-bg-white tw-px-4 tw-py-4  tw-shadow tw-flex tw-justify-between tw-items-center">
    <button @click="open = !open" class="md:tw-hidden tw-bg-teal-600 tw-text-white tw-px-3 tw-py-2 tw-rounded">
        ☰ Menu
    </button>
    <h1 class="tw-text-xl tw-font-semibold">Dashboard</h1>
    <div class="tw-flex tw-items-center tw-space-x-4">
        <input type="text" placeholder="Search here" class="tw-border tw-px-4 tw-py-1 md:tw-mr-10 tw-rounded-lg">
        <img src="{{ asset('back_auth/assets/profile/'.\Illuminate\Support\Facades\Auth::user()->image) }}" class="tw-w-10 tw-h-10 tw-cursor-pointer tw-rounded-full" alt="User">
    </div>
</header>