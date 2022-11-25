@extends('app-layout')

@section('title', 'Dashboard')

@section('content')
    <div class="px-4 sm:px-6">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <form class="flex w-full md:ml-0" action="#" method="GET">
                    <label for="search-field" class="sr-only">Search</label>
                    <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center">
                            <x-icon.magnifying-glass class="h-5 w-5" />
                        </div>
                        <input id="search-field"
                               class="block h-full w-full border-transparent py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 focus:border-transparent focus:placeholder-gray-400 focus:outline-none focus:ring-0 sm:text-sm"
                               placeholder="Search" type="search" name="search">
                    </div>
                </form>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <x-button href="#" leftIcon="plus" type="submit">Novo</x-button>
            </div>
        </div>
        <div class="-mx-4 mt-8 overflow-hidden ring-1 ring-gray-200 sm:-mx-6 md:mx-0 md:rounded-lg">
            <x-table>
                <x-slot:head>
                    <x-table.head-checkbox-cell />

                    <x-table.head-cell order>
                        NOME
                    </x-table.head-cell>

                    <x-table.head-cell order>
                        TÍTULO
                    </x-table.head-cell>

                    <x-table.head-cell order>
                        E-MAIL
                    </x-table.head-cell>

                    <x-table.head-cell order>
                        FUNÇÃO
                    </x-table.head-cell>

                    <x-table.head-cell />
                </x-slot:head>

                <x-slot:body>
                    @for($i = 0; $i < 10; $i++)
                        <x-table.body-row>
                            <x-table.body-checkbox-cell />

                            <x-table.body-cell>
                                Lindsay Walton
                            </x-table.body-cell>

                            <x-table.body-cell>
                                Front-end Developer
                            </x-table.body-cell>

                            <x-table.body-cell>
                                email@email.com
                            </x-table.body-cell>

                            <x-table.body-cell>
                                Membro
                            </x-table.body-cell>

                            <x-table.body-cell class="text-right">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                            </x-table.body-cell>
                        </x-table.body-row>
                    @endfor
                </x-slot:body>
            </x-table>
            {{--<table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="relative w-12 px-6 sm:w-16 sm:px-8">
                            <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
                        </th>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                            <button class="group inline-flex">
                                NOME
                                <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                                <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                  <!-- Heroicon name: mini/chevron-down -->
                                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                  </svg>
                                </span>
                            </button>
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            <button class="group inline-flex">
                                TÍTULO
                                <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                                <span class="ml-2 flex-none rounded bg-gray-200 text-gray-900 group-hover:bg-gray-300">
                                  <!-- Heroicon name: mini/chevron-down -->
                                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                  </svg>
                                </span>
                            </button>
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            <button class="group inline-flex">
                                E-MAIL
                                <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                                <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                  <!-- Heroicon name: mini/chevron-down -->
                                  <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                  </svg>
                                </span>
                            </button>
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            <button class="group inline-flex">
                                FUNÇÃO
                                <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                                <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                  <!-- Heroicon name: mini/chevron-down -->
                                  <svg class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                  </svg>
                                </span>
                            </button>
                        </th>
                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    <tr>
                        <td colspan="100%" class="bg-gray-50 px-3 py-3 text-sm text-gray-900">
                            Você selecionou <strong>3</strong> registros. Deseja selecionar todos os <strong>97</strong> registros?
                            <x-button color="secondary" size="xs">Selecionar todos</x-button>
                        </td>
                    </tr>
                    @for($i = 0; $i < 10; $i++)
                    <tr @class(['bg-gray-50' => in_array($i, [3,4,7])])>
                        <td class="relative w-12 px-6 sm:w-16 sm:px-8">
                            @if(in_array($i, [3,4,7]))
                                <div class="absolute inset-y-0 left-0 w-0.5 bg-indigo-600"></div>
                                <input type="checkbox" checked class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
                            @else
                                <input type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6">
                            @endif
                        </td>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Lindsay Walton</td>
                        <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 sm:table-cell">Front-end Developer</td>
                        <td class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell">lindsay.walton@example.com</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                        <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>--}}
        </div>

        <x-pagination />
    </div>

@endsection
