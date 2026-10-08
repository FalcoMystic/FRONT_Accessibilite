<header class="flex flex-wrap items-center justify-between gap-6 px-6 py-6 sm:px-10 lg:px-16" aria-label="En-tête du site">
    <a class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:rounded focus:bg-[var(--color-text)] focus:px-4 focus:py-3 focus:text-sm focus:font-semibold focus:text-[var(--color-text-dark)] focus:ring-4 focus:ring-[var(--color-purple)]" href="#contenu">Aller au contenu principal</a>

    <a class="flex items-center gap-2 font-display text-2xl tracking-normal" href="{{ route('home.index') }}" aria-label="Top diff, accueil">
        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[var(--color-purple)] text-xl text-[var(--color-text)]" aria-hidden="true">+</span>
        <span>TOP<span class="text-[var(--color-purple)]">DIFF</span></span>
    </a>

    <nav class="order-3 flex w-full items-center justify-center gap-5 text-xs font-semibold uppercase tracking-widest sm:order-2 sm:w-auto" aria-label="Navigation principale">
        <a class="{{ request()->routeIs('home.index') ? 'text-[var(--color-purple)]' : 'transition hover:text-[var(--color-purple)]' }}" href="{{ route('home.index') }}" @if (request()->routeIs('home.index')) aria-current="page" @endif>Accueil</a>
        <a class="{{ request()->routeIs('calisthenics.index') ? 'text-[var(--color-purple)]' : 'transition hover:text-[var(--color-purple)]' }}" href="{{ route('calisthenics.index') }}" @if (request()->routeIs('calisthenics.index')) aria-current="page" @endif>Callisthénie</a>
        <a class="{{ request()->routeIs('musculation.index') ? 'text-[var(--color-purple)]' : 'transition hover:text-[var(--color-purple)]' }}" href="{{ route('musculation.index') }}" @if (request()->routeIs('musculation.index')) aria-current="page" @endif>Musculation</a>
        <a class="{{ request()->routeIs('diet.index') ? 'text-[var(--color-purple)]' : 'transition hover:text-[var(--color-purple)]' }}" href="{{ route('diet.index') }}" @if (request()->routeIs('diet.index')) aria-current="page" @endif>Nutrition</a>
    </nav>

    <a class="order-2 inline-flex items-center gap-2 rounded-full border border-[var(--color-text)] px-4 py-2 text-xs font-semibold uppercase tracking-widest transition hover:bg-[var(--color-text)] hover:text-[var(--color-text-dark)] sm:order-3" href="{{ route('home.index') }}#disciplines">
        <span>Explorer</span>
        <span aria-hidden="true">↓</span>
    </a>
</header>