<x-layout.base title="Accessibilité">
    <div class="min-h-screen bg-[var(--color-background)] font-['Space_Grotesk'] text-[var(--color-text)]">
        <x-commun.header />

        <main id="contenu" tabindex="-1" class="mx-auto max-w-7xl px-6 py-20 sm:px-10 lg:px-16 lg:py-28">
            <section aria-labelledby="accessibilite-title">
                <p tabindex="0" class="mb-6 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-[var(--color-medium-purple-400)]"><span class="h-px w-8 bg-[var(--color-medium-purple-400)]" aria-hidden="true"></span> Navigation inclusive</p>
                <h1 tabindex="0" id="accessibilite-title" class="max-w-4xl font-['Tanker'] text-6xl leading-[0.9] sm:text-8xl">Page d'<em class="text-[var(--color-medium-purple-400)]">accessibilité</em></h1>
                <p tabindex="0" class="mt-8 max-w-3xl text-lg leading-relaxed text-[var(--color-text-muted)]">Cette page rassemble les repères utiles pour naviguer avec le clavier, comprendre la structure du site et retrouver rapidement les contenus principaux.</p>
            </section>

            <section class="mt-16 grid gap-4 lg:grid-cols-2">
                <article class="rounded-3xl border border-[var(--color-medium-purple-300)] bg-[var(--color-medium-purple-100)] p-7 text-[var(--color-text-dark)]">
                    <h2 class="font-['Tanker'] text-3xl font-normal">Navigation au clavier</h2>
                    <p class="mt-4 text-sm leading-7 text-[var(--color-text-dark)]">Le lien “Aller au contenu principal” permet de rejoindre directement la zone utile. Le menu principal, le sous-menu “Explorer” et les liens de pied de page restent accessibles au clavier, sans interaction à la souris.</p>
                </article>

                <article class="rounded-3xl border border-[var(--color-medium-purple-700)] bg-[var(--color-medium-purple-950)] p-7 text-[var(--color-text)]">
                    <h2 class="font-['Tanker'] text-3xl font-normal">Choix de conception</h2>
                    <ul class="mt-4 space-y-3 text-sm leading-7 text-[var(--color-text)]">
                        <li>Les titres ont été simplifiés pour rester lisibles et sans ponctuation inutile.</li>
                        <li>Les cartes d'accueil et du plan du site proposent désormais un lien dédié au lieu d'être entièrement cliquables.</li>
                        <li>L'image décorative de l'accueil ne remonte plus dans la lecture d'écran.</li>
                        <li>La recherche du site permet de retrouver rapidement une page depuis le plan du site.</li>
                    </ul>
                </article>
            </section>

            <section class="mt-4 grid gap-4 lg:grid-cols-2">
                <article class="rounded-3xl border border-[var(--color-medium-purple-300)] bg-[var(--color-medium-purple-400)] p-7 text-[var(--color-text-dark)]">
                    <h2 class="font-['Tanker'] text-3xl font-normal">Ce que tu peux faire</h2>
                    <p class="mt-4 text-sm leading-7 text-[var(--color-text-dark)]">Utilise le bouton de recherche en haut de page, explore le sous-menu pour accéder aux parcours, puis reviens en haut grâce au lien prévu dans la navigation.</p>
                </article>

                <article class="rounded-3xl border border-[var(--color-medium-purple-300)] bg-[var(--color-medium-purple-100)] p-7 text-[var(--color-text-dark)]">
                    <h2 class="font-['Tanker'] text-3xl font-normal">Contact et retours</h2>
                    <p class="mt-4 text-sm leading-7 text-[var(--color-text-dark)]">Si tu repères un point d'accessibilité à améliorer, tu peux le signaler en priorité sur les pages d'accueil ou du plan du site, qui servent de point d'entrée au reste du site.</p>
                </article>
            </section>
        </main>

        <x-commun.footer />
    </div>
</x-layout.base>
