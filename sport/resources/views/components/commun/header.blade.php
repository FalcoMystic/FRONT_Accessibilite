<header class="flex flex-wrap items-center justify-between gap-6 px-6 py-6 sm:px-10 lg:px-16" aria-label="En-tête du site">
    <a class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:rounded focus:bg-white focus:px-4 focus:py-3 focus:text-sm focus:font-semibold focus:text-black focus:ring-2 focus:ring-[#6f28d9]" href="#contenu">Aller au contenu principal</a>

    <a class="flex items-center gap-2 font-display text-2xl tracking-normal" href="{{ route('home.index') }}" aria-label="Top diff, accueil">
        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#6f28d9] text-xl text-white" aria-hidden="true">+</span>
        <span>TOP<span class="text-[#6f28d9]">DIFF</span></span>
    </a>

    <nav class="order-3 flex w-full items-center justify-center gap-5 text-xs font-semibold uppercase tracking-widest sm:order-2 sm:w-auto" aria-label="Navigation principale">
        <a class="text-[#6f28d9]" href="{{ route('home.index') }}" aria-current="page">Accueil</a>
        <a class="transition hover:text-[#6f28d9]" href="{{ route('calisthenics.index') }}">Calisthénie</a>
        <a class="transition hover:text-[#6f28d9]" href="{{ route('musculation.index') }}">Musculation</a>
        <a class="transition hover:text-[#6f28d9]" href="{{ route('diet.index') }}">Diet</a>
    </nav>

    <a class="order-2 inline-flex items-center gap-2 rounded-full border border-[#171717] px-4 py-2 text-xs font-semibold uppercase tracking-widest transition hover:bg-[#171717] hover:text-white sm:order-3" href="#disciplines">
        <span>Explorer</span>
        <span aria-hidden="true">↓</span>
    </a>
</header>