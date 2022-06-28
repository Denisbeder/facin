@props(['name'])

<div {{ $attributes }} x-data="DateTime" class="input-group" x-bind="event">
    <input id="{{ $name }}" name="{{ $name }}[date]" type="date" class="input input-bordered w-3/5 focus:z-20 text-center" data-date x-ref="date" />                    
    <span class="z-0"><x-icon name="calendar" class="w-5 h-5" /></span>
    <div class="datetime w-2/5 z-10 -ml-px">    
        <input name="{{ $name }}[time]" type="time" class="input input-bordered border-r-0 hidden" x-ref="time" />
    </div>
</div>