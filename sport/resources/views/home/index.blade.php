<x-layout.base title="Accueil">

    <div class="min-h-screen overflow-hidden bg-[#0e0e0e] font-body text-white">
        <x-commun.header />

        <main id="contenu">
            <section class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-20 sm:px-10 lg:grid-cols-[1.1fr_0.9fr] lg:px-16 lg:py-28" aria-labelledby="hero-title">
                <div class="max-w-2xl">
                    <p class="mb-6 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-[#6f28d9]"><span class="h-px w-8 bg-[#6f28d9]" aria-hidden="true"></span> Mouvement · Force · Équilibre</p>
                    <h1 id="hero-title" class="font-display text-6xl leading-[0.9] tracking-normal sm:text-8xl">Construis ta<br><em class="text-[#6f28d9]">meilleure version.</em></h1>
                    <p class="mt-8 max-w-lg text-lg leading-relaxed text-neutral-300">Des repères clairs pour t'entraîner avec intention, progresser à ton rythme et nourrir ce qui te fait avancer.</p>
                    <a class="mt-10 inline-flex items-center gap-5 rounded-full bg-[#171717] px-6 py-4 text-sm font-semibold text-white transition hover:bg-[#6f28d9] focus:outline-none focus:ring-2 focus:ring-[#6f28d9] focus:ring-offset-2" href="#disciplines">Commencer l'exploration <span aria-hidden="true">↗</span></a>
                </div>

                <div class="relative mx-auto aspect-square w-full max-w-md overflow-hidden rounded-[40%] border-8 border-[#171717] bg-[#d9d5cf] shadow-[14px_14px_0_#6f28d9]">
                    <img class="h-full w-full object-cover object-center" src="{{ asset('img/handstand.webp') }}" alt="Personne réalisant un équilibre sur les mains dans une salle de sport">
                </div>
            </section>

            <section id="disciplines" class="mx-auto max-w-7xl px-6 py-16 sm:px-10 lg:px-16 lg:py-24" aria-labelledby="disciplines-title">
                <div class="mb-10 flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                    <div>
                        <p class="mb-5 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-[#6f28d9]"><span class="h-px w-8 bg-[#6f28d9]" aria-hidden="true"></span> Ton terrain de jeu</p>
                        <h2 id="disciplines-title" class="font-display text-5xl leading-[0.95] sm:text-7xl">Choisis ton<br><em class="text-[#6f28d9]">point de départ.</em></h2>
                    </div>
                    <p class="max-w-xs text-sm leading-relaxed text-neutral-300">Trois approches. Un même objectif : te sentir mieux.</p>
                </div>

                <div class="grid gap-4 md:grid-cols-3">
                    <a class="group flex min-h-72 flex-col justify-between rounded-3xl bg-[#6f28d9] p-7 text-white transition hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-[#171717]" href="{{ route('calisthenics.index') }}">
                        <span class="flex items-center justify-between text-xs font-semibold uppercase tracking-widest"><span>01 / 03</span><span aria-hidden="true">↗</span></span>
                        <span><strong class="block font-display text-4xl font-normal">Calisthénie</strong><span class="mt-2 block text-sm text-white/75">Maîtrise ton poids.</span></span>
                        <span class="self-end text-3xl transition group-hover:translate-x-1" aria-hidden="true">→</span>
                    </a>
                    <a class="group flex min-h-72 flex-col justify-between rounded-3xl bg-[#d9d5cf] p-7 text-[#171717] transition hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-[#6f28d9]" href="{{ route('musculation.index') }}">
                        <span class="flex items-center justify-between text-xs font-semibold uppercase tracking-widest"><span>02 / 03</span><span aria-hidden="true">✦</span></span>
                        <span><strong class="block font-display text-4xl font-normal">Musculation</strong><span class="mt-2 block text-sm text-[#4b4743]">Développe ta force.</span></span>
                        <span class="self-end text-3xl transition group-hover:translate-x-1" aria-hidden="true">→</span>
                    </a>
                    <a class="group flex min-h-72 flex-col justify-between rounded-3xl border border-neutral-700 bg-white p-7 text-[#171717] transition hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-[#6f28d9]" href="{{ route('diet.index') }}">
                        <span class="flex items-center justify-between text-xs font-semibold uppercase tracking-widest"><span>03 / 03</span><span aria-hidden="true">◒</span></span>
                        <span><strong class="block font-display text-4xl font-normal">Diet</strong><span class="mt-2 block text-sm text-[#4b4743]">Nourris ton énergie.</span></span>
                        <span class="self-end text-3xl transition group-hover:translate-x-1" aria-hidden="true">→</span>
                    </a>
                </div>
            </section>
        </main>

        <footer class="flex flex-col gap-3 border-t border-neutral-700 px-6 py-8 text-xs uppercase tracking-widest text-neutral-400 sm:flex-row sm:items-center sm:justify-between sm:px-10 lg:px-16">
            <span>TOPDIFF / 2026</span>
            <span>Ta progression, ton rythme.</span>
            <a class="text-white underline-offset-4 hover:underline" href="#contenu">Retour en haut <span aria-hidden="true">↑</span></a>
        </footer>
    </div>
</x-layout.base>