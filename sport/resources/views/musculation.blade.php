{{-- resources/views/musculation.blade.php --}}
<x-layout.base title="Musculation : principes et exercices - TOPDIFF">

    <!-- Appel du header global du site -->
    <x-commun.header />

    <!-- Lien d'évitement (Critère RGAA 12.5) -->
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
                
                <!-- Menu local (Critère RGAA 12.1) -->
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
                    <a href="#recapitulatif" class="inline-block border border-gray-600 text-white font-bold uppercase tracking-wider px-6 py-3 hover:border-white transition-colors focus:outline-none focus:ring-4 focus:ring-gray-400">
                        Tableau &darr;
                    </a>
                    <a href="#inscription" class="inline-block border border-gray-600 text-white font-bold uppercase tracking-wider px-6 py-3 hover:border-white transition-colors focus:outline-none focus:ring-4 focus:ring-gray-400">
                        Inscription &darr;
                    </a>
                </nav>
            </div>
            
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
                <div class="space-y-4 text-gray-300 text-lg leading-relaxed max-w-4xl font-['Space_Grotesk']">
                    <p>La musculation consiste à exercer les muscles contre une résistance, avec le poids du corps, des haltères, des barres, des machines ou des élastiques. Les mouvements sont répétés de façon contrôlée afin de développer la force, l'endurance musculaire et la maîtrise du geste.</p>
                    <p>Pratiquée régulièrement et avec une technique adaptée, elle contribue à renforcer les muscles, les os et les articulations. Elle peut également améliorer la posture, l'équilibre et la capacité à accomplir les gestes du quotidien.</p>
                </div>
            </header>
        </section>

        <!-- SECTION : ORGANISATION -->
        <section id="organisation" aria-labelledby="titre-organisation" class="scroll-mt-32 space-y-10 focus-within:ring-2 focus-within:ring-purple-500 focus-within:ring-offset-8 focus-within:ring-offset-[#111] outline-none transition-all">
            <header>
                <h2 id="titre-organisation" class="text-4xl md:text-6xl font-black text-white uppercase font-['Tanker'] tracking-tight mb-6">
                    Comment bien débuter et s'organiser
                </h2>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 font-['Space_Grotesk']">
                <article aria-labelledby="fullbody-titre" class="border-t border-gray-800 pt-6">
                    <h3 id="fullbody-titre" class="text-2xl font-bold text-purple-500 mb-4 uppercase">Un programme Full-body</h3>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        Trois entraînements hebdomadaires, séparés par au moins un jour de récupération, offrent un cadre simple et régulier.
                    </p>
                    <ol class="space-y-4 text-gray-300" role="list">
                        <li class="pl-4 border-l-2 border-purple-500"><strong class="text-white">Jour 1 :</strong> travail technique à intensité modérée avec un mouvement de jambes, une poussée, une traction et un exercice de gainage.</li>
                        <li class="pl-4 border-l-2 border-purple-500"><strong class="text-white">Jour 2 :</strong> reprise des mêmes grandes familles de mouvements avec des variantes adaptées.</li>
                        <li class="pl-4 border-l-2 border-purple-500"><strong class="text-white">Jour 3 :</strong> séance complète et progressive, sans chercher l'échec musculaire.</li>
                    </ol>
                </article>

                <article aria-labelledby="reperes-titre" class="border-t border-gray-800 pt-6">
                    <h3 id="reperes-titre" class="text-2xl font-bold text-purple-500 mb-4 uppercase">Les repères d'une séance</h3>
                    <ul class="space-y-4 text-gray-300" role="list">
                        <li class="flex gap-3"><span class="text-purple-500" aria-hidden="true">✔</span> Commencer par cinq à dix minutes de mobilisation et d'échauffement progressif.</li>
                        <li class="flex gap-3"><span class="text-purple-500" aria-hidden="true">✔</span> Réaliser deux à quatre séries par exercice selon le niveau et le volume prévu.</li>
                        <li class="flex gap-3"><span class="text-purple-500" aria-hidden="true">✔</span> Garder une à trois répétitions possibles en réserve.</li>
                        <li class="flex gap-3"><span class="text-purple-500" aria-hidden="true">✔</span> Prévoir des jours sans musculation pour permettre la récupération.</li>
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
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 font-['Space_Grotesk']">
                
                <article aria-labelledby="squat-titre" class="bg-[#161616] border border-gray-800 rounded-xl overflow-hidden shadow-lg group focus-within:ring-2 focus-within:ring-purple-500 focus-within:border-transparent outline-none transition-all" tabindex="0">
                    <figure class="h-48 w-full bg-black overflow-hidden relative border-b border-gray-800">
                        <img src="https://images.unsplash.com/photo-1574680178050-55c6a6a96e0a?auto=format&fit=crop&w=800&q=80" alt="Une personne fléchit les genoux en descendant le bassin vers l'arrière, une barre chargée posée sur le haut de son dos." class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-focus:opacity-100 transition-opacity duration-300">
                    </figure>
                    <div class="p-6">
                        <h3 id="squat-titre" class="text-2xl font-bold text-white mb-3 uppercase tracking-wide font-['Tanker']">Squat</h3>
                        <p class="text-gray-400 leading-relaxed mb-4 text-sm">Le squat consiste à fléchir les hanches et les genoux en gardant le buste maîtrisé, puis à repousser le sol pour revenir debout.</p>
                        <p class="text-sm text-gray-300"><strong class="text-purple-500">Cible :</strong> Quadriceps, fessiers, ischio-jambiers.</p>
                    </div>
                </article>

                <article aria-labelledby="sd-titre" class="bg-[#161616] border border-gray-800 rounded-xl overflow-hidden shadow-lg group focus-within:ring-2 focus-within:ring-purple-500 focus-within:border-transparent outline-none transition-all" tabindex="0">
                    <figure class="h-48 w-full bg-black overflow-hidden relative border-b border-gray-800">
                        <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=800&q=80" alt="Un athlète se redresse depuis le sol en soulevant une lourde barre avec les bras tendus, le dos parfaitement plat." class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-focus:opacity-100 transition-opacity duration-300">
                    </figure>
                    <div class="p-6">
                        <h3 id="sd-titre" class="text-2xl font-bold text-white mb-3 uppercase tracking-wide font-['Tanker']">Soulevé de terre</h3>
                        <p class="text-gray-400 leading-relaxed mb-4 text-sm">La charge proche des jambes, on pousse dans le sol et on redresse les hanches en conservant le dos stable.</p>
                        <p class="text-sm text-gray-300"><strong class="text-purple-500">Cible :</strong> Fessiers, ischio-jambiers, dos.</p>
                    </div>
                </article>

                <article aria-labelledby="dc-titre" class="bg-[#161616] border border-gray-800 rounded-xl overflow-hidden shadow-lg group focus-within:ring-2 focus-within:ring-purple-500 focus-within:border-transparent outline-none transition-all" tabindex="0">
                    <figure class="h-48 w-full bg-black overflow-hidden relative border-b border-gray-800">
                        <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?auto=format&fit=crop&w=800&q=80" alt="Une personne allongée sur le dos sur un banc repousse une barre vers le plafond à la force des bras." class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-focus:opacity-100 transition-opacity duration-300">
                    </figure>
                    <div class="p-6">
                        <h3 id="dc-titre" class="text-2xl font-bold text-white mb-3 uppercase tracking-wide font-['Tanker']">Développé couché</h3>
                        <p class="text-gray-400 leading-relaxed mb-4 text-sm">Allongé sur un banc, on descend la barre vers la poitrine, puis on pousse les charges vers le haut sans perdre la stabilité des épaules.</p>
                        <p class="text-sm text-gray-300"><strong class="text-purple-500">Cible :</strong> Pectoraux, triceps, épaules avant.</p>
                    </div>
                </article>
            </div>
        </section>

        <!-- SECTION : TABLEAU RÉCAPITULATIF (De retour !) -->
        <section id="recapitulatif" aria-labelledby="titre-recapitulatif" class="scroll-mt-32 space-y-10 focus-within:ring-2 focus-within:ring-purple-500 focus-within:ring-offset-8 focus-within:ring-offset-[#111] outline-none transition-all font-['Space_Grotesk']">
            <header>
                <h2 id="titre-recapitulatif" class="text-4xl md:text-6xl font-black text-white uppercase font-['Tanker'] tracking-tight mb-6">
                    Structure type d'une séance
                </h2>
                <p class="text-gray-300 text-lg leading-relaxed max-w-4xl">
                    Voici un tableau récapitulatif pour structurer votre entraînement. Les séries et répétitions sont données à titre indicatif.
                </p>
            </header>

            <div class="bg-[#161616] border border-gray-800 rounded-2xl shadow-xl overflow-hidden">
                <!-- Conteneur avec overflow et tabindex pour l'accessibilité au clavier sur mobile -->
                <div class="overflow-x-auto focus:outline-none focus:ring-inset focus:ring-2 focus:ring-purple-500" tabindex="0" role="region" aria-labelledby="titre-recapitulatif">
                    <table class="w-full text-left border-collapse min-w-max">
                        <caption class="sr-only">Tableau des exercices fondamentaux avec leurs cibles musculaires, le nombre de séries et de répétitions conseillées.</caption>
                        <thead class="bg-gray-900 border-b border-gray-800 text-purple-400">
                            <tr>
                                <th scope="col" class="px-6 py-4 font-bold uppercase tracking-wider text-sm">Exercice</th>
                                <th scope="col" class="px-6 py-4 font-bold uppercase tracking-wider text-sm">Mouvement / Cible</th>
                                <th scope="col" class="px-6 py-4 font-bold uppercase tracking-wider text-sm text-center">Séries</th>
                                <th scope="col" class="px-6 py-4 font-bold uppercase tracking-wider text-sm text-center">Répétitions</th>
                                <th scope="col" class="px-6 py-4 font-bold uppercase tracking-wider text-sm">Repos (Min)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800 text-gray-300">
                            <tr class="hover:bg-gray-800/30 transition-colors">
                                <th scope="row" class="px-6 py-4 font-bold text-white">Squat (ou Presse)</th>
                                <td class="px-6 py-4">Poussée bas du corps (Quadriceps)</td>
                                <td class="px-6 py-4 text-center font-medium">3 - 4</td>
                                <td class="px-6 py-4 text-center font-medium">8 - 12</td>
                                <td class="px-6 py-4 text-neutral-400">2'00 - 3'00</td>
                            </tr>
                            <tr class="hover:bg-gray-800/30 transition-colors">
                                <th scope="row" class="px-6 py-4 font-bold text-white">Développé Couché</th>
                                <td class="px-6 py-4">Poussée horizontale (Pectoraux)</td>
                                <td class="px-6 py-4 text-center font-medium">3 - 4</td>
                                <td class="px-6 py-4 text-center font-medium">8 - 12</td>
                                <td class="px-6 py-4 text-neutral-400">2'00 - 3'00</td>
                            </tr>
                            <tr class="hover:bg-gray-800/30 transition-colors">
                                <th scope="row" class="px-6 py-4 font-bold text-white">Tirage (Rowing)</th>
                                <td class="px-6 py-4">Tirage horizontal (Dos épaisseur)</td>
                                <td class="px-6 py-4 text-center font-medium">3 - 4</td>
                                <td class="px-6 py-4 text-center font-medium">8 - 12</td>
                                <td class="px-6 py-4 text-neutral-400">1'30 - 2'00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- SECTION : FORMULAIRE & CAPTCHA ACCESSIBLE -->
        <section id="inscription" aria-labelledby="titre-inscription" class="scroll-mt-32 space-y-10 focus-within:ring-2 focus-within:ring-purple-500 focus-within:ring-offset-8 focus-within:ring-offset-[#111] outline-none transition-all font-['Space_Grotesk']">
            <header>
                <h2 id="titre-inscription" class="text-4xl md:text-6xl font-black text-white uppercase font-['Tanker'] tracking-tight mb-6">
                    Rejoindre une session
                </h2>
                <p class="text-gray-300 text-lg leading-relaxed max-w-4xl">
                    Remplissez ce formulaire pour participer à notre prochaine initiation. Tous les champs obligatoires sont signalés.
                </p>
            </header>

            <form action="#" method="POST" class="bg-[#161616] border border-gray-800 p-8 rounded-2xl shadow-xl max-w-2xl space-y-6" novalidate>
                
                <div class="flex flex-col space-y-2">
                    <label for="prenom" class="font-bold text-white">Prénom <span class="text-purple-500" aria-hidden="true">*</span><span class="sr-only">(obligatoire)</span></label>
                    <input type="text" id="prenom" name="prenom" required aria-required="true" autocomplete="given-name" class="bg-black border border-gray-700 text-white p-3 rounded focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition-all">
                </div>

                <div class="flex flex-col space-y-2">
                    <label for="email" class="font-bold text-white">Adresse e-mail <span class="text-purple-500" aria-hidden="true">*</span><span class="sr-only">(obligatoire)</span></label>
                    <input type="email" id="email" name="email" required aria-required="true" autocomplete="email" aria-describedby="email-aide" class="bg-black border border-gray-700 text-white p-3 rounded focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition-all">
                    <span id="email-aide" class="text-sm text-gray-500">Format attendu : nom@exemple.com</span>
                </div>

                <!-- CAPTCHA ACCESSIBLE -->
                <div class="flex flex-col space-y-2 border-t border-gray-800 pt-6 mt-6">
                    <label for="captcha" class="font-bold text-white">
                        Vérification de sécurité <span class="text-purple-500" aria-hidden="true">*</span><span class="sr-only">(obligatoire)</span>
                    </label>
                    <p id="captcha-instruction" class="text-sm text-gray-400 mb-2">Veuillez résoudre ce calcul simple pour prouver que vous n'êtes pas un robot.</p>
                    
                    <div class="flex items-center gap-4">
                        <span class="bg-gray-800 text-white px-4 py-3 rounded font-bold text-xl tracking-widest" aria-hidden="true">5 + 3 =</span>
                        <span class="sr-only">Combien font cinq plus trois ?</span>
                        <input type="number" id="captcha" name="captcha_reponse" required aria-required="true" aria-describedby="captcha-instruction" class="bg-black border border-gray-700 text-white p-3 rounded w-32 focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition-all">
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-purple-500 text-white font-bold uppercase tracking-wider py-4 rounded hover:bg-purple-400 focus:outline-none focus:ring-4 focus:ring-purple-300 transition-all font-['Tanker'] text-xl">
                        Valider mon inscription
                    </button>
                </div>

            </form>
        </section>

    </main>

    <!-- Appel du footer global du site -->
    <x-commun.footer />

</x-layout.base>