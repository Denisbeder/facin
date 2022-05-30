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
</div>
@endsection