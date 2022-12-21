@props(['status'])

@php
    switch ($status) {
        case 'draft':
            $badge = 'bg-amber-500';
            break;
        case 'published':
            $badge = 'bg-green-500';
            break;
        default:
            $badge = 'bg-gray-500';
            break;
    }
@endphp

<p {{ $attributes->merge(['class' => 'block w-fit px-3 py-1 text-left leading-5 rounded-full ' . $badge]) }}>
    {{ $slot }}
</p>
