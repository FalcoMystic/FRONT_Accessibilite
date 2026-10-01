<x-layout.base title="Accueil">

    <div class="min-h-screen overflow-hidden bg-[var(--color-background)] font-body text-[var(--color-text)]">
        <x-commun.header />

        <main id="contenu">
            <section class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-20 sm:px-10 lg:grid-cols-[1.1fr_0.9fr] lg:px-16 lg:py-28" aria-labelledby="hero-title">
                <div class="max-w-2xl">
                    <p tabindex="0" class="mb-6 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-[var(--color-purple)]"><span class="h-px w-8 bg-[var(--color-purple)]" aria-hidden="true"></span> Mouvement · Force · Équilibre</p>
                    <h1 tabindex="0" id="hero-title" class="font-display text-6xl leading-[0.9] tracking-normal sm:text-8xl">Construis ta<br><em class="text-[var(--color-purple)]">meilleure version.</em></h1>
                    <p tabindex="0" class="mt-8 max-w-lg text-lg leading-relaxed text-[var(--color-text-muted)]">Des repères clairs pour t'entraîner avec intention, progresser à ton rythme et nourrir ce qui te fait avancer.</p>
                    <a class="mt-10 inline-flex items-center gap-5 rounded-full bg-[var(--color-background)] px-6 py-4 text-sm font-semibold text-[var(--color-text)] transition hover:bg-[var(--color-purple)] focus:outline-none focus:ring-4 focus:ring-[var(--color-text)] focus:ring-offset-2" href="#disciplines">Commencer l'exploration <span aria-hidden="true">↗</span></a>
                </div>

                <div class="relative mx-auto aspect-square w-full max-w-md overflow-hidden rounded-[40%] border-8 border-[#171717] bg-[#d9d5cf] shadow-[14px_14px_0_#6f28d9]">
                    <img class="h-full w-full object-cover object-center" src="{{ asset('img/Salle de sport.jpg') }}" alt="Personne réalisant un équilibre sur les mains dans une salle de sport">
                </div>
            </section>

            <section id="disciplines" class="mx-auto max-w-7xl px-6 py-16 sm:px-10 lg:px-16 lg:py-24" aria-labelledby="disciplines-title">
                <div class="mb-10 flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                    <div>
                        <p tabindex="0" class="mb-5 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-[var(--color-purple)]"><span class="h-px w-8 bg-[var(--color-purple)]" aria-hidden="true"></span> Ton terrain de jeu</p>
                        <h2 tabindex="0" id="disciplines-title" class="font-display text-5xl leading-[0.95] sm:text-7xl">Choisis ton<br><em class="text-[var(--color-purple)]">point de départ.</em></h2>
                    </div>
                    <p tabindex="0" class="max-w-xs text-sm leading-relaxed text-[var(--color-text-muted)]">Trois approches. Un même objectif : te sentir mieux.</p>
                </div>

                <div class="grid gap-4 md:grid-cols-3">
                    <a class="group flex min-h-72 flex-col justify-between rounded-3xl bg-[var(--color-purple)] p-7 text-[var(--color-text)] transition hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-[var(--color-text)] focus:ring-offset-2" href="{{ route('calisthenics.index') }}">
                        <span class="flex items-center justify-between text-xs font-semibold uppercase tracking-widest"><span>01 / 03</span><span aria-hidden="true">↗</span></span>
                        <span><strong class="block font-display text-4xl font-normal">Callisthénie</strong><span class="mt-2 block text-sm text-[var(--color-text)]/75">Maîtrise ton poids.</span></span>
                        <span class="self-end text-3xl transition group-hover:translate-x-1" aria-hidden="true">→</span>
                    </a>
                    <a class="group flex min-h-72 flex-col justify-between rounded-3xl bg-[var(--color-surface-light)] p-7 text-[var(--color-text-dark)] transition hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-[var(--color-text)] focus:ring-offset-2" href="{{ route('musculation.index') }}">
                        <span class="flex items-center justify-between text-xs font-semibold uppercase tracking-widest"><span>02 / 03</span><span aria-hidden="true">✦</span></span>
                        <span><strong class="block font-display text-4xl font-normal">Musculation</strong><span class="mt-2 block text-sm text-[var(--color-gray)]">Développe ta force.</span></span>
                        <span class="self-end text-3xl transition group-hover:translate-x-1" aria-hidden="true">→</span>
                    </a>
                    <a class="group flex min-h-72 flex-col justify-between rounded-3xl border border-[var(--color-border)] bg-[var(--color-text)] p-7 text-[var(--color-text-dark)] transition hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-[var(--color-text)] focus:ring-offset-2" href="{{ route('diet.index') }}">
                        <span class="flex items-center justify-between text-xs font-semibold uppercase tracking-widest"><span>03 / 03</span><span aria-hidden="true">◒</span></span>
                        <span><strong class="block font-display text-4xl font-normal">Diet</strong><span class="mt-2 block text-sm text-[var(--color-gray)]">Nourris ton énergie.</span></span>
                        <span class="self-end text-3xl transition group-hover:translate-x-1" aria-hidden="true">→</span>
                    </a>
                </div>
            </section>
        </main>

        <footer class="flex flex-col gap-3 border-t border-[var(--color-border)] px-6 py-8 text-xs uppercase tracking-widest text-[var(--color-text-muted)] sm:flex-row sm:items-center sm:justify-between sm:px-10 lg:px-16">
            <span tabindex="0">TOPDIFF / 2026</span>
            <span tabindex="0">Ta progression, ton rythme.</span>
            <a class="text-[var(--color-text)] underline-offset-4 hover:underline" href="{{ route('sitemap.index') }}">Plan du site</a>
            <a class="text-[var(--color-text)] underline-offset-4 hover:underline" href="#contenu">Retour en haut <span aria-hidden="true">↑</span></a>
        </footer>
    </div>
</x-layout.base>