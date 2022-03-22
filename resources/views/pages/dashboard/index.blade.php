@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <x-card class="m-6">
        <x-card.header title="Dropdowns" />
        <x-card.body>
            <x-dropdown class="mr-2">
                <x-slot name="trigger">
                    <x-button rounded="full" variant="outline-light">
                        <x-icon name="dots-vertical-rounded" />
                    </x-button>
                </x-slot>
                <x-dropdown.item href="/" title="Item 1" />
                <x-dropdown.item href="/" title="Item 2" />
                <x-dropdown.item href="/" title="Item 3" />
                <x-dropdown.item href="/" title="Item 4" />
                <x-dropdown.item href="/" title="Item 5" />
                <x-dropdown.item href="/" title="Item 6" />
            </x-dropdown.item>

            <x-dropdown class="mr-2">
                <x-dropdown.item href="/" title="Item 1" />
                <x-dropdown.item href="/" title="Item 2" />
                <x-dropdown.item href="/" title="Item 3" />
                <x-dropdown.item href="/" title="Item 4" />
                <x-dropdown.item href="/" title="Item 5" />
                <x-dropdown.item href="/" title="Item 6" />
            </x-dropdown.item>

            <x-dropdown class="mr-2">
                <x-slot name="trigger">
                    <x-button title="Dropdown" />
                </x-slot>
                <x-dropdown.item href="/" title="Item 1" />
                <x-dropdown.item href="/" title="Item 2" />
                <x-dropdown.item href="/" title="Item 3" />
                <x-dropdown.item href="/" title="Item 4" />
                <x-dropdown.item href="/" title="Item 5" />
                <x-dropdown.item href="/" title="Item 6" />
            </x-dropdown.item>

            <x-dropdown>
                <x-slot name="trigger">
                    <x-button>
                        Dropdown
                        <x-icon name="chevron-down" size="text-base" ::class="open || '-rotate-90'" class="transition-all duration-300 ml-1"  />
                    </x-button>
                </x-slot>
                <x-dropdown.item href="/" title="Item 1" />
                <x-dropdown.item href="/" title="Item 2" />
                <x-dropdown.item href="/" title="Item 3" />
                <x-dropdown.item href="/" title="Item 4" />
                <x-dropdown.item href="/" title="Item 5" />
                <x-dropdown.item href="/" title="Item 6" />
            </x-dropdown.item>
        </x-card.body>
    </x-card>

    <x-card class="m-6">
        <x-card.header title="Buttons" />
        <x-card.body>
            <div class="grid grid-cols-4 gap-4">
                <x-button title="Dark" variant="dark" loading="true" />
                <x-button title="Light" variant="light" />
                <x-button title="White" variant="white" />
                <x-button title="Primary" variant="primary" loading="true" />
                <x-button title="Secondary" variant="secondary" />
                <x-button title="Warning" variant="warning" />
                <x-button title="Info" variant="info" rounded="full" />
                <x-button title="Success" variant="success" rounded="none" />
                <x-button title="Danger" variant="danger" rounded="xl" />
                <x-button title="Link" variant="link" href="/post" />
                <x-button title="Outline primary" variant="outline-primary" />
                <x-button title="Outline secondary" variant="outline-secondary" />
                <x-button title="Outline success" variant="outline-success" />
                <x-button title="Outline danger" variant="outline-danger" />
                <x-button title="Outline info" variant="outline-info" />
                <x-button title="Outline warning" variant="outline-warning" />
                <x-button title="Outline dark" variant="outline-dark" />
                <x-button title="Outline light" variant="outline-light" />
                <x-button title="Outline white" variant="outline-white" />
            </div>
        </x-card.body>
    </x-card>

    <x-card class="m-6">
        <x-card.header title="Cards" />
        <x-card.body>
            <div class="grid grid-cols-2 items-start gap-4">                
                <x-card>
                    <x-card.header title="Card normal" />
                    <x-card.body>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                    </x-card.body>
                    <x-card.footer>
                        <x-button title="Button 1" variant="outline-light" />
                        <x-button title="Button 2" class="ml-2" />
                    </x-card.footer>
                </x-card>

                <x-card>
                    <x-card.header title="Card Footer Collapse" />
                    <x-card.body>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                    </x-card.body>
                    <x-card.footer-collapse>
                        <x-button title="Button 1" variant="outline-light" />
                        <x-button title="Button 2" class="ml-2" />
                    </x-card.footer-collapse>
                </x-card>

                <div>
                    <h3 class="font-bold mb-3">Card Non Header</h3>
                    <x-card>
                        <x-card.body>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                        </x-card.body>
                        <x-card.footer>
                            <x-button title="Button 1" variant="outline-light" />
                            <x-button title="Button 2" class="ml-2" />
                        </x-card.footer>
                    </x-card>
                </div>

                <div>
                    <h3 class="font-bold mb-3">Card Non Header and Footer Collapse</h3>
                    <x-card>
                        <x-card.body>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                        </x-card.body>
                        <x-card.footer-collapse title="Mostrar mais">
                            <x-button title="Button 1" variant="outline-light" />
                            <x-button title="Button 2" class="ml-2" />
                        </x-card.footer-collapse>
                    </x-card>
                </div>

                <x-card>
                    <x-card.header title="Card Non Footer" />
                    <x-card.body>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                    </x-card.body>
                </x-card>

                <div>
                    <h3 class="font-bold mb-3">Card Only Body</h3>
                    <x-card>
                        <x-card.body>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                        </x-card.body>
                    </x-card>
                </div>
            </div>
        </x-card.body>
    </x-card>
@endsection