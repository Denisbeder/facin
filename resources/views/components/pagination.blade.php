<div class="flex items-center justify-between pt-4">
    <div class="flex flex-1 justify-between sm:hidden">
        <a href="#" class="relative inline-flex items-center rounded-md border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
        <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
    </div>
    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
        <div class="flex items-center gap-2">
            <div class="w-20">
                <x-select name="per_page" direction="left-top" selected="15" :options="[
                    ['value' => 10, 'label' => '10', 'disabled' => false],
                    ['value' => 15, 'label' => '15', 'disabled' => false],
                    ['value' => 20, 'label' => '20', 'disabled' => false],
                    ['value' => 30, 'label' => '30', 'disabled' => false],
                    ['value' => 50, 'label' => '50', 'disabled' => false],
                    ['value' => 100, 'label' => '100', 'disabled' => false],
                ]" />


            </div>
            <p class="text-sm text-gray-700">
                Mostrando
                <span class="font-medium">1</span>
                de
                <span class="font-medium">10</span>
                de
                <span class="font-medium">97</span>
                registros
            </p>
        </div>
        <div>
            <nav class="isolate inline-flex -space-x-px rounded-md" aria-label="Pagination">
                <a href="#" class="relative inline-flex items-center rounded-l-md border border-gray-200 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                    <span class="sr-only">Previous</span>
                    <!-- Heroicon name: mini/chevron-left -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                    </svg>
                </a>
                <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-200 text-gray-500 hover:bg-gray-50" -->
                <a href="#" aria-current="page" class="relative z-10 inline-flex items-center border border-indigo-500 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20">1</a>
                <a href="#" class="relative inline-flex items-center border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a>
                <a href="#" class="relative hidden items-center border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">3</a>
                <span class="relative inline-flex items-center border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-700">...</span>
                <a href="#" class="relative hidden items-center border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">8</a>
                <a href="#" class="relative inline-flex items-center border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">9</a>
                <a href="#" class="relative inline-flex items-center border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">10</a>
                <a href="#" class="relative inline-flex items-center rounded-r-md border border-gray-200 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                    <span class="sr-only">Next</span>
                    <!-- Heroicon name: mini/chevron-right -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                    </svg>
                </a>
            </nav>
        </div>
    </div>
</div>
