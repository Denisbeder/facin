@props(['vertical' => false])

@php
    $dom = new domDocument();
    $dom->loadHTML($slot->toHtml());
    $dom->preserveWhiteSpace = false;
    $buttons = $dom->getElementsByTagName('button');

    if ($buttons->length) {
        foreach($buttons as $k => $button) {
            // First clear all classes rounded-*
            $buttonClassList = $button->getAttribute('class');
            $buttonClassList = str()->of($buttonClassList)->replaceMatches('/(\s+)?([a-z]+:)?([a-z]+:)?(rounded)(\-[a-z0-9]+)?(\-[a-z0-9]+)?(\s+)?|(\s+)border(\s+)/', ' ');
            $buttonClassList = trim(preg_replace('/\s+/', ' ', $buttonClassList));
            $button->setAttribute('class', $buttonClassList . ' border');

            // In first item add rounded left or top
            if ($k === 0) {
                $classBtn = !$vertical ? ' rounded-l-md border-l border-y' : ' rounded-t-md border-t border-x';
                $button->setAttribute('class', $buttonClassList . $classBtn);
            } 
            
            // In last item add rounded right or bottom
            if (($buttons->length - 1) === $k) {
                $classBtn = !$vertical ? ' rounded-r-md border-r border-y' : ' rounded-b-md border-b border-x';
                $button->setAttribute('class', $buttonClassList . $classBtn);
            }            
        }      
        $body = $dom->getElementsByTagName('body')->item(0);
        $body = $dom->saveHtml($body);
        $body = preg_replace('/<\/?body>/', '', $body);
        $html = new \Illuminate\Support\HtmlString($body);
    }

    $classList = [
        'inline-flex',
        'flex-col' => $vertical
    ];
@endphp

<div {{ $attributes->merge(['class' => Arr::toCssClasses($classList)]) }}>
   {{ $html }} 
</div>