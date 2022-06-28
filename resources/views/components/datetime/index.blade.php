@props(['name'])

<div class="input-group">
    <input id="{{ $name }}" name="{{ $name }}[date]" type="date" class="input input-bordered w-3/5 focus:z-20 text-center" data-date />                    
    <span class="z-0"><x-icon name="calendar" class="w-5 h-5" /></span>
    <div class="datetime w-2/5 z-10 -ml-px">    
        <input name="{{ $name }}[hour]" type="time" class="input input-bordered border-r-0 hidden" data-time />
    </div>
</div>