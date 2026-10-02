{{-- resources/views/musculation.blade.php --}}
<x-layout.base title="Musculation : principes et exercices - TOPDIFF">

    <!-- Appel du header global du site -->
    <x-commun.header />

    <!-- Lien d'évitement pour l'accessibilité (Navigation au clavier) -->
    <a href="#contenu-principal" class="sr-only focus:not-sr-only focus:fixed focus:top-24 focus:left-4 focus:z-50 focus:px-6 focus:py-3 focus:bg-purple-500 focus:text-white focus:font-bold focus:rounded focus:shadow-xl focus:outline-none focus:ring-4 focus:ring-white">
        Aller au contenu principal
    </a>

    <!-- Contenu Principal -->
    <main id="contenu-principal" role="main" class="max-w-7xl mx-auto px-6 py-12 md:py-20 w-full space-y-24 focus:outline-none text-gray-200" tabindex="-1">
        
        <!-- EN-TÊTE DE LA PAGE -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center" aria-labelledby="hero-titre">
            <div>
                <p class="text-purple-500 uppercase tracking-widest font-bold text-sm mb-4" aria-hidden="true">
                    Guide pratique
                </p>
                <h1 id="hero-titre" class="text-6xl md:text-8xl font-black text-white uppercase leading-none tracking-tight font-['Tanker'] mb-6">
                    La musculation.<br>
                    <span class="text-purple-500">Une pratique<br>complète.</span>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl leading-relaxed mb-8 font-['Space_Grotesk']">
                    Un guide complet pour découvrir la musculation, structurer ses séances et maîtriser les mouvements essentiels.
                </p>
                
                <!-- Menu local (Boutons accessibles) -->
                <nav aria-label="Sommaire de la page" class="flex flex-wrap gap-4 font-['Space_Grotesk']">
                    <a href="#presentation" class="inline-block bg-purple-500 text-white font-bold uppercase tracking-wider px-6 py-3 hover:bg-purple-400 transition-colors focus:outline-none focus:ring-4 focus:ring-purple-300">
                        Présentation &darr;
                    </a>
                    <a href="#organisation" class="inline-block border border-gray-600 text-white font-bold uppercase tracking-wider px-6 py-3 hover:border-white transition-colors focus:outline-none focus:ring-4 focus:ring-gray-400">
                        Organisation &darr;
                    </a>
                    <a href="#exercices" class="inline-block border border-gray-600 text-white font-bold uppercase tracking-wider px-6 py-3 hover:border-white transition-colors focus:outline-none focus:ring-4 focus:ring-gray-400">
                        Exercices &darr;
                    </a>
                </nav>
            </div>
            
            <!-- Image d'illustration accessible -->
            <figure aria-label="Illustration de la thématique musculation">
                <img 
                    src="{{ asset('img/Salle de sport.jpg') }}" 
                    alt="Vue générale d'une salle de musculation moderne avec des sportifs s'entraînant sur diverses machines et poids libres." 
                    class="w-full h-auto object-cover shadow-2xl"
                />
            </figure>
        </section>

        <!-- SECTION : PRÉSENTATION -->
        <section id="presentation" aria-labelledby="titre-presentation" class="scroll-mt-32 space-y-8 focus-within:ring-2 focus-within:ring-purple-500 focus-within:ring-offset-8 focus-within:ring-offset-[#111] outline-none transition-all">
            <header>
                <h2 id="titre-presentation" class="text-4xl md:text-6xl font-black text-white uppercase font-['Tanker'] tracking-tight mb-6">
                    Présentation de la musculation
                </h2>
                <p class="text-gray-300 text-lg leading-relaxed max-w-4xl font-['Space_Grotesk']">
                    La musculation consiste à exercer les muscles contre une résistance, avec le poids du corps, des haltères, des barres, des machines ou des élastiques. Les mouvements sont répétés de façon contrôlée afin de développer la force, l'endurance musculaire et la maîtrise du geste.
                </p>
                <p class="text-gray-300 text-lg leading-relaxed max-w-4xl mt-4 font-['Space_Grotesk']">
                    Pratiquée régulièrement et avec une technique adaptée, elle contribue à renforcer les muscles, les os et les articulations. Elle peut également améliorer la posture, l'équilibre et la capacité à accomplir les gestes du quotidien. Associée à une alimentation variée, à un sommeil suffisant et à une activité cardiovasculaire, elle participe à une meilleure santé globale.
                </p>
                <p class="text-gray-400 text-md leading-relaxed max-w-4xl mt-4 italic font-['Space_Grotesk']">
                    Les bénéfices dépendent de la régularité, de la progression et de l'adaptation de l'effort aux capacités de chaque personne. En cas de douleur persistante, de problème de santé ou de reprise après une longue interruption, demandez conseil à un professionnel de santé.
                </p>
            </header>
        </section>

        <!-- SECTION : ORGANISATION -->
        <section id="organisation" aria-labelledby="titre-organisation" class="scroll-mt-32 space-y-10 focus-within:ring-2 focus-within:ring-purple-500 focus-within:ring-offset-8 focus-within:ring-offset-[#111] outline-none transition-all">
            <header>
                <h2 id="titre-organisation" class="text-4xl md:text-6xl font-black text-white uppercase font-['Tanker'] tracking-tight mb-6">
                    Comment bien débuter et s'organiser
                </h2>
                <p class="text-gray-300 text-lg leading-relaxed max-w-4xl font-['Space_Grotesk']">
                    Pour commencer en salle, choisissez des charges qui permettent de conserver une posture stable et d'effectuer chaque mouvement avec amplitude et contrôle. Une séance peut comprendre un échauffement progressif, les exercices de renforcement, puis un retour au calme. Apprenez les réglages des machines et demandez une démonstration à un encadrant lorsque vous ne maîtrisez pas un mouvement.
                </p>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 font-['Space_Grotesk']">
                <article aria-labelledby="fullbody-titre" class="border-t border-gray-800 pt-6">
                    <h3 id="fullbody-titre" class="text-2xl font-bold text-purple-500 mb-4 uppercase">Un programme Full-body trois jours par semaine</h3>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        Le programme Full-body sollicite les principaux groupes musculaires au cours de chaque séance. Trois entraînements hebdomadaires, séparés par au moins un jour de récupération, offrent un cadre simple et régulier. Par exemple, les séances peuvent avoir lieu le lundi, le mercredi et le vendredi.
                    </p>
                    <ol class="space-y-4 text-gray-300" role="list">
                        <li class="pl-4 border-l-2 border-purple-500"><strong class="text-white">Jour 1 :</strong> travail technique à intensité modérée avec un mouvement de jambes, une poussée, une traction et un exercice de gainage.</li>
                        <li class="pl-4 border-l-2 border-purple-500"><strong class="text-white">Jour 2 :</strong> reprise des mêmes grandes familles de mouvements avec des variantes adaptées, en privilégiant la qualité d'exécution.</li>
                        <li class="pl-4 border-l-2 border-purple-500"><strong class="text-white">Jour 3 :</strong> séance complète et progressive, sans chercher l'échec musculaire, suivie d'un repos suffisant avant la semaine suivante.</li>
                    </ol>
                </article>

                <article aria-labelledby="reperes-titre" class="border-t border-gray-800 pt-6">
                    <h3 id="reperes-titre" class="text-2xl font-bold text-purple-500 mb-4 uppercase">Les repères d'une séance équilibrée</h3>
                    <ul class="space-y-4 text-gray-300" role="list">
                        <li class="flex gap-3"><span class="text-purple-500" aria-hidden="true">✔</span> Commencer par cinq à dix minutes de mobilisation et d'échauffement progressif.</li>
                        <li class="flex gap-3"><span class="text-purple-500" aria-hidden="true">✔</span> Réaliser deux à quatre séries par exercice selon le niveau et le volume prévu.</li>
                        <li class="flex gap-3"><span class="text-purple-500" aria-hidden="true">✔</span> Garder une à trois répétitions possibles en réserve pour apprendre à progresser sans précipitation.</li>
                        <li class="flex gap-3"><span class="text-purple-500" aria-hidden="true">✔</span> Prendre le temps de récupérer entre les séries et boire régulièrement.</li>
                        <li class="flex gap-3"><span class="text-purple-500" aria-hidden="true">✔</span> Noter les charges, les répétitions et les sensations pour suivre les progrès.</li>
                        <li class="flex gap-3"><span class="text-purple-500" aria-hidden="true">✔</span> Prévoir des jours sans musculation pour permettre la récupération des muscles et du système nerveux.</li>
                    </ul>
                </article>
            </div>
        </section>

        <!-- SECTION : EXERCICES -->
        <section id="exercices" aria-labelledby="titre-exercices" class="scroll-mt-32 space-y-10 focus-within:ring-2 focus-within:ring-purple-500 focus-within:ring-offset-8 focus-within:ring-offset-[#111] outline-none transition-all">
            <header>
                <h2 id="titre-exercices" class="text-4xl md:text-6xl font-black text-white uppercase font-['Tanker'] tracking-tight mb-6">
                    Les exercices fondamentaux
                </h2>
                <p class="text-gray-300 text-lg leading-relaxed max-w-4xl font-['Space_Grotesk']">
                    Ces exercices couvrent les principaux mouvements utiles dans une routine Full-body. Commencez par une variante que vous pouvez réaliser sans douleur et faites-vous corriger si nécessaire.
                </p>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 font-['Space_Grotesk']">
                
                <article aria-labelledby="squat-titre" class="border-t border-gray-800 pt-6">
                    <h3 id="squat-titre" class="text-2xl font-bold text-white mb-3 uppercase tracking-wide">Squat</h3>
                    <p class="text-gray-400 leading-relaxed mb-4">Le squat consiste à fléchir les hanches et les genoux en gardant le buste maîtrisé, puis à repousser le sol pour revenir debout.</p>
                    <p class="text-sm text-gray-300"><strong class="text-purple-500">Cible :</strong> Quadriceps, fessiers et ischio-jambiers, avec gainage.</p>
                </article>

                <article aria-labelledby="sd-titre" class="border-t border-gray-800 pt-6">
                    <h3 id="sd-titre" class="text-2xl font-bold text-white mb-3 uppercase tracking-wide">Soulevé de terre</h3>
                    <p class="text-gray-400 leading-relaxed mb-4">La charge proche des jambes, on pousse dans le sol et on redresse les hanches en conservant le dos stable, puis on repose avec contrôle.</p>
                    <p class="text-sm text-gray-300"><strong class="text-purple-500">Cible :</strong> Fessiers, ischio-jambiers, dos et avant-bras.</p>
                </article>

                <article aria-labelledby="dc-titre" class="border-t border-gray-800 pt-6">
                    <h3 id="dc-titre" class="text-2xl font-bold text-white mb-3 uppercase tracking-wide">Développé couché</h3>
                    <p class="text-gray-400 leading-relaxed mb-4">Allongé sur un banc, on descend la barre vers la poitrine, puis on pousse les charges vers le haut sans perdre la stabilité des épaules.</p>
                    <p class="text-sm text-gray-300"><strong class="text-purple-500">Cible :</strong> Pectoraux, triceps et partie antérieure des épaules.</p>
                </article>

                <article aria-labelledby="traction-titre" class="border-t border-gray-800 pt-6">
                    <h3 id="traction-titre" class="text-2xl font-bold text-white mb-3 uppercase tracking-wide">Traction / Tirage</h3>
                    <p class="text-gray-400 leading-relaxed mb-4">Tirer le corps vers une barre, ou une poignée vers le haut de la poitrine, en abaissant les épaules et en contrôlant la remontée.</p>
                    <p class="text-sm text-gray-300"><strong class="text-purple-500">Cible :</strong> Grand dorsal, muscles du haut du dos et biceps.</p>
                </article>

                <article aria-labelledby="dm-titre" class="border-t border-gray-800 pt-6">
                    <h3 id="dm-titre" class="text-2xl font-bold text-white mb-3 uppercase tracking-wide">Développé vertical</h3>
                    <p class="text-gray-400 leading-relaxed mb-4">Depuis une position stable, on pousse les haltères ou la barre au-dessus de la tête, puis on redescend lentement sans cambrer le dos.</p>
                    <p class="text-sm text-gray-300"><strong class="text-purple-500">Cible :</strong> Épaules et triceps ; les muscles du tronc stabilisent le mouvement.</p>
                </article>

                <article aria-labelledby="gainage-titre" class="border-t border-gray-800 pt-6">
                    <h3 id="gainage-titre" class="text-2xl font-bold text-white mb-3 uppercase tracking-wide">Gainage</h3>
                    <p class="text-gray-400 leading-relaxed mb-4">En appui sur les avant-bras ou les mains et sur les pieds ou genoux, on maintient le corps aligné en contractant la sangle abdominale.</p>
                    <p class="text-sm text-gray-300"><strong class="text-purple-500">Cible :</strong> Muscles profonds de l'abdomen, lombaires, épaules et hanches.</p>
                </article>

            </div>
        </section>

    </main>

    <!-- Appel du footer global du site -->
    <x-commun.footer />

</x-layout.base>