<div class="relative">
    <x-button color="white" rightIcon="chevron-up-down" class="cursor-default" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
        <span class="block truncate">{{ $label }}</span>
    </x-button>

    <!--
      Select popover, show/hide based on select state.

      Entering: ""
        From: ""
        To: ""
      Leaving: "transition ease-in duration-100"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <ul class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-gray-200 focus:outline-none sm:text-sm"
        tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">

        <li class="text-gray-900 relative cursor-default select-none py-1 pl-3 pr-9 hover:text-white hover:bg-indigo-600" id="listbox-option-0" role="option">
            <span class="font-normal block truncate">Denisbeder Duek Carvalho</span>
        </li>

        <li class="text-gray-900 relative cursor-default select-none py-1 pl-3 pr-9 hover:text-white hover:bg-indigo-600" id="listbox-option-0" role="option">
            <span class="font-normal block truncate">Ariana Trajano de Oliveira</span>
        </li>

        <li class="text-white bg-indigo-600 relative cursor-default select-none py-1 pl-3 pr-9 hover:text-white hover:bg-indigo-600" id="listbox-option-0" role="option">
            <span class="font-semibold block truncate">Miguel Trajano Duek</span>
            <span class="text-white absolute inset-y-0 right-0 flex items-center pr-4">
                <x-icon.check class="h-4 w-4" />
            </span>
        </li>

        <li class="text-gray-900 relative cursor-default select-none py-1 pl-3 pr-9 hover:text-white hover:bg-indigo-600" id="listbox-option-0" role="option">
            <span class="font-normal block truncate">Wade Cooper</span>
        </li>
    </ul>
</div>

