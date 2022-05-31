@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="p-6">
    <div class="block mb-4">
        <x-button href="ola" size="xs">Text Button</x-button>
        <x-button size="sm">Text Button</x-button>
        <x-button disabled>Text Button</x-button>
        <x-button size="lg">Text Button</x-button>
        <x-button size="xl">Text Button</x-button>
    </div>

    <div class="block mb-4">
        <x-button color="secondary" size="xs">Text Button</x-button>
        <x-button color="secondary" size="sm">Text Button</x-button>
        <x-button color="secondary">Text Button</x-button>
        <x-button color="secondary" size="lg">Text Button</x-button>
        <x-button color="secondary" size="xl">Text Button</x-button>
    </div>

    <div class="block mb-4">
        <x-button color="white" size="xs">Text Button</x-button>
        <x-button color="white" size="sm">Text Button</x-button>
        <x-button color="white">Text Button</x-button>
        <x-button color="white" size="lg">Text Button</x-button>
        <x-button color="white" size="xl">Text Button</x-button>
    </div>

    <div class="block mb-4">
        <x-button color="primary" size="xs" leftIcon="home">Text Button</x-button>
        <x-button color="primary" size="sm" leftIcon="home">Text Button</x-button>
        <x-button color="primary" leftIcon="home">Text Button</x-button>
        <x-button color="primary" size="lg" leftIcon="home">Text Button</x-button>
        <x-button color="primary" size="xl" leftIcon="home">Text Button</x-button>
    </div>

    <div class="block mb-4">
        <x-button color="white" size="xs" rightIcon="home">Text Button</x-button>
        <x-button color="white" size="sm" rightIcon="home">Text Button</x-button>
        <x-button color="white" rightIcon="home">Text Button</x-button>
        <x-button color="white" size="lg" rightIcon="home">Text Button</x-button>
        <x-button color="white" size="xl" rightIcon="home">Text Button</x-button>
    </div>

    <div class="block mb-4">
        <x-button color="primary" size="xs" roundedNone>Text Button</x-button>
        <x-button color="primary" size="sm" roundedNone>Text Button</x-button>
        <x-button color="primary" roundedNone>Text Button</x-button>
        <x-button color="primary" size="lg" roundedNone>Text Button</x-button>
        <x-button color="primary" size="xl" roundedNone>Text Button</x-button>
    </div>

    <div class="block mb-4">
        <x-button color="primary" size="xs" roundedFull>Text Button</x-button>
        <x-button color="primary" size="sm" roundedFull>Text Button</x-button>
        <x-button color="primary" roundedFull>Text Button</x-button>
        <x-button color="primary" size="lg" roundedFull>Text Button</x-button>
        <x-button color="primary" size="xl" roundedFull>Text Button</x-button>
    </div>

    <div class="block mb-4">
        <x-button color="primary" size="xs" circle leftIcon="home" />
        <x-button color="primary" size="sm" circle leftIcon="home" />
        <x-button color="primary" circle leftIcon="home" />
        <x-button color="primary" size="lg" circle leftIcon="home" />
        <x-button color="primary" size="xl" circle leftIcon="home" />
    </div>

    <div class="block mb-4">
        <x-button.group>
            <x-button href="#">Text Button</x-button>
            <x-button href="#">Text Button</x-button>
        </x-button.group>
    </div>

    <div class="block mb-4">
        <x-button.group vertical>
            <x-button href="#">Text Button</x-button>
            <x-button href="#">Text Button</x-button>
        </x-button.group>
    </div>
    
    <div class="block mb-4">
        <x-button.group>
            <x-button href="#">Text Button</x-button>
            <x-button href="#">Text Button</x-button>
            <x-button disabled >Text Button</x-button>
            <x-button>Text Button</x-button>
            <x-button>Text Button</x-button>
        </x-button.group>
    </div>

    <div class="block mb-4">
        <x-button.group>
            <x-button color="secondary" href="#">Text Button</x-button>
            <x-button color="primary" href="#">Text Button</x-button>
            <x-button color="secondary" disabled >Text Button</x-button>
            <x-button>Text Button</x-button>
            <x-button color="secondary">Text Button</x-button>
        </x-button.group>
    </div>
    
    <div class="block mb-4">
        <x-button.group>
            <button type="button" class="relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">Years</button>
            <button type="button" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">Months</button>
            <button type="button" class="relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">Days</button>
        </x-button.group>
    </div>

    <div class="block mb-4">
        <x-button.group vertical>
            <button type="button" class="relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">Years</button>
            <button type="button" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">Months</button>
            <button type="button" class="relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">Days</button>
        </x-button.group>
    </div>

    <div class="block mb-4">
        <x-button.group>
            <span class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white">
                <label for="select-all" class="sr-only">Select all</label>
                <input id="select-all" type="checkbox" name="select-all" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
            </span>
            <label for="message-type" class="sr-only">Select message type</label>
            <select id="message-type" name="message-type" class="-ml-px block w-full pl-3 pr-9 py-2 rounded-l-none rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                <option>Unread messages</option>
                <option>Sent messages</option>
                <option>All messages</option>
            </select>
        </x-button.group>
    </div>
</div>
@endsection