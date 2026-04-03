@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => '
    text-sm 
    space-y-1.5 
    mt-2.5    
    text-homy-gold-600 
    bg-homy-gold-50 
    p-3 
    rounded-lg 
    border 
    border-homy-gold-200
']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
