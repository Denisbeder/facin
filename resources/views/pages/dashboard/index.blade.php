@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="p-6">
<div x-data="{ expanded: false }">
    <button @click="expanded = ! expanded">Toggle Content</button>
 
    <p x-show="expanded" x-collapse>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>
</div>
@endsection