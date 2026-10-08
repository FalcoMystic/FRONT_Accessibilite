@props(['href'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'block rounded-xl px-3 py-2 normal-case tracking-normal transition hover:bg-[var(--color-medium-purple-950)] focus:bg-[var(--color-medium-purple-950)] focus:outline-none focus:ring-4 focus:ring-inset focus:ring-[var(--color-medium-purple-500)]']) }}>{{ $slot }}</a>
