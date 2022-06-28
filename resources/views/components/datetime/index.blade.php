@props([
    'name', 
    'updateMinDateTo' => false, 
    'updateMaxDateTo' => false
])

<div {{ $attributes }} x-data="DateTime" class="input-group">
    <input 
        id="{{ $name }}[date]" 
        name="{{ $name }}[date]" 
        type="date"
        class="input input-bordered w-3/5 focus:z-20 text-center" 
        x-ref="date"
        @if($updateMinDateTo)data-update-min-date-to="{{ $updateMinDateTo }}"@endif
        @if($updateMaxDateTo)data-update-max-date-to="{{ $updateMaxDateTo }}"@endif
    />                    
    <span class="z-0"><x-icon name="calendar" class="w-5 h-5" /></span>
    <div class="datetime w-2/5 z-10 -ml-px">    
        <input id="{{ $name }}[time]" name="{{ $name }}[time]" type="time" class="input input-bordered border-r-0 hidden" x-ref="time" />
    </div>
</div>