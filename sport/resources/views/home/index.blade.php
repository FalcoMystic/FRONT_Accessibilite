<x-layout.base title="Accueil">

    <div class="min-h-screen overflow-hidden bg-[var(--color-background)] font-['Space_Grotesk'] text-[var(--color-text)]">
        <x-commun.header />

        <main id="contenu" tabindex="-1">
            <section class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-20 sm:px-10 lg:grid-cols-[1.1fr_0.9fr] lg:px-16 lg:py-28" aria-labelledby="hero-title">
                <div class="max-w-2xl">
                    <p tabindex="0" class="mb-6 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-[var(--color-medium-purple-400)]"><span class="h-px w-8 bg-[var(--color-medium-purple-400)]" aria-hidden="true"></span> Mouvement · Force · Équilibre</p>
                    <h1 tabindex="0" id="hero-title" class="font-['Tanker'] text-6xl leading-[0.9] tracking-normal sm:text-8xl">Construis ta<br><em class="text-[var(--color-medium-purple-400)]">meilleure version</em></h1>
                    <p tabindex="0" class="mt-8 max-w-lg text-lg leading-relaxed text-[var(--color-text-muted)]">Des repères clairs pour t'entraîner avec intention, progresser à ton rythme et nourrir ce qui te fait avancer.</p>
                    <a class="mt-10 inline-flex items-center gap-5 rounded-full bg-[var(--color-background)] px-6 py-4 text-sm font-semibold text-[var(--color-text)] transition hover:bg-[var(--color-purple-500)] focus:outline-none focus:ring-4 focus:ring-[var(--color-text)] focus:ring-offset-2" href="#disciplines">Commencer l'exploration <span aria-hidden="true">↗</span></a>
                </div>

                <div class="relative mx-auto aspect-square w-full max-w-md overflow-hidden rounded-[40%] border-8 border-[#171717] bg-[#d9d5cf] shadow-[14px_14px_0_#6f28d9]">
                    <img class="h-full w-full object-cover object-center" src="{{ asset('img/Salle de sport.jpg') }}" alt="">
                </div>
            </section>

            <section class="mx-auto max-w-5xl px-6 pb-4 sm:px-10 lg:px-16">
                <div class="max-w-3xl rounded-3xl border border-[var(--color-medium-purple-300)] bg-[var(--color-medium-purple-100)] p-6 text-[var(--color-text-dark)]">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[var(--color-medium-purple-950)]">Contexte</p>
                    <p class="mt-4 text-base leading-7 text-[var(--color-text-dark)]">TopDiff rassemble trois parcours complémentaires pour t'aider à progresser à ton rythme : bouger mieux, gagner en force et mieux t'alimenter. Commence par la discipline qui correspond à ton besoin du moment, puis explore le reste quand tu veux.</p>
                </div>
            </section>

            <section id="disciplines" class="mx-auto max-w-7xl px-6 py-16 sm:px-10 lg:px-16 lg:py-24" aria-labelledby="disciplines-title">
                <div class="mb-10 flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                    <div>
                        <p tabindex="0" class="mb-5 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-[var(--color-medium-purple-400)]"><span class="h-px w-8 bg-[var(--color-medium-purple-400)]" aria-hidden="true"></span> Ton terrain de jeu</p>
                        <h2 tabindex="0" id="disciplines-title" class="font-['Tanker'] text-5xl leading-[0.95] sm:text-7xl">Choisis ton<br><em class="text-[var(--color-medium-purple-400)]">point de départ</em></h2>
                    </div>
                    <p tabindex="0" class="max-w-xs text-sm leading-relaxed text-[var(--color-text-muted)]">Trois approches. Un même objectif : te sentir mieux.</p>
                </div>

                <div class="grid gap-4 md:grid-cols-3">
                    <article class="flex min-h-72 flex-col justify-between rounded-3xl bg-[var(--color-medium-purple-700)] p-7 text-[var(--color-text)]">
                        <div>
                            <strong class="block font-['Tanker'] text-4xl font-normal">Callisthénie</strong>
                            <p class="mt-2 text-sm text-[var(--color-text)]/75">Maîtrise ton poids.</p>
                        </div>
                        <a class="mt-8 inline-flex items-center gap-2 self-start text-sm font-semibold underline-offset-4 transition hover:underline" href="{{ route('calisthenics.index') }}">
                            Découvrir la discipline <span aria-hidden="true">→</span>
                        </a>
                    </article>
                    <article class="flex min-h-72 flex-col justify-between rounded-3xl bg-[var(--color-medium-purple-200)] p-7 text-[var(--color-text-dark)]">
                        <div>
                            <strong class="block font-['Tanker'] text-4xl font-normal">Musculation</strong>
                            <p class="mt-2 text-sm text-[var(--color-text-dark)]">Développe ta force.</p>
                        </div>
                        <a class="mt-8 inline-flex items-center gap-2 self-start text-sm font-semibold underline-offset-4 transition hover:underline" href="{{ route('musculation.index') }}">
                            Découvrir la discipline <span aria-hidden="true">→</span>
                        </a>
                    </article>
                    <article class="flex min-h-72 flex-col justify-between rounded-3xl border border-[var(--color-medium-purple-300)] bg-[var(--color-medium-purple-400)] p-7 text-[var(--color-text-dark)]">
                        <div>
                            <strong class="block font-['Tanker'] text-4xl font-normal">Nutrition</strong>
                            <p class="mt-2 text-sm text-[var(--color-text-dark)]">Nourris ton énergie.</p>
                        </div>
                        <a class="mt-8 inline-flex items-center gap-2 self-start text-sm font-semibold underline-offset-4 transition hover:underline" href="{{ route('diet.index') }}">
                            Découvrir la discipline <span aria-hidden="true">→</span>
                        </a>
                    </article>
                </div>
            </section>
        </main>

        <footer class="flex flex-col gap-3 border-t border-[var(--color-border)] px-6 py-8 text-xs uppercase tracking-widest text-[var(--color-text-muted)] sm:flex-row sm:items-center sm:justify-between sm:px-10 lg:px-16">
            <span tabindex="0">TOPDIFF / 2026</span>
            <span tabindex="0">Ta progression, ton rythme</span>
            <a class="text-[var(--color-text)] underline-offset-4 hover:underline" href="{{ route('accessibilite.index') }}">Accessibilité</a>
            <a class="text-[var(--color-text)] underline-offset-4 hover:underline" href="{{ route('sitemap.index') }}">Plan du site</a>
            <a class="text-[var(--color-text)] underline-offset-4 hover:underline" href="#haut">Retour en haut <span aria-hidden="true">↑</span></a>
        </footer>
    </div>
</x-layout.base>