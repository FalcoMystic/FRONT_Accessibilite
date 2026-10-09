<x-layout.base title="Accessibilité">
    <div class="min-h-screen bg-[var(--color-background)] font-['Space_Grotesk'] text-[var(--color-text)]">
        <x-commun.header />

        <main id="contenu" tabindex="-1" class="mx-auto max-w-7xl px-6 py-20 sm:px-10 lg:px-16 lg:py-28">
            <section aria-labelledby="accessibilite-title">
                <p tabindex="0" class="mb-6 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.2em] text-[var(--color-medium-purple-400)]"><span class="h-px w-8 bg-[var(--color-medium-purple-400)]" aria-hidden="true"></span> Déclaration</p>
                <h1 tabindex="0" id="accessibilite-title" class="max-w-4xl font-['Tanker'] text-6xl leading-[0.9] sm:text-8xl">Déclaration d'<em class="text-[var(--color-medium-purple-400)]">accessibilité</em></h1>
                <p tabindex="0" class="mt-8 max-w-3xl text-lg leading-relaxed text-[var(--color-text-muted)]">TopDiff s'engage à rendre son site accessible conformément à l'article 47 de la loi n° 2005-102 du 11 février 2005.</p>
            </section>

            <section class="mt-16 space-y-4">
                <article class="rounded-3xl border border-[var(--color-medium-purple-300)] bg-[var(--color-medium-purple-100)] p-7 text-[var(--color-text-dark)]">
                    <h2 class="font-['Tanker'] text-3xl font-normal">État de conformité</h2>
                    <p class="mt-4 text-sm leading-7">TopDiff est actuellement <strong>non conforme</strong> au Référentiel général d'amélioration de l'accessibilité (RGAA), car aucun audit de conformité en cours de validité n'a encore été réalisé.</p>
                    <p class="mt-3 text-sm leading-7">Le site est un projet étudiant en cours d'amélioration. Cette déclaration sera mise à jour après la réalisation d'un audit.</p>
                </article>

                <article class="rounded-3xl border border-[var(--color-medium-purple-700)] bg-[var(--color-medium-purple-950)] p-7 text-[var(--color-text)]">
                    <h2 class="font-['Tanker'] text-3xl font-normal">Résultats des tests</h2>
                    <p class="mt-4 text-sm leading-7">Aucun audit RGAA n'a été réalisé à la date de publication de cette déclaration. Aucun pourcentage de conformité ne peut donc être communiqué.</p>
                </article>
            </section>

            <section class="mt-4 grid gap-4 lg:grid-cols-2">
                <article class="rounded-3xl border border-[var(--color-medium-purple-300)] bg-[var(--color-medium-purple-400)] p-7 text-[var(--color-text-dark)]">
                    <h2 class="font-['Tanker'] text-3xl font-normal">Contenus non accessibles</h2>
                    <h3 class="mt-6 text-lg font-semibold">Non-conformités identifiées</h3>
                    <ul class="mt-3 list-disc space-y-2 pl-5 text-sm leading-7">
                        <li>Certains contenus ou fonctionnalités du site peuvent encore présenter des difficultés d'accès selon les besoins des utilisateurs.</li>
                        <li>La compatibilité de l'ensemble du site avec les différentes technologies d'assistance n'a pas encore été vérifiée de manière exhaustive.</li>
                        <li>Les contrastes, la navigation au clavier et la structure sémantique de l'ensemble du site doivent encore faire l'objet d'une évaluation complète.</li>
                    </ul>
                </article>

                <article class="rounded-3xl border border-[var(--color-medium-purple-300)] bg-[var(--color-medium-purple-100)] p-7 text-[var(--color-text-dark)]">
                    <h2 class="font-['Tanker'] text-3xl font-normal">Contenus exemptés</h2>
                    <p class="mt-4 text-sm leading-7">Aucun contenu n'est déclaré exempté ou faisant l'objet d'une dérogation pour charge disproportionnée à ce jour.</p>
                    <h3 class="mt-6 text-lg font-semibold">Alternatives accessibles</h3>
                    <p class="mt-3 text-sm leading-7">Lorsqu'un contenu ne peut pas encore être rendu accessible, l'équipe du projet s'engage à rechercher une alternative textuelle ou un parcours équivalent.</p>
                </article>
            </section>

            <section class="mt-4 rounded-3xl border border-[var(--color-medium-purple-700)] bg-[var(--color-medium-purple-950)] p-7 text-[var(--color-text)]">
                <h2 class="font-['Tanker'] text-3xl font-normal">Établissement de cette déclaration</h2>
                <dl class="mt-6 grid gap-5 text-sm leading-7 md:grid-cols-2">
                    <div>
                        <dt class="font-semibold text-[var(--color-medium-purple-300)]">Date de publication</dt>
                        <dd>8 octobre 2026</dd>
                    </div>
                    <div>
                        <dt class="font-semibold text-[var(--color-medium-purple-300)]">Dernière mise à jour</dt>
                        <dd>8 octobre 2026</dd>
                    </div>
                    <div>
                        <dt class="font-semibold text-[var(--color-medium-purple-300)]">Méthode d'évaluation</dt>
                        <dd>Auto-évaluation initiale, sans audit RGAA formel</dd>
                    </div>
                    <div>
                        <dt class="font-semibold text-[var(--color-medium-purple-300)]">Technologies utilisées</dt>
                        <dd>Laravel, Blade, HTML, CSS, Tailwind CSS, JavaScript et Vite</dd>
                    </div>
                </dl>
            </section>

            <section class="mt-4 grid gap-4 lg:grid-cols-2">
                <article class="rounded-3xl border border-[var(--color-medium-purple-300)] bg-[var(--color-medium-purple-100)] p-7 text-[var(--color-text-dark)]">
                    <h2 class="font-['Tanker'] text-3xl font-normal">Environnement et pages vérifiées</h2>
                    <p class="mt-4 text-sm leading-7">Les vérifications manuelles initiales ont porté sur la navigation au clavier, les liens d'évitement, les contrastes et la structure des pages suivantes :</p>
                    <ul class="mt-3 list-disc space-y-2 pl-5 text-sm leading-7">
                        <li>Accueil</li>
                        <li>Plan du site</li>
                        <li>Page d'accessibilité</li>
                        <li>Callisthénie</li>
                        <li>Musculation</li>
                        <li>Nutrition</li>
                    </ul>
                    <p class="mt-4 text-sm leading-7">Ces vérifications ne remplacent pas un audit réalisé avec un lecteur d'écran et plusieurs environnements de navigation.</p>
                </article>

                <article class="rounded-3xl border border-[var(--color-medium-purple-300)] bg-[var(--color-medium-purple-400)] p-7 text-[var(--color-text-dark)]">
                    <h2 class="font-['Tanker'] text-3xl font-normal">Retour d'information et contact</h2>
                    <p class="mt-4 text-sm leading-7">Si vous rencontrez un défaut d'accessibilité qui vous empêche d'accéder à un contenu ou à un service, vous pouvez le signaler à l'équipe du projet par le canal de contact fourni par l'établissement dans le cadre du projet.</p>
                    <p class="mt-3 text-sm leading-7">À ce jour, aucun formulaire ni aucune adresse électronique dédiée n'est configuré sur ce site. Cette déclaration sera complétée dès qu'un mécanisme de contact sera disponible.</p>
                </article>
            </section>

            <section class="mt-4 rounded-3xl border border-[var(--color-medium-purple-300)] bg-[var(--color-medium-purple-100)] p-7 text-[var(--color-text-dark)]">
                <h2 class="font-['Tanker'] text-3xl font-normal">Voies de recours</h2>
                <p class="mt-4 text-sm leading-7">Cette procédure peut être utilisée si vous avez signalé au responsable du site un défaut d'accessibilité et que vous n'avez pas obtenu de réponse satisfaisante :</p>
                <ul class="mt-4 list-disc space-y-2 pl-5 text-sm leading-7">
                    <li><a class="font-semibold underline underline-offset-4" href="https://www.defenseurdesdroits.fr/nous-contacter-355">Écrire un message au Défenseur des droits</a></li>
                    <li><a class="font-semibold underline underline-offset-4" href="https://www.defenseurdesdroits.fr/carte-des-delegues">Contacter le délégué du Défenseur des droits près de chez vous</a></li>
                    <li>Envoyer un courrier au Défenseur des droits, Libre réponse 71120, 75342 Paris CEDEX 07.</li>
                </ul>
            </section>
        </main>

        <x-commun.footer />
    </div>
</x-layout.base>
