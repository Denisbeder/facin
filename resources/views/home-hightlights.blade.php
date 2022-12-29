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
                       'img' => '',
                       'link' => '',
                   ],
                   [
                       'title' => 'Etiam dictum ante nisi',
                       'img' => '',
                       'link' => '',
                   ],
                ],
                [
                   [
                       'title' => 'Nulla vel tellus varius',
                       'img' => '',
                       'link' => '',
                   ],
                   [
                       'title' => 'Maecenas condimentum, eros sed ullamcorper',
                       'img' => '',
                       'link' => '',
                   ],
                   [
                       'title' => 'Ut ligula sapien, condimentum nec massa vel',
                       'img' => '',
                       'link' => '',
                   ],
                ],
                [
                   [
                       'title' => 'In vitae magna leo',
                       'img' => '',
                       'link' => '',
                   ],
                ],
                [],
                [
                   [
                       'title' => 'Nunc et purus nisl',
                       'img' => '',
                       'link' => '',
                   ],
                   [
                       'title' => 'Curabitur at sapien ac sem',
                       'img' => '',
                       'link' => '',
                   ],
                   [
                       'title' => 'Sed nec ex vitae neque iaculis iaculis',
                       'img' => '',
                       'link' => '',
                   ],
                   [
                       'title' => 'Nulla vel nisi a urna posuere finibus in a enim',
                       'img' => '',
                       'link' => '',
                   ],
                ],
                [
                   [
                       'title' => 'Etiam a elit orci',
                       'img' => '',
                       'link' => '',
                   ],
                ],
            ];
        @endphp
        <div class="grid grid-cols-4 gap-x-6 gap-y-16">
            @foreach($items as $k => $item)
            <div class="col-auto flex flex-col">
                <div class="font-bold text-gray-600 mb-8 uppercase text-sm tracking-widest flex items-center gap-2">
                    Posição <div class="bg-gray-400 h-px w-3"></div> {{ $k + 1 }}
                </div>

                <div @class([
                    'space-y-3',
                    'border-2 border-dashed border-gray-300/70 rounded-md h-full' => count($item) === 0,
                ])>
                    @forelse($item as $data)
                        <x-card draggable="true">
                            <div class="px-3 py-3">{{ $data['title'] }}</div>
                        </x-card>
                    @empty
                    @endforelse
                </div>
            </div>
            @endforeach
        </div>
    </x-container>
@endsection
