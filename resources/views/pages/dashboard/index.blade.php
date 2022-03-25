@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <x-card class="m-6">
        <x-card.header label="Dropdowns" />
        <x-card.body>
            <x-dropdown class="mr-2">
                <x-slot name="trigger">
                    <x-button rounded="full" circle variant="outline-light">
                        <x-icon name="dots-vertical-rounded" />
                    </x-button>
                </x-slot>
                <x-dropdown.item href="/" label="Item 1" />
                <x-dropdown.item href="/" label="Item 2" />
                <x-dropdown.item href="/" label="Item 3" />
                <x-dropdown.item href="/" label="Item 4" />
                <x-dropdown.item href="/" label="Item 5" />
                <x-dropdown.item href="/" label="Item 6" />
            </x-dropdown.item>

            <x-dropdown class="mr-2">
                <x-dropdown.item href="/" label="Item 1" />
                <x-dropdown.item href="/" label="Item 2" />
                <x-dropdown.item href="/" label="Item 3" />
                <x-dropdown.item href="/" label="Item 4" />
                <x-dropdown.item href="/" label="Item 5" />
                <x-dropdown.item href="/" label="Item 6" />
            </x-dropdown.item>

            <x-dropdown class="mr-2">
                <x-slot name="trigger">
                    <x-button label="Dropdown" />
                </x-slot>
                <x-dropdown.item href="/" label="Item 1" />
                <x-dropdown.item href="/" label="Item 2" />
                <x-dropdown.item href="/" label="Item 3" />
                <x-dropdown.item href="/" label="Item 4" />
                <x-dropdown.item href="/" label="Item 5" />
                <x-dropdown.item href="/" label="Item 6" />
            </x-dropdown.item>

            <x-dropdown>
                <x-slot name="trigger">
                    <x-button>
                        Dropdown
                        <x-icon name="chevron-down" size="text-base" ::class="open || '-rotate-90'" class="transition-all duration-300 ml-1"  />
                    </x-button>
                </x-slot>
                <x-dropdown.item href="/" label="Item 1" />
                <x-dropdown.item href="/" label="Item 2" />
                <x-dropdown.item href="/" label="Item 3" />
                <x-dropdown.item href="/" label="Item 4" />
                <x-dropdown.item href="/" label="Item 5" />
                <x-dropdown.item href="/" label="Item 6" />
            </x-dropdown.item>
        </x-card.body>
    </x-card>

    <x-card class="m-6">
        <x-card.header label="Inputs" />
        <x-card.body>
            <x-form.control>
                <x-form.input.text placeholder="Basic usage" name="name" />
            </x-form.control>

            <x-form.control>
                <x-form.label for="label_" label="Label" />
                <x-form.input.text name="label_" />
            </x-form.control>

            <x-form.control inline>
                <x-form.label for="inline_" label="Inline" />
                <x-form.input.text name="inline_" />
            </x-form.control>

            <x-form.control>
                <x-form.label for="custom_label" label="Custom Label" class="font-normal text-sm text-slate-500" />
                <x-form.input.text name="custom_label" />
            </x-form.control>

            <x-form.control inline>
                <x-form.label for="custom_inline_label" label="Custom Inline Label" class="font-normal text-sm text-slate-500" />
                <x-form.input.text name="custom_inline_label" />
            </x-form.control>

            <x-form.control class="bg-slate-200 p-4 rounded-full">
                <x-form.input.text placeholder="Control Custom" name="control_custom" class="bg-transparent border-0 rounded-full focus:ring-slate-400 focus:bg-slate-100" />
            </x-form.control>

            <x-form.control>
                <x-form.label for="left_icon" label="Left Icon" />
                <x-form.input.text leftIcon="lock-alt" placeholder="Left Icon" name="left_icon" />
            </x-form.control>

            <x-form.control>
                <x-form.label for="right_icon" label="Right Icon" />
                <x-form.input.text rightIcon="lock-alt" placeholder="Right Icon" name="right_icon" />
            </x-form.control>

            <x-form.control>
                <x-form.label for="left_right_icon" label="Left Right Icon" />
                <x-form.input.text leftIcon="lock-alt" rightIcon="right-arrow-circle" placeholder="Left Right Icon" name="left_right_icon" />
            </x-form.control>

            <x-form.control>
                <x-form.label for="prefix_input" label="Prefix" />
                <x-form.input.text prefix="www." placeholder="..." name="prefix_input" />
            </x-form.control>

            <x-form.control>
                <x-form.label for="suffix_input" label="Suffix" />
                <x-form.input.text suffix="@gmail.com" placeholder="Digite..." name="suffix_input" />
            </x-form.control>

            <x-form.control>
                <x-form.label for="prefix_suffix_input" label="Prefix Suffix" />
                <x-form.input.text prefix="www." suffix=".com.br" placeholder="..." name="prefix_suffix_input" />
            </x-form.control>
        </x-card.body>
    </x-card>

    <x-card class="m-6">
        <x-card.header label="Buttons" />
        <x-card.body>
            <h3 class="font-bold mb-3">Buttons Filled</h3>
            <div class="grid grid-cols-4 items-start gap-4 mb-6">
                <x-button label="Primary" variant="primary" />
                <x-button label="Secondary" variant="secondary" />
                <x-button label="Warning" variant="warning" />
                <x-button label="Info" variant="info" rounded="full" />
                <x-button label="Success" variant="success" rounded="none" />
                <x-button label="Danger" variant="danger" rounded="xl" />
                <x-button label="Link" variant="link" href="/post" />
                <x-button label="Dark" variant="dark" loading="true" />
                <x-button label="Light" variant="light" />
                <x-button label="White" variant="white" />
            </div>

            <h3 class="font-bold mb-3">Buttons Outline</h3>
            <div class="grid grid-cols-4 items-start gap-4">
                <x-button label="Outline primary" variant="outline-primary" />
                <x-button label="Outline secondary" variant="outline-secondary" />
                <x-button label="Outline success" variant="outline-success" />
                <x-button label="Outline danger" variant="outline-danger" />
                <x-button label="Outline info" variant="outline-info" />
                <x-button label="Outline warning" variant="outline-warning" />
                <x-button label="Outline dark" variant="outline-dark" />
                <x-button label="Outline light" variant="outline-light" />
                <x-button label="Outline white" variant="outline-white" />
            </div>

            <div class="mt-6">
                <h3 class="font-bold mb-3">Buttons Sizes</h3>
                <x-button label="Size xs" variant="primary" size="xs" />
                <x-button label="Size sm" variant="primary" size="sm" />
                <x-button label="Size md" variant="primary" size="md" />
                <x-button label="Size lg" variant="primary" size="lg" />
                <x-button label="Size xl" variant="primary" size="xl" />
                <x-button label="Size 2xl" variant="primary" size="2xl" />
            </div>

            <div class="mt-6">
                <h3 class="font-bold mb-3">Buttons Circle</h3>
                <x-button circle size="xs">
                    <x-icon name="dots-vertical-rounded" />
                </x-button>
                <x-button circle size="sm">
                    <x-icon name="dots-vertical-rounded" />
                </x-button>
                <x-button circle size="md">
                    <x-icon name="dots-vertical-rounded" />
                </x-button>
                <x-button circle size="lg">
                    <x-icon name="dots-vertical-rounded" />
                </x-button>
                <x-button circle size="xl">
                    <x-icon name="dots-vertical-rounded" />
                </x-button>
                <x-button circle size="2xl">
                    <x-icon name="dots-vertical-rounded" />
                </x-button>
            </div>
        </x-card.body>
    </x-card>

    <x-card class="m-6">
        <x-card.header label="Cards" />
        <x-card.body>
            <div class="grid grid-cols-2 items-start gap-4">                
                <x-card>
                    <x-card.header label="Card normal" />
                    <x-card.body>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                    </x-card.body>
                    <x-card.footer>
                        <x-button label="Button 1" variant="outline-light" />
                        <x-button label="Button 2" class="ml-2" />
                    </x-card.footer>
                </x-card>

                <x-card>
                    <x-card.header label="Card Footer Collapse" />
                    <x-card.body>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                    </x-card.body>
                    <x-card.footer-collapse>
                        <x-button label="Button 1" variant="outline-light" />
                        <x-button label="Button 2" class="ml-2" />
                    </x-card.footer-collapse>
                </x-card>

                <div>
                    <h3 class="font-bold mb-3">Card Non Header</h3>
                    <x-card>
                        <x-card.body>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                        </x-card.body>
                        <x-card.footer>
                            <x-button label="Button 1" variant="outline-light" />
                            <x-button label="Button 2" class="ml-2" />
                        </x-card.footer>
                    </x-card>
                </div>

                <div>
                    <h3 class="font-bold mb-3">Card Non Header and Footer Collapse</h3>
                    <x-card>
                        <x-card.body>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                        </x-card.body>
                        <x-card.footer-collapse label="Mostrar mais">
                            <x-button label="Button 1" variant="outline-light" />
                            <x-button label="Button 2" class="ml-2" />
                        </x-card.footer-collapse>
                    </x-card>
                </div>

                <x-card>
                    <x-card.header label="Card Non Footer" />
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

    <x-card class="m-6">
        <x-card.header label="Collapses" />
        <x-card.body>
            <div class="grid grid-cols-2 items-start gap-4">
                <x-collapse label="DEFAULT - Ipsum is simply dummy text" class="border rounded-md" triggerClass="font-bold text-blue-600">
                    <x-collapse.body class="border-t">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                    </x-collapse.body>
                </x-collapse>    

                <x-collapse class="border rounded-md">
                    <x-slot name="trigger">
                        <x-collapse.trigger>
                            (CUSTOM TRIGGER) Ipsum is simply dummy text
                        </x-collapse.trigger>
                    </x-slot>
                    <x-collapse.body>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                    </x-collapse.body>
                </x-collapse>     

                <x-collapse leftIcon label="(LEFT ICON) Ipsum is simply dummy text" class="border rounded-md">
                    <x-collapse.body class="border-t">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                    </x-collapse.body>
                </x-collapse> 

                <x-collapse class="rounded-md border border-yellow-500">
                    <x-slot name="trigger">
                        <div class="bg-yellow-400 p-3 cursor-pointer text-red-500 rounded-t-md">
                            (CUSTOM) Ipsum is simply dummy text
                        </div>
                    </x-slot>
                    <x-collapse.body class="bg-yellow-100 border-t border-t-yellow-500 rounded-b-md">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                    </x-collapse.body>
                </x-collapse>  
            </div>
        </x-card.body>
    </x-card>
@endsection