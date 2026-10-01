{{-- resources/views/musculation.blade.php --}}
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La musculation : bienfaits, organisation et exercices fondamentaux</title>
    <!-- Tailwind CSS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0e0e0e] text-neutral-200 font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-[#7a0fff] selection:text-white">

    <!-- Lien d'évitement pour les lecteurs d'écran et la navigation au clavier -->
    <a href="#contenu-principal" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-50 focus:px-4 focus:py-3 focus:bg-[#7a0fff] focus:text-white focus:font-bold focus:rounded-lg focus:shadow-lg">
        Aller au contenu principal
    </a>

    <!-- En-tête de la page -->
    <header role="banner" class="border-b border-neutral-800 bg-[#121212]/90 backdrop-blur-md sticky top-0 z-40">
        <div class="max-w-5xl mx-auto px-6 py-8 flex flex-col items-center text-center">
            <div class="flex items-center space-x-3 mb-3" aria-hidden="true">
                <div class="w-3 h-3 bg-[#7a0fff] rounded-full shadow-[0_0_12px_#7a0fff]"></div>
                <span class="text-xs uppercase tracking-widest text-neutral-400 font-semibold">Guide Pédagogique</span>
            </div>
            <h1 class="text-3xl md:text-4xl font-extrabold text-white tracking-tight mb-3">
                La musculation : comprendre, débuter et progresser
            </h1>
            <p class="text-neutral-400 max-w-2xl text-sm md:text-base leading-relaxed">
                Un guide complet pour découvrir la musculation, structurer ses séances et maîtriser les mouvements essentiels.
            </p>
        </div>
    </header>

    <!-- Navigation / Sommaire -->
    <nav aria-label="Sommaire de la page" class="bg-[#141414] border-b border-neutral-800 py-4 shadow-inner">
        <div class="max-w-5xl mx-auto px-6">
            <ul class="flex flex-wrap justify-center gap-6 md:gap-8 text-sm uppercase tracking-wider font-medium" role="list">
                <li>
                    <a href="#presentation" class="hover:text-white focus:text-white transition-colors hover:border-b-2 hover:border-[#7a0fff] focus:outline-none focus:ring-2 focus:ring-[#7a0fff] pb-1">Présentation</a>
                </li>
                <li>
                    <a href="#organisation" class="hover:text-white focus:text-white transition-colors hover:border-b-2 hover:border-[#7a0fff] pb-1 focus:outline-none focus:ring-2 focus:ring-[#7a0fff]">Organisation</a>
                </li>
                <li>
                    <a href="#exercices" class="hover:text-white focus:text-white transition-colors hover:border-b-2 hover:border-[#7a0fff] pb-1 focus:outline-none focus:ring-2 focus:ring-[#7a0fff]">Exercices</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenu Principal -->
    <main id="contenu-principal" role="main" class="max-w-5xl mx-auto px-6 py-12 w-full space-y-16" tabindex="-1">

        <!-- Image d'illustration accessible au début de la page -->
        <div class="w-full overflow-hidden rounded-2xl border border-neutral-800 shadow-2xl bg-[#161616]">
            <img 
                src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=1600&auto=format&fit=crop" 
                alt="Vue générale d'une salle de musculation moderne avec des équipements de fitness et des poids alignés." 
                class="w-full h-72 md:h-96 object-cover opacity-85 hover:opacity-100 transition-opacity duration-500"
            />
        </div>

        <!-- Section 1 : Présentation -->
        <section id="presentation" aria-labelledby="presentation-titre" class="space-y-8">
            <div class="border-l-4 border-[#7a0fff] pl-4">
                <h2 id="presentation-titre" class="text-2xl md:text-3xl font-bold text-white tracking-tight">
                    Présentation de la musculation
                </h2>
            </div>

            <div class="bg-[#161616] border border-neutral-800 p-6 md:p-8 rounded-xl shadow-lg">
                <p class="leading-relaxed text-neutral-300">
                    La musculation est une pratique physique consistant à solliciter les muscles du corps
                    contre une résistance, qu'il s'agisse de charges libres, de machines guidées ou du
                    simple poids du corps. Son objectif est de renforcer progressivement les fibres
                    musculaires en les soumettant à un effort contrôlé et répété, ce qui entraîne des
                    adaptations durables au fil des séances.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <article aria-labelledby="bienfaits-corps-titre" class="bg-[#161616] border border-neutral-800 p-6 rounded-xl shadow-lg flex flex-col justify-between">
                    <div>
                        <h3 id="bienfaits-corps-titre" class="text-lg font-semibold text-white mb-3 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-[#7a0fff]" aria-hidden="true"></span>
                            Les bienfaits sur le corps
                        </h3>
                        <p class="text-sm text-neutral-400 leading-relaxed">
                            Pratiquée régulièrement, la musculation permet d'augmenter la masse musculaire,
                            d'améliorer la force et d'affiner la silhouette. Elle renforce également les
                            tendons, les ligaments et la densité osseuse, ce qui réduit le risque de
                            blessures et de fractures. La posture et la mobilité articulaire bénéficient
                            aussi d'un travail musculaire équilibré et bien réparti sur l'ensemble du corps.
                        </p>
                    </div>
                </article>

                <article aria-labelledby="bienfaits-sante-titre" class="bg-[#161616] border border-neutral-800 p-6 rounded-xl shadow-lg flex flex-col justify-between">
                    <div>
                        <h3 id="bienfaits-sante-titre" class="text-lg font-semibold text-white mb-3 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-[#7a0fff]" aria-hidden="true"></span>
                            Les bienfaits sur la santé globale
                        </h3>
                        <p class="text-sm text-neutral-400 leading-relaxed">
                            Au-delà de l'aspect esthétique, la musculation a un impact positif sur la santé
                            générale : elle favorise un métabolisme plus actif, aide à réguler la glycémie et
                            contribue à la prévention de nombreuses maladies chroniques. Elle a également des
                            effets bénéfiques reconnus sur le bien-être mental, en réduisant le stress et en
                            améliorant la qualité du sommeil et la confiance en soi.
                        </p>
                    </div>
                </article>
            </div>
        </section>

        <!-- Section 2 : Organisation -->
        <section id="organisation" aria-labelledby="organisation-titre" class="space-y-8">
            <div class="border-l-4 border-[#7a0fff] pl-4">
                <h2 id="organisation-titre" class="text-2xl md:text-3xl font-bold text-white tracking-tight">
                    Comment bien débuter et s'organiser
                </h2>
            </div>

            <div class="bg-[#161616] border border-neutral-800 p-6 md:p-8 rounded-xl shadow-lg">
                <p class="leading-relaxed text-neutral-300">
                    Pour un débutant, la réussite en musculation repose avant tout sur la régularité et
                    la progressivité plutôt que sur l'intensité. Il est essentiel d'apprendre les bons
                    gestes techniques avant d'augmenter les charges, et de laisser au corps le temps de
                    récupérer entre les séances afin d'éviter le surentraînement et les blessures.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <article aria-labelledby="fullbody-titre" class="bg-[#161616] border border-neutral-800 p-6 rounded-xl shadow-lg">
                    <h3 id="fullbody-titre" class="text-lg font-semibold text-white mb-3 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-[#7a0fff]" aria-hidden="true"></span>
                        Le programme Full-body
                    </h3>
                    <p class="text-sm text-neutral-400 leading-relaxed">
                        Le programme "Full-body" (ou "corps complet") consiste à travailler l'ensemble
                        des grands groupes musculaires à chaque séance, plutôt que de répartir le travail
                        sur plusieurs jours par zone du corps. Cette approche est particulièrement
                        recommandée pour les débutants, car elle permet de solliciter chaque muscle avec
                        une fréquence plus élevée tout en laissant suffisamment de temps de récupération
                        entre deux entraînements.
                    </p>
                </article>

                <article aria-labelledby="organisation-semaine-titre" class="bg-[#161616] border border-neutral-800 p-6 rounded-xl shadow-lg">
                    <h3 id="organisation-semaine-titre" class="text-lg font-semibold text-white mb-3 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-[#7a0fff]" aria-hidden="true"></span>
                        Une organisation sur 3 jours par semaine
                    </h3>
                    <p class="text-sm text-neutral-400 leading-relaxed mb-4">
                        Le format Full-body est particulièrement efficace lorsqu'il est réparti sur
                        trois séances hebdomadaires, espacées d'au moins une journée de repos. Cette
                        fréquence offre un excellent compromis entre volume d'entraînement, récupération
                        musculaire et régularité sur le long terme, ce qui en fait un rythme idéal pour
                        progresser durablement sans s'épuiser.
                    </p>
                    <ul class="space-y-2 text-sm bg-neutral-900/60 p-4 rounded-lg border border-neutral-800/80" role="list">
                        <li class="flex items-center gap-2"><span class="text-[#7a0fff] font-bold" aria-hidden="true">▪</span> <strong>Jour 1 :</strong> séance Full-body</li>
                        <li class="flex items-center gap-2"><span class="text-neutral-500 font-bold" aria-hidden="true">▪</span> <strong>Jour 2 :</strong> repos ou activité légère</li>
                        <li class="flex items-center gap-2"><span class="text-[#7a0fff] font-bold" aria-hidden="true">▪</span> <strong>Jour 3 :</strong> séance Full-body</li>
                        <li class="flex items-center gap-2"><span class="text-neutral-500 font-bold" aria-hidden="true">▪</span> <strong>Jour 4 :</strong> repos ou activité légère</li>
                        <li class="flex items-center gap-2"><span class="text-[#7a0fff] font-bold" aria-hidden="true">▪</span> <strong>Jour 5 :</strong> séance Full-body</li>
                        <li class="flex items-center gap-2"><span class="text-neutral-500 font-bold" aria-hidden="true">▪</span> <strong>Jours 6 et 7 :</strong> repos complet</li>
                    </ul>
                </article>
            </div>
        </section>

        <!-- Section 3 : Exercices -->
        <section id="exercices" aria-labelledby="exercices-titre" class="space-y-8">
            <div class="border-l-4 border-[#7a0fff] pl-4">
                <h2 id="exercices-titre" class="text-2xl md:text-3xl font-bold text-white tracking-tight">
                    Les exercices fondamentaux
                </h2>
            </div>

            <div class="bg-[#161616] border border-neutral-800 p-6 rounded-xl shadow-lg">
                <p class="text-neutral-300">
                    Voici une sélection d'exercices polyvalents, particulièrement adaptés à une routine
                    Full-body, car ils sollicitent plusieurs groupes musculaires en un seul mouvement.
                </p>
            </div>

            <!-- Grille d'exercices -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- 1. Squat -->
                <article aria-labelledby="squat-titre" class="bg-[#161616] border border-neutral-800 p-6 rounded-xl shadow-lg flex flex-col justify-between hover:border-neutral-700 transition-colors">
                    <div>
                        <h3 id="squat-titre" class="text-lg font-semibold text-white mb-2 text-[#7a0fff]">Le squat</h3>
                        <p class="text-sm text-neutral-400 leading-relaxed mb-4">
                            Debout, les pieds écartés à la largeur des épaules, le squat consiste à fléchir
                            les genoux et les hanches pour descendre le bassin comme pour s'asseoir, puis à
                            remonter en poussant sur les jambes. Il peut se réaliser à poids de corps ou avec
                            une barre chargée sur le haut du dos.
                        </p>
                    </div>
                    <div class="text-xs bg-neutral-900 p-3 rounded border border-neutral-800 text-neutral-300">
                        <strong>Muscles ciblés :</strong> quadriceps, ischio-jambiers, fessiers et gainage lombaire.
                    </div>
                </article>

                <!-- 2. Développé couché -->
                <article aria-labelledby="developpe-couche-titre" class="bg-[#161616] border border-neutral-800 p-6 rounded-xl shadow-lg flex flex-col justify-between hover:border-neutral-700 transition-colors">
                    <div>
                        <h3 id="developpe-couche-titre" class="text-lg font-semibold text-white mb-2 text-[#7a0fff]">Le développé couché</h3>
                        <p class="text-sm text-neutral-400 leading-relaxed mb-4">
                            Allongé sur un banc, la barre est descendue vers la poitrine puis repoussée à la
                            verticale des épaules jusqu'à l'extension complète des bras. C'est l'exercice de
                            référence pour développer la force et le volume du haut du corps en poussée.
                        </p>
                    </div>
                    <div class="text-xs bg-neutral-900 p-3 rounded border border-neutral-800 text-neutral-300">
                        <strong>Muscles ciblés :</strong> pectoraux, triceps et épaules (faisceau antérieur).
                    </div>
                </article>

                <!-- 3. Tirage horizontal -->
                <article aria-labelledby="tirage-titre" class="bg-[#161616] border border-neutral-800 p-6 rounded-xl shadow-lg flex flex-col justify-between hover:border-neutral-700 transition-colors">
                    <div>
                        <h3 id="tirage-titre" class="text-lg font-semibold text-white mb-2 text-[#7a0fff]">Le tirage horizontal (rowing)</h3>
                        <p class="text-sm text-neutral-400 leading-relaxed mb-4">
                            Buste penché vers l'avant, le dos droit, ce mouvement consiste à tirer une barre
                            ou des haltères vers l'abdomen en rapprochant les omoplates. Il constitue le
                            complément indispensable du développé couché en travaillant le dos en tirage.
                        </p>
                    </div>
                    <div class="text-xs bg-neutral-900 p-3 rounded border border-neutral-800 text-neutral-300">
                        <strong>Muscles ciblés :</strong> grand dorsal, trapèzes, rhomboïdes et biceps.
                    </div>
                </article>

                <!-- 4. Soulevé de terre -->
                <article aria-labelledby="solevé-terre-titre" class="bg-[#161616] border border-neutral-800 p-6 rounded-xl shadow-lg flex flex-col justify-between hover:border-neutral-700 transition-colors">
                    <div>
                        <h3 id="solevé-terre-titre" class="text-lg font-semibold text-white mb-2 text-[#7a0fff]">Le soulevé de terre</h3>
                        <p class="text-sm text-neutral-400 leading-relaxed mb-4">
                            La barre posée au sol est soulevée en gardant le dos droit, en initiant le
                            mouvement par une poussée des jambes et une extension des hanches, jusqu'à une
                            position debout complète. C'est l'un des mouvements les plus complets pour
                            l'ensemble de la chaîne postérieure.
                        </p>
                    </div>
                    <div class="text-xs bg-neutral-900 p-3 rounded border border-neutral-800 text-neutral-300">
                        <strong>Muscles ciblés :</strong> ischio-jambiers, fessiers, lombaires et trapèzes.
                    </div>
                </article>

                <!-- 5. Développé militaire -->
                <article aria-labelledby="developpe-militaire-titre" class="bg-[#161616] border border-neutral-800 p-6 rounded-xl shadow-lg flex flex-col justify-between hover:border-neutral-700 transition-colors">
                    <div>
                        <h3 id="developpe-militaire-titre" class="text-lg font-semibold text-white mb-2 text-[#7a0fff]">Le développé militaire</h3>
                        <p class="text-sm text-neutral-400 leading-relaxed mb-4">
                            Debout ou assis, une barre ou des haltères sont poussés au-dessus de la tête
                            depuis la hauteur des épaules jusqu'à l'extension complète des bras. Cet exercice
                            renforce les épaules tout en sollicitant fortement la sangle abdominale pour
                            stabiliser le corps.
                        </p>
                    </div>
                    <div class="text-xs bg-neutral-900 p-3 rounded border border-neutral-800 text-neutral-300">
                        <strong>Muscles ciblés :</strong> épaules (deltoïdes), triceps et gainage abdominal.
                    </div>
                </article>

                <!-- 6. Traction -->
                <article aria-labelledby="traction-titre" class="bg-[#161616] border border-neutral-800 p-6 rounded-xl shadow-lg flex flex-col justify-between hover:border-neutral-700 transition-colors">
                    <div>
                        <h3 id="traction-titre" class="text-lg font-semibold text-white mb-2 text-[#7a0fff]">La traction (tirage vertical)</h3>
                        <p class="text-sm text-neutral-400 leading-relaxed mb-4">
                            Suspendu à une barre fixe, les mains en pronation ou en supination, le corps est
                            tiré vers le haut jusqu'à ce que le menton dépasse la barre, puis redescendu de
                            façon contrôlée. Pour les débutants, une version assistée ou un tirage vertical
                            à la machine permet de progresser vers l'exercice complet.
                        </p>
                    </div>
                    <div class="text-xs bg-neutral-900 p-3 rounded border border-neutral-800 text-neutral-300">
                        <strong>Muscles ciblés :</strong> grand dorsal, biceps et avant-bras.
                    </div>
                </article>

            </div>
        </section>

    </main>

    <!-- Pied de page -->
    <footer role="contentinfo" class="border-t border-neutral-800 bg-[#121212] py-8 text-center text-xs text-neutral-400 uppercase tracking-widest mt-20">
        <p>Guide pédagogique sur la musculation à destination des pratiquants débutants.</p>
    </footer>

</body>
</html>