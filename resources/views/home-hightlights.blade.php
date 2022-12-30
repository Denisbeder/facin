@extends('app-layout')

@section('title', 'Destaques da Home')

@section('content')
    <x-container>
        <x-page-heading title="Destaques da Home"/>

        @php
            $items = [
                [
                   [
                       'title' => 'Lorem ipsum dolor sit amet',
                       'img' => 'https://picsum.photos/id/28/80/80',
                       'link' => '',
                   ],
                   [
                       'title' => 'Etiam dictum ante nisi',
                       'img' => 'https://picsum.photos/id/33/80/80',
                       'link' => '',
                   ],
                ],
                [
                   [
                       'title' => 'Nulla vel tellus varius',
                       'img' => 'https://picsum.photos/id/60/80/80',
                       'link' => '',
                   ],
                   [
                       'title' => 'Maecenas condimentum, eros sed ullamcorper',
                       'img' => null,
                       'link' => '',
                   ],
                   [
                       'title' => 'Ut ligula sapien, condimentum nec massa vel',
                       'img' => 'https://picsum.photos/id/123/80/80',
                       'link' => '',
                   ],
                ],
                [
                   [
                       'title' => 'In vitae magna leo',
                       'img' => 'https://picsum.photos/id/22/80/80',
                       'link' => '',
                   ],
                ],
                [],
                [
                   [
                       'title' => 'Nunc et purus nisl',
                       'img' => 'https://picsum.photos/id/47/80/80',
                       'link' => '',
                   ],
                   [
                       'title' => 'Curabitur at sapien ac sem',
                       'img' => 'https://picsum.photos/id/765/80/80',
                       'link' => '',
                   ],
                   [
                       'title' => 'Sed nec ex vitae neque iaculis iaculis',
                       'img' => 'https://picsum.photos/id/340/80/80',
                       'link' => '',
                   ],
                   [
                       'title' => 'Nulla vel nisi a urna posuere finibus in a enim',
                       'img' => 'https://picsum.photos/id/666/80/80',
                       'link' => '',
                   ],
                ],
                [
                   [
                       'title' => 'Etiam a elit orci',
                       'img' => 'https://picsum.photos/id/888/80/80',
                       'link' => '',
                   ],
                ],
            ];
        @endphp
        <div class="grid grid-cols-4 gap-x-6 gap-y-16">
            @foreach($items as $k => $item)
            <div class="col-auto flex flex-col">
                <div class="font-bold text-gray-600 mb-8 uppercase text-sm tracking-widest flex items-center gap-2">
                    Posição <div class="bg-gray-300 h-px w-3"></div> {{ $k + 1 }} <div class="bg-gray-300 h-px w-full flex-1"></div>
                </div>

                <div @class([
                    'space-y-3',
                    'border-2 border-dashed border-gray-300/70 rounded-md h-full' => count($item) === 0,
                ])>
                    @forelse($item as $data)
                        <x-card draggable="true" class="cursor-move">
                            <div class="px-3 flex gap-3 items-center">
                                @if(!is_null($data['img']))
                                <div class="flex-shrink-0 pointer-events-none -ml-3">
                                    <img class="h-auto w-16 rounded-l-md" src="{{ $data['img'] }}" alt="">
                                </div>
                                @endif
                                <div class="py-3 min-w-0 flex-1 pointer-events-none">
                                    <p class="truncate text-sm font-semibold text-gray-900">{{ $data['title'] }}</p>
                                    <p class="truncate text-sm text-gray-500">Página Notícias</p>
                                </div>
                                <div>
                                    <x-button color="white" class="rounded-full px-0 py-0 h-8 w-8" href="#" title="Ver">
                                        <x-icon.eye class="w-4 h-4" />
                                    </x-button>
                                    <x-button color="white" class="rounded-full px-0 py-0 h-8 w-8" href="#" title="Remover destaque">
                                        <x-icon.trash class="w-4 h-4" />
                                    </x-button>
                                </div>
                            </div>
                        </x-card>
                    @empty
                    @endforelse
                </div>
            </div>
            @endforeach
        </div>
    </x-container>
@endsection
