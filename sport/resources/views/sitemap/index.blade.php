<x-layout.base title="Plan du site">
    <div class="min-h-screen bg-[var(--color-background)] font-body text-[var(--color-text)]">
        <x-commun.header />

        <main id="contenu" class="mx-auto max-w-7xl px-6 py-20 sm:px-10 lg:px-16 lg:py-28">
            <section aria-labelledby="sitemap-title">
                <p tabindex="0" class="mb-6 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-[var(--color-purple)]"><span class="h-px w-8 bg-[var(--color-purple)]" aria-hidden="true"></span> Navigation</p>
                <h1 tabindex="0" id="sitemap-title" class="max-w-3xl font-display text-6xl leading-[0.9] sm:text-8xl">Plan du<br><em class="text-[var(--color-purple)]">site.</em></h1>
                <p tabindex="0" class="mt-8 max-w-xl text-lg leading-relaxed text-[var(--color-text-muted)]">Retrouve ici l'ensemble des espaces de TopDiff et choisis ton prochain point de départ.</p>
            </section>

            <nav class="mt-16 grid gap-4 md:grid-cols-2" aria-label="Plan du site">
                <a class="group flex min-h-48 flex-col justify-between rounded-3xl bg-[var(--color-purple)] p-7 text-[var(--color-text)] transition hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-[var(--color-text)] focus:ring-offset-2" href="{{ route('home.index') }}">
                    <span class="flex items-center justify-between text-xs font-semibold uppercase tracking-widest"><span>01 / 04</span><span aria-hidden="true">↗</span></span>
                    <span><strong class="block font-display text-4xl font-normal">Accueil</strong><span class="mt-2 block text-sm text-[var(--color-text)]/75">Explore toutes les disciplines.</span></span>
                </a>
                <a class="group flex min-h-48 flex-col justify-between rounded-3xl bg-[var(--color-surface-light)] p-7 text-[var(--color-text-dark)] transition hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-[var(--color-text)] focus:ring-offset-2" href="{{ route('calisthenics.index') }}">
                    <span class="flex items-center justify-between text-xs font-semibold uppercase tracking-widest"><span>02 / 04</span><span aria-hidden="true">↗</span></span>
                    <span><strong class="block font-display text-4xl font-normal">Callisthénie</strong><span class="mt-2 block text-sm text-[var(--color-gray)]">Maîtrise ton poids.</span></span>
                </a>
                <a class="group flex min-h-48 flex-col justify-between rounded-3xl border border-[var(--color-border)] bg-[var(--color-text)] p-7 text-[var(--color-text-dark)] transition hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-[var(--color-text)] focus:ring-offset-2" href="{{ route('musculation.index') }}">
                    <span class="flex items-center justify-between text-xs font-semibold uppercase tracking-widest"><span>03 / 04</span><span aria-hidden="true">↗</span></span>
                    <span><strong class="block font-display text-4xl font-normal">Musculation</strong><span class="mt-2 block text-sm text-[var(--color-gray)]">Développe ta force.</span></span>
                </a>
                <a class="group flex min-h-48 flex-col justify-between rounded-3xl bg-[var(--color-background)] p-7 text-[var(--color-text)] ring-1 ring-[var(--color-border)] transition hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-[var(--color-text)] focus:ring-offset-2" href="{{ route('diet.index') }}">
                    <span class="flex items-center justify-between text-xs font-semibold uppercase tracking-widest"><span>04 / 04</span><span aria-hidden="true">↗</span></span>
                    <span><strong class="block font-display text-4xl font-normal">Diet</strong><span class="mt-2 block text-sm text-[var(--color-text-muted)]">Nourris ton énergie.</span></span>
                </a>
            </nav>
        </main>

        <x-commun.footer />
    </div>
</x-layout.base>
