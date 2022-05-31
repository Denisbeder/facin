@props(['vertical' => false])

@php
    $classList = [
        'inline-flex items-stretch relative',
        'overflow-x-overlay overflow-y-hidden rounded-md' => !$vertical,
        'flex-col' => $vertical
    ];

    $html = null;
    $slotHtml = $slot->toHtml();

    if (str()->of($slotHtml)->trim()->isNotEmpty()) {
        $dom = new domDocument();
        $dom->loadHTML($slotHtml);
        $dom->preserveWhiteSpace = false;
        $xPath = new DOMXpath($dom);
        $buttons = $xPath->query('.//body/*');
        if ($buttons->length) {
            foreach($buttons as $k => $button) {
                // First clear all classes rounded-*
                $buttonClassList = $button->getAttribute('class');
                $buttonClassList = str()->of($buttonClassList)->trim()->replaceMatches('/(\s+)?([a-z]+:)?([a-z]+:)?(rounded)(\-[a-z0-9]+)?(\-[a-z0-9]+)?(\s+)?/', ' ');
                $buttonClassList = trim(preg_replace('/\s+/', ' ', $buttonClassList));
                $button->setAttribute('class', $buttonClassList);
                $classBtn = [];

                // Add class sanitized to collection of classes
                array_push($classBtn, $buttonClassList);  

                // In first item add rounded left or top
                if ($k === 0) {                    
                    $classItem = !$vertical ? 'rounded-l-md' : 'rounded-t-md';
                    array_push($classBtn, $classItem);
                } 

                // In not first item move 1px to left or top
                if ($k !== 0) {                    
                    $classItem = !$vertical ? '-ml-px' : '-mt-px';
                    array_push($classBtn, $classItem);
                } 

                // In last item add rounded right or bottom
                if (($buttons->length - 1) === $k) {
                    $classItem = !$vertical ? 'rounded-r-md' : 'rounded-b-md';
                    array_push($classBtn, $classItem);
                }     

                $button->setAttribute('class', Arr::toCssClasses($classBtn));
            }    
            
            $body = $dom->getElementsByTagName('body')->item(0);
            $body = $dom->saveHtml($body);
            $body = preg_replace('/<\/?body>/', '', $body);
            $html = new \Illuminate\Support\HtmlString($body);
        }
    }
@endphp

<div {{ $attributes->class($classList) }}>
    {{ $html }} 
</div>
