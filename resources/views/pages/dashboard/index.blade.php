@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="p-6">
    <div class="card card-bordered bg-base-100">
        <div class="card-body gap-0">
            <h2 class="card-title mb-5">Title</h2>
            <input type="text" class="input input-bordered" id="title" />
        </div>
        <div x-data="{ expanded: false }">
            <div class="flex items-center justify-center h-px z-10">
                <button class="btn btn-ghost bg-base-100 border-base-content/5 text-base-content/50 btn-xs" x-on:click="expanded = !expanded">Mais opções</button>
            </div>

            <div class="bg-base-200/40 pb-8">
                <div class="card-body gap-0 pb-0" x-show="expanded" x-collapse>
                    <div class="form-control gap-4 mb-4 flex flex-row">
                        <div class="form-control flex-1">
                            <label class="label label-text" for="description">Descrição</label>
                            <input type="text" class="input input-bordered" id="description" />
                        </div>

                        <div class="form-control w-1/3">
                            <label class="label label-text" for="hat">Chapéu</label>
                            <input type="text" class="input input-bordered" id="hat" />
                        </div>
                    </div>

                    <div class="form-control">
                        <label class="label label-text" for="short_title">Título curto</label>
                        <input type="text" class="input input-bordered" id="short_title" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
