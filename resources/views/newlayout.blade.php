<div class="flex">
  <!-- Static sidebar for desktop -->
  <div class="hidden md:fixed md:inset-y-0 md:flex md:flex-col lg:w-64">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex flex-grow flex-col overflow-y-auto bg-indigo-700 pt-5">
      <div class="flex flex-shrink-0 items-center justify-center px-4 lg:justify-start">
        <img class="h-8 w-auto lg:hidden" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="Workflow" />
        <img class="hidden h-8 w-auto lg:block" src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg" alt="Workflow" />
      </div>
      <div class="mt-5 flex flex-1 flex-col">
        <nav class="flex-1 space-y-2 px-4 pb-4">
          <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600" -->
          <a href="#" class="group flex items-center justify-center rounded-md bg-indigo-800 px-2 py-2 text-sm font-medium text-white lg:justify-start">
            <!-- Heroicon name: outline/home -->
            <svg class="h-5 w-5 flex-shrink-0 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span class="ml-3 hidden pt-0.5 lg:inline">Dashboard</span>
          </a>

          <a href="#" class="group flex items-center justify-center rounded-md px-2 py-2 text-sm font-medium text-indigo-100 hover:bg-indigo-600 lg:justify-start">
            <!-- Heroicon name: outline/users -->
            <svg class="h-5 w-5 flex-shrink-0 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <span class="ml-3 hidden pt-0.5 lg:inline">Team</span>
          </a>

          <a href="#" class="group flex items-center justify-center rounded-md px-2 py-2 text-sm font-medium text-indigo-100 hover:bg-indigo-600 lg:justify-start">
            <!-- Heroicon name: outline/folder -->
            <svg class="h-5 w-5 flex-shrink-0 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
            </svg>
            <span class="ml-3 hidden pt-0.5 lg:inline">Projects</span>
          </a>

          <a href="#" class="group flex items-center justify-center rounded-md px-2 py-2 text-sm font-medium text-indigo-100 hover:bg-indigo-600 lg:justify-start">
            <!-- Heroicon name: outline/calendar -->
            <svg class="h-5 w-5 flex-shrink-0 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="ml-3 hidden pt-0.5 lg:inline">Calendar</span>
          </a>

          <a href="#" class="group flex items-center justify-center rounded-md px-2 py-2 text-sm font-medium text-indigo-100 hover:bg-indigo-600 lg:justify-start">
            <!-- Heroicon name: outline/inbox -->
            <svg class="h-5 w-5 flex-shrink-0 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
            </svg>
            <span class="ml-3 hidden pt-0.5 lg:inline">Documents</span>
          </a>

          <a href="#" class="group flex items-center justify-center rounded-md px-2 py-2 text-sm font-medium text-indigo-100 hover:bg-indigo-600 lg:justify-start">
            <!-- Heroicon name: outline/chart-bar -->
            <svg class="h-5 w-5 flex-shrink-0 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
            <span class="ml-3 hidden pt-0.5 lg:inline">Reports</span>
          </a>
        </nav>
      </div>
    </div>
  </div>

  <div class="flex flex-1 flex-col md:pl-[68px] lg:pl-64">
    <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white shadow">
      <button type="button" class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
        <span class="sr-only">Open sidebar</span>
        <!-- Heroicon name: outline/menu-alt-2 -->
        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
      </button>
      <div class="flex flex-1 items-center justify-between px-6">
        <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
        <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">New</button>
      </div>
    </div>

    <main>
      <div class="p-6">
        <div class="h-96 rounded-lg border-4 border-dashed border-gray-200">ewqeqwe</div>
      </div>
    </main>
  </div>
</div>
