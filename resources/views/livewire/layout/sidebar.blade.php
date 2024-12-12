<div class="w-64 flex flex-col fixed h-screen bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Logo e título -->
    <div class="shrink-0 flex items-center">
        <a href="{{ route('dashboard') }}" wire:navigate>
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
        </a>
    </div>

    <!-- Navegação -->
    <nav class="flex-1 mt-4">
        <ul class="space-y-1">
            <li>
                <a href="/dashboard" class="flex items-center p-3 hover:bg-blue-800">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 10l1.79 1.79a1 1 0 001.42 0L12 6l5.79 5.79a1 1 0 001.42 0L21 10m-9 11v-6a1 1 0 00-1-1H4a1 1 0 00-1 1v6a1 1 0 001 1h6a1 1 0 001-1zm8-11V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v6a1 1 0 001 1h4a1 1 0 001-1z">
                        </path>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="/ecommerce" class="flex items-center p-3 hover:bg-blue-800">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20 13V8a1 1 0 00-1-1h-6V4h-2v3H5a1 1 0 00-1 1v5H3a1 1 0 00-1 1v1a1 1 0 001 1h2m0 0v1a1 1 0 001 1h12a1 1 0 001-1v-1h2a1 1 0 001-1v-1a1 1 0 00-1-1h-2m0 0H5">
                        </path>
                    </svg>
                    E-Commerce
                </a>
            </li>
        </ul>
    </nav>
</div>
