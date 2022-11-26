@props(['title'])

<nav class="flex mb-2" aria-label="Breadcrumb">
    <ol role="list" class="flex items-center space-x-4">
        <li>
            <div class="flex">
                <a href="/" class="text-sm font-medium text-gray-500 hover:text-gray-700">Home</a>
            </div>
        </li>
        <li>
            <div class="flex items-center">
                <x-icon.chevron-right class="h-4 w-4 flex-shrink-0 text-gray-400" />
                <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{ $title }}</a>
            </div>
        </li>
    </ol>
</nav>
<div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
        <h2 class="text-2xl font-semibold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">{{ $title }}</h2>
    </div>
    <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none flex gap-4">
        {{ $actions }}
    </div>
</div>
