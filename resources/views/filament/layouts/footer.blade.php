<footer class="flex flex-col items-center justify-center text-center space-y-2 p-4 text-gray-600 dark:text-gray-400">
    <a class="font-semibold" href="https://facebook.com/zhw1nq" target="_blank">
        &copy; {{ date('Y') }} zSystem • Developed by <a href="https://github.com/zhw1nq" target="_blank">zhw1nq</a>
    </a>
    @if(config('app.debug'))
        <div class="flex space-x-1 text-xs">
            <x-filament::icon
                :icon="'tabler-clock'"
                @class(['w-4 h-4 text-gray-500 dark:text-gray-400'])
            />
            <span>{{ round(microtime(true) - LARAVEL_START, 3) }}s</span>
        </div>
    @endif
</footer>
