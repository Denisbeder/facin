@props(['vertical' => false, 'size' => 'md'])

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
            $buttonClassList = $buttonClassList . ' border-x border-y';
            $button->setAttribute('class', $buttonClassList);

            // In first item add rounded left or top
            if ($k === 0) {
                $classBtn = !$vertical ? ' rounded-l-md border-r-0' : ' rounded-t-md border-b-0';
                $button->setAttribute('class', $buttonClassList . $classBtn);
            } 
            
            // In last item add rounded right or bottom
            if (($buttons->length - 1) === $k) {
                $classBtn = !$vertical ? ' rounded-r-md -ml-px ' : ' rounded-b-md border-t-0';
                $button->setAttribute('class', $buttonClassList . $classBtn);
            }            
        }      
        $body = $dom->getElementsByTagName('body')->item(0);
        $body = $dom->saveHtml($body);
        $body = preg_replace('/<\/?body>/', '', $body);
        $html = new \Illuminate\Support\HtmlString($body);
    }

    $classList = [
        'inline-flex items-stretch',
        'flex-col' => $vertical
    ];
@endphp

<div {{ $attributes->merge(['class' => Arr::toCssClasses($classList)]) }}>
   {{ $html }} 
</div>