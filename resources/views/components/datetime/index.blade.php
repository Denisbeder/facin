@props([
    'nameField', 
    'updateDateTimeMinTo' => false, 
    'updateDateTimeMaxTo' => false
])

<div {{ $attributes }} x-data="DateTime" class="input-group">
    <input 
        id="{{ $nameField }}[date]" 
        name="{{ $nameField }}[date]" 
        type="date"
        class="input input-bordered w-3/5 focus:z-[1] text-center" 
        x-ref="date"
        @if($updateDateTimeMinTo)data-update-date-time-min-to="{{ $updateDateTimeMinTo }}"@endif
        @if($updateDateTimeMaxTo)data-update-date-time-max-to="{{ $updateDateTimeMaxTo }}"@endif
    />                    
    <span><x-icon name="calendar" class="w-5 h-5" /></span>
    <div class="datetime w-2/5 -ml-px">    
        <input id="{{ $nameField }}[time]" name="{{ $nameField }}[time]" type="time" class="input input-bordered border-r-0 hidden" x-ref="time" />
    </div>
</div>