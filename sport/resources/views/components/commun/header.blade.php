<header class="flex flex-wrap items-center justify-between gap-6 px-6 py-6 sm:px-10 lg:px-16">
    <a class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:rounded focus:bg-[var(--color-text)] focus:px-4 focus:py-3 focus:text-sm focus:font-semibold focus:text-[var(--color-text-dark)] focus:ring-4 focus:ring-[var(--color-purple-500)]" href="#contenu">Aller au contenu principal</a>

    <a class="flex items-center gap-2 font-['Tanker'] text-2xl tracking-normal" href="{{ route('home.index') }}">
        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[var(--color-purple-500)] text-xl text-[var(--color-text)]" aria-hidden="true">+</span>
        <span>TOP<span class="text-[var(--color-medium-purple-400)]">DIFF</span></span>
    </a>

    <div class="order-3 flex w-full flex-col gap-4 sm:order-2 sm:w-auto sm:flex-1 sm:items-center sm:justify-center">
        <nav class="flex flex-wrap items-center justify-center gap-5 text-xs font-semibold uppercase tracking-widest">
            <a class="{{ request()->routeIs('home.index') ? 'border-b-2 border-[var(--color-medium-purple-500)] pb-1 text-[var(--color-medium-purple-400)]' : 'border-b-2 border-transparent pb-1 transition hover:border-[var(--color-medium-purple-500)] hover:text-[var(--color-medium-purple-400)]' }}" href="{{ route('home.index') }}" @if (request()->routeIs('home.index')) aria-current="page" @endif>Accueil</a>
            <a class="{{ request()->routeIs('calisthenics.index') ? 'border-b-2 border-[var(--color-medium-purple-500)] pb-1 text-[var(--color-medium-purple-400)]' : 'border-b-2 border-transparent pb-1 transition hover:border-[var(--color-medium-purple-500)] hover:text-[var(--color-medium-purple-400)]' }}" href="{{ route('calisthenics.index') }}" @if (request()->routeIs('calisthenics.index')) aria-current="page" @endif>Callisthénie</a>
            <a class="{{ request()->routeIs('musculation.index') ? 'border-b-2 border-[var(--color-medium-purple-500)] pb-1 text-[var(--color-medium-purple-400)]' : 'border-b-2 border-transparent pb-1 transition hover:border-[var(--color-medium-purple-500)] hover:text-[var(--color-medium-purple-400)]' }}" href="{{ route('musculation.index') }}" @if (request()->routeIs('musculation.index')) aria-current="page" @endif>Musculation</a>
            <a class="{{ request()->routeIs('diet.index') ? 'border-b-2 border-[var(--color-medium-purple-500)] pb-1 text-[var(--color-medium-purple-400)]' : 'border-b-2 border-transparent pb-1 transition hover:border-[var(--color-medium-purple-500)] hover:text-[var(--color-medium-purple-400)]' }}" href="{{ route('diet.index') }}" @if (request()->routeIs('diet.index')) aria-current="page" @endif>Nutrition</a>
        </nav>
    </div>

    <form class="order-2 flex w-full items-center gap-2 sm:order-3 sm:w-auto" action="{{ route('sitemap.index') }}" method="get">
        <label class="sr-only" for="site-search">Rechercher sur le site</label>
        <input id="site-search" name="q" type="search" value="{{ request('q') }}" class="w-full min-w-0 rounded-full border border-[var(--color-border)] bg-transparent px-4 py-2 text-sm text-[var(--color-text)] placeholder:text-[var(--color-text-muted)] focus:outline-none focus:ring-4 focus:ring-[var(--color-medium-purple-500)] sm:w-56" placeholder="Rechercher">
        <button type="submit" class="inline-flex items-center gap-2 rounded-full bg-[var(--color-text)] px-4 py-2 text-xs font-semibold uppercase tracking-widest text-[var(--color-text-dark)] transition hover:bg-[var(--color-medium-purple-500)] hover:text-[var(--color-text-dark)]">
            Rechercher
        </button>
    </form>
</header>
