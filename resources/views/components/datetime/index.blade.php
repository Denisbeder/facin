@props(['nameField'])

<div {{ $attributes }} x-data="DateTime" class="input-group">
    <input 
        id="{{ $nameField }}[date]" 
        name="{{ $nameField }}[date]" 
        type="date"
        class="input input-bordered w-3/5 focus:z-[1] text-center" 
        x-ref="date"
    />                    
    <span><x-icon name="calendar" class="w-5 h-5" /></span>
    <div class="datetime w-2/5 -ml-px">    
        <input 
            id="{{ $nameField }}[time]" 
            name="{{ $nameField }}[time]" 
            type="time" 
            class="input input-bordered border-r-0 hidden" 
            x-ref="time" 
        />
    </div>
</div>