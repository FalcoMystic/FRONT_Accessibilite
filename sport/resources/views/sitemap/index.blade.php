<x-layout.base title="Plan du site">
    <div class="min-h-screen bg-[var(--color-background)] font-['Space_Grotesk'] text-[var(--color-text)]">
        <x-commun.header />

        <main id="contenu" tabindex="-1" class="mx-auto max-w-7xl px-6 py-20 sm:px-10 lg:px-16 lg:py-28">
            <section aria-labelledby="sitemap-title">
                <p tabindex="0" class="mb-6 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-[var(--color-medium-purple-400)]">Navigation</p>
                <h1 tabindex="0" id="sitemap-title" class="max-w-3xl font-['Tanker'] text-6xl leading-[0.9] sm:text-8xl">Plan du<br><em class="text-[var(--color-medium-purple-400)]">site</em></h1>
                <p tabindex="0" class="mt-8 max-w-xl text-lg leading-relaxed text-[var(--color-text-muted)]">Retrouve ici l'ensemble des espaces de TopDiff, recherche une page et choisis ton prochain point de départ.</p>
            </section>

            <form class="mt-12 flex flex-col gap-3 rounded-3xl border border-[var(--color-medium-purple-300)] bg-[var(--color-medium-purple-100)] p-6 text-[var(--color-text-dark)] sm:flex-row sm:items-center" action="{{ route('sitemap.index') }}" method="get">
                <label class="sr-only" for="sitemap-search">Rechercher une page</label>
                <input id="sitemap-search" name="q" type="search" value="{{ $query }}" class="w-full min-w-0 rounded-full border border-[var(--color-border)] bg-[var(--color-purple-500)] px-4 py-3 text-sm text-[var(--color-text)] placeholder:text-[var(--color-text-muted)] focus:outline-none focus:ring-4 focus:ring-[var(--color-purple-500)]" placeholder="Rechercher une page">
                <button type="submit" class="inline-flex items-center justify-center rounded-full bg-[var(--color-text)] px-5 py-3 text-xs font-semibold uppercase tracking-widest text-[var(--color-text-dark)] transition hover:bg-[var(--color-purple-500)] hover:text-[var(--color-text-dark)]">
                    Rechercher
                </button>
            </form>

            <nav class="mt-16 grid gap-4 md:grid-cols-2">
                @forelse ($pages as $page)
                    <article class="flex min-h-48 flex-col justify-between rounded-3xl border border-[var(--color-medium-purple-700)] bg-[var(--color-medium-purple-950)] p-7 text-[var(--color-text)]">
                        <div>
                            <strong class="block font-['Tanker'] text-4xl font-normal">{{ $page['title'] }}</strong>
                            <p class="mt-2 text-sm text-[var(--color-text)]">{{ $page['description'] }}</p>
                        </div>
                        <a class="mt-8 inline-flex items-center gap-2 self-start text-sm font-semibold underline-offset-4 transition hover:underline" href="{{ $page['url'] }}">
                            Ouvrir la page <span aria-hidden="true">→</span>
                        </a>
                    </article>
                @empty
                    <p class="rounded-3xl border border-[var(--color-medium-purple-300)] bg-[var(--color-medium-purple-100)] p-7 text-sm leading-7 text-[var(--color-text-dark)] md:col-span-2">Aucune page ne correspond à ta recherche. Essaie avec un autre mot-clé.</p>
                @endforelse
            </nav>
        </main>

        <x-commun.footer />
    </div>
</x-layout.base>
