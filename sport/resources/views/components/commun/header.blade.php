<header class="relative z-30 flex flex-wrap items-center justify-between gap-6 px-6 py-6 sm:px-10 lg:px-16">
    <a class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:rounded focus:bg-[var(--color-text)] focus:px-4 focus:py-3 focus:text-sm focus:font-semibold focus:text-[var(--color-text-dark)] focus:ring-4 focus:ring-[var(--color-medium-purple-500)]" href="#contenu">Aller au contenu principal</a>

    <a class="flex items-center gap-2 font-['Tanker'] text-2xl" href="{{ route('home.index') }}">
        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[var(--color-purple-500)] text-xl text-[var(--color-text)]" aria-hidden="true">+</span>
        <span>TOP<span class="text-[var(--color-medium-purple-400)]">DIFF</span></span>
    </a>

    <nav class="order-3 flex w-full flex-wrap items-start justify-center gap-5 sm:order-2 sm:flex-1 text-xs font-semibold uppercase tracking-widest">
        <details name="menu-principal" class="group relative z-40">
            <summary class="{{ request()->routeIs('home.index') ? 'border-[var(--color-medium-purple-500)] text-[var(--color-medium-purple-400)]' : 'border-transparent hover:border-[var(--color-medium-purple-500)] hover:text-[var(--color-medium-purple-400)]' }} cursor-pointer list-none border-b-2 pb-1 transition focus:bg-[var(--color-medium-purple-950)] focus:px-2 focus:text-[var(--color-text)] focus:outline-none focus:ring-4 focus:ring-[var(--color-medium-purple-500)] focus:ring-offset-2">Accueil <span aria-hidden="true" class="ml-1 inline-block transition group-open:rotate-180">↓</span></summary>
            <div class="absolute left-1/2 mt-2 w-52 max-h-[min(24rem,calc(100dvh-8rem))] -translate-x-1/2 overflow-y-auto overscroll-contain rounded-2xl border border-[var(--color-border)] bg-[var(--color-background)] p-2 shadow-[0_20px_60px_rgba(0,0,0,0.2)]">
                <x-commun.submenu-link href="{{ route('home.index') }}#contenu">Contenu</x-commun.submenu-link>
                <x-commun.submenu-link href="{{ route('home.index') }}#disciplines">Disciplines</x-commun.submenu-link>
            </div>
        </details>

        <details name="menu-principal" class="group relative z-40">
            <summary class="{{ request()->routeIs('calisthenics.index') ? 'border-[var(--color-medium-purple-500)] text-[var(--color-medium-purple-400)]' : 'border-transparent hover:border-[var(--color-medium-purple-500)] hover:text-[var(--color-medium-purple-400)]' }} cursor-pointer list-none border-b-2 pb-1 transition focus:bg-[var(--color-medium-purple-950)] focus:px-2 focus:text-[var(--color-text)] focus:outline-none focus:ring-4 focus:ring-[var(--color-medium-purple-500)] focus:ring-offset-2">Callisthénie <span aria-hidden="true" class="ml-1 inline-block transition group-open:rotate-180">↓</span></summary>
            <div class="absolute left-1/2 mt-2 w-52 max-h-[min(24rem,calc(100dvh-8rem))] -translate-x-1/2 overflow-y-auto overscroll-contain rounded-2xl border border-[var(--color-border)] bg-[var(--color-background)] p-2 shadow-[0_20px_60px_rgba(0,0,0,0.2)]">
                <x-commun.submenu-link href="{{ route('calisthenics.index') }}#contenu">Contenu</x-commun.submenu-link>
                <x-commun.submenu-link href="{{ route('calisthenics.index') }}#benefices">Bénéfices</x-commun.submenu-link>
                <x-commun.submenu-link href="{{ route('calisthenics.index') }}#photos">Photos</x-commun.submenu-link>
                <x-commun.submenu-link href="{{ route('calisthenics.index') }}#faq">FAQ</x-commun.submenu-link>
            </div>
        </details>

        <details name="menu-principal" class="group relative z-40">
            <summary class="{{ request()->routeIs('musculation.index') ? 'border-[var(--color-medium-purple-500)] text-[var(--color-medium-purple-400)]' : 'border-transparent hover:border-[var(--color-medium-purple-500)] hover:text-[var(--color-medium-purple-400)]' }} cursor-pointer list-none border-b-2 pb-1 transition focus:bg-[var(--color-medium-purple-950)] focus:px-2 focus:text-[var(--color-text)] focus:outline-none focus:ring-4 focus:ring-[var(--color-medium-purple-500)] focus:ring-offset-2">Musculation <span aria-hidden="true" class="ml-1 inline-block transition group-open:rotate-180">↓</span></summary>
            <div class="absolute left-1/2 mt-2 w-52 max-h-[min(24rem,calc(100dvh-8rem))] -translate-x-1/2 overflow-y-auto overscroll-contain rounded-2xl border border-[var(--color-border)] bg-[var(--color-background)] p-2 shadow-[0_20px_60px_rgba(0,0,0,0.2)]">
                <x-commun.submenu-link href="{{ route('musculation.index') }}#contenu-principal">Contenu</x-commun.submenu-link>
                <x-commun.submenu-link href="{{ route('musculation.index') }}#presentation">Présentation</x-commun.submenu-link>
                <x-commun.submenu-link href="{{ route('musculation.index') }}#organisation">Organisation</x-commun.submenu-link>
                <x-commun.submenu-link href="{{ route('musculation.index') }}#exercices">Exercices</x-commun.submenu-link>
            </div>
        </details>

        <details name="menu-principal" class="group relative z-40">
            <summary class="{{ request()->routeIs('diet.index') ? 'border-[var(--color-medium-purple-500)] text-[var(--color-medium-purple-400)]' : 'border-transparent hover:border-[var(--color-medium-purple-500)] hover:text-[var(--color-medium-purple-400)]' }} cursor-pointer list-none border-b-2 pb-1 transition focus:bg-[var(--color-medium-purple-950)] focus:px-2 focus:text-[var(--color-text)] focus:outline-none focus:ring-4 focus:ring-[var(--color-medium-purple-500)] focus:ring-offset-2">Nutrition <span aria-hidden="true" class="ml-1 inline-block transition group-open:rotate-180">↓</span></summary>
            <div class="absolute right-0 mt-2 w-52 max-h-[min(24rem,calc(100dvh-8rem))] overflow-y-auto overscroll-contain rounded-2xl border border-[var(--color-border)] bg-[var(--color-background)] p-2 shadow-[0_20px_60px_rgba(0,0,0,0.2)]">
                <x-commun.submenu-link href="{{ route('diet.index') }}#contenu">Contenu</x-commun.submenu-link>
                <x-commun.submenu-link href="{{ route('diet.index') }}#bases">Les bases</x-commun.submenu-link>
                <x-commun.submenu-link href="{{ route('diet.index') }}#proteines">Protéines</x-commun.submenu-link>
                <x-commun.submenu-link href="{{ route('diet.index') }}#rythme">Rythme</x-commun.submenu-link>
                <x-commun.submenu-link href="{{ route('diet.index') }}#hydratation">Hydratation</x-commun.submenu-link>
                <x-commun.submenu-link href="{{ route('diet.index') }}#objectifs">Objectifs</x-commun.submenu-link>
                <x-commun.submenu-link href="{{ route('diet.index') }}#apports">Apports</x-commun.submenu-link>
                <x-commun.submenu-link href="{{ route('diet.index') }}#adapter">Adapter</x-commun.submenu-link>
            </div>
        </details>

        <details name="menu-principal" class="group relative z-40">
            <summary class="{{ request()->routeIs('form.index') ? 'border-[var(--color-medium-purple-500)] text-[var(--color-medium-purple-400)]' : 'border-transparent hover:border-[var(--color-medium-purple-500)] hover:text-[var(--color-medium-purple-400)]' }} cursor-pointer list-none border-b-2 pb-1 transition focus:bg-[var(--color-medium-purple-950)] focus:px-2 focus:text-[var(--color-text)] focus:outline-none focus:ring-4 focus:ring-[var(--color-medium-purple-500)] focus:ring-offset-2">Contact <span aria-hidden="true" class="ml-1 inline-block transition group-open:rotate-180">↓</span></summary>
            <div class="absolute right-0 mt-2 w-52 max-h-[min(24rem,calc(100dvh-8rem))] overflow-y-auto overscroll-contain rounded-2xl border border-[var(--color-border)] bg-[var(--color-background)] p-2 shadow-[0_20px_60px_rgba(0,0,0,0.2)]">
                <x-commun.submenu-link href="{{ route('form.index') }}#contenu">Formulaire de contact</x-commun.submenu-link>
            </div>
        </details>
    </nav>

    <form class="order-2 flex w-full items-center gap-2 sm:order-3 sm:w-auto" action="{{ route('sitemap.index') }}" method="get">
        <label class="sr-only" for="site-search">Rechercher sur le site</label>
        <input id="site-search" name="q" type="search" value="{{ request('q') }}" class="w-full min-w-0 rounded-full border border-[var(--color-border)] bg-transparent px-4 py-2 text-sm text-[var(--color-text)] placeholder:text-[var(--color-text-muted)] focus:outline-none focus:ring-4 focus:ring-[var(--color-medium-purple-500)] sm:w-56" placeholder="Rechercher">
        <button type="submit" class="rounded-full bg-[var(--color-text)] px-4 py-2 text-xs font-semibold uppercase tracking-widest text-[var(--color-text-dark)] transition hover:bg-[var(--color-medium-purple-500)]">
            Rechercher
        </button>
    </form>
</header>

<script>
    (() => {
        const menus = document.querySelectorAll('header details[name="menu-principal"]');

        // Clic en dehors : on ferme les sous-menus
        document.addEventListener('click', (e) => {
            menus.forEach((menu) => {
                if (!menu.contains(e.target)) menu.open = false;
            });
        });

        // Touche Échap : on ferme le menu ouvert et on rend le focus à son bouton
        document.addEventListener('keydown', (e) => {
            if (e.key !== 'Escape') return;
            const openMenu = [...menus].find((menu) => menu.open);
            if (!openMenu) return;
            openMenu.open = false;
            openMenu.querySelector('summary').focus();
        });
    })();
</script>
