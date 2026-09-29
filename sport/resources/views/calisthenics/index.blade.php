<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Callisthénie : bénéfices et conseils d’entraînement</title>
</head>

<body class="bg-gray-700 text-white">
    <a href="#contenu"
        class="sr-only focus:not-sr-only focus:absolute focus:z-10 focus:rounded-md focus:bg-white focus:p-3 focus:text-black">
        Aller au contenu principal
    </a>

    <main id="contenu">
        <div class="mt-18 w-auto mx-6 md:mx-20">
            <div class="mb-10">
                <h1 class="text-5xl mb-4">Callisthénie</h1>
                <p>La callisthénie est une discipline sportive basée sur l'utilisation du poids du corps. Elle permet de
                    développer la force, la mobilité, l'équilibre et la coordination grâce à des mouvements simples et
                    progressifs.</p>
                <p>Accessible à tous les niveaux, elle peut se pratiquer sans matériel ou avec un équipement minimal, en
                    intérieur comme en extérieur.</p>
            </div>
            <section class="mb-10">
                <h2 class="text-4xl mb-4">Bénéfices</h2>
                <p>La pratique régulière de la callisthénie permet de renforcer les muscles en profondeur, notamment
                    ceux
                    du haut du corps, de la sangle abdominale et des jambes. Les exercices progressifs améliorent aussi
                    la
                    souplesse, la mobilité articulaire et la stabilité. En apprenant à contrôler chaque mouvement, on
                    développe progressivement son équilibre, sa coordination et une meilleure maîtrise de son corps.</p>
            </section>
            <aside class="mb-10 border-l-4 border-yellow-400 bg-gray-800 p-6">
                <blockquote class="text-xl italic">
                    « La progression ne se mesure pas seulement à la difficulté des mouvements, mais aussi à la maîtrise
                    et à la régularité avec lesquelles ils sont réalisés. »
                </blockquote>
                <cite class="mt-3 block text-sm not-italic text-gray-300">Principe de progression en callisthénie</cite>
            </aside>
            <section class="mb-10">
                <h2 class="text-4xl mb-6">Avantages</h2>
                <ul class="grid grid-flow-col grid-rows-2 gap-4 text-center">
                    <li class="p-4 border-2 border-gray-300 rounded-md bg-white text-black shadow-sm">Renforcer les muscles en profondeur</li>
                    <li class="p-4 border-2 border-gray-300 rounded-md bg-white text-black shadow-sm">Améliorer la souplesse et la mobilité</li>
                    <li class="p-4 border-2 border-gray-300 rounded-md bg-white text-black shadow-sm">Développer l'équilibre et la coordination
                    </li>
                    <li class="p-4 border-2 border-gray-300 rounded-md bg-white text-black shadow-sm">Améliorer la posture et l'endurance</li>
                    <li class="p-4 border-2 border-gray-300 rounded-md bg-white text-black shadow-sm">Renforcer la confiance en soi</li>
                    <li class="p-4 border-2 border-gray-300 rounded-md bg-white text-black shadow-sm">Progresser à son propre rythme</li>
                </ul>
            </section>
            <section class="mb-10">
                <h2 class="text-4xl mb-6">Photos</h2>
                <div class="flex flex-wrap justify-center items-center gap-2">
                    <img class="w-auto h-120 border-2 text-black" src="{{ asset('img/flag.webp') }}"
                        alt="Position drapeau en callisthénie">
                    <img class="w-auto h-120 border-2 text-black" src="{{ asset('img/handstand.webp') }}"
                        alt="Position poirier en callisthénie">
                    <img class="w-auto h-120 border-2 text-black" src="{{ asset('img/Lever.webp') }}"
                        alt="Position levier en callisthénie">
                </div>
            </section>
            <section class="mb-10">
                <h2 class="text-4xl mb-6">Foire à questions</h2>
                <h3 class="text-2xl mb-2 p-4 border-2 border-gray-300 rounded-md bg-white text-black shadow-sm">
                    Faut-il être sportif pour commencer ?
                </h3>
                <p class="mb-6 pl-6">Non. La callisthénie est accessible aux débutants. Les exercices peuvent être
                    adaptés à
                    votre niveau
                    et à vos capacités.</p>
                <h3 class="text-2xl mb-2 p-4 border-2 border-gray-300 rounded-md bg-white text-black shadow-sm">
                    Quel matériel faut-il utiliser ?
                </h3>
                <p class="mb-6 pl-6">Aucun matériel n'est obligatoire pour débuter. Un tapis, une barre de traction ou
                    des
                    barres
                    parallèles peuvent toutefois enrichir les entraînements.</p>
                <h3 class="text-2xl mb-2 p-4 border-2 border-gray-300 rounded-md bg-white text-black shadow-sm">
                    À quelle fréquence faut-il s'entraîner ?
                </h3>
                <p class="mb-6 pl-6">Deux à trois séances par semaine suffisent pour progresser. L'important est de
                    rester
                    régulier et de
                    laisser au corps le temps de récupérer.</p>
            </section>
            <section class="mb-10">
                <h2 class="text-4xl mb-6">Contact</h2>
                <p class="mb-4">Une question sur la callisthénie ou sur les entraînements ? Contactez-nous pour obtenir
                    des conseils
                    adaptés à votre niveau.</p>
                <form action="" class="flex flex-col p-4 border-2 border-gray-300 rounded-md bg-white text-black shadow-sm">
                    <label class="mb-2" for="nom">Nom</label>
                    <input id="nom" class="border border-gray-400 rounded-md p-2 mb-3" type="text" name="nom" autocomplete="family-name"
                        required>
                    <label class="mb-2" for="prenom">Prénom</label>
                    <input id="prenom" class="border border-gray-400 rounded-md p-2 mb-3" type="text" name="prenom" autocomplete="given-name"
                        required>
                    <label class="mb-2" for="email">Adresse e-mail</label>
                    <input id="email" class="border border-gray-400 rounded-md p-2 mb-3" type="email" name="email" autocomplete="email"
                        required>
                    <label class="mb-2" for="telephone">Numéro de téléphone</label>
                    <input id="telephone" class="border border-gray-400 rounded-md p-2 mb-6" type="tel" name="telephone" autocomplete="tel">
                    <fieldset class="mb-4">
                        <legend class="text-lg mb-2">Niveau de pratique</legend>
                        <div class="flex flex-col gap-2">
                            <label><input class="border" type="radio" name="niveau" value="debutant"> Débutant</label>
                            <label><input class="border" type="radio" name="niveau" value="intermediaire">
                                Intermédiaire</label>
                        </div>
                    </fieldset>
                    <label class="mb-4"><input class="border" type="checkbox" name="informations"> Je souhaite recevoir
                        des conseils
                        et des informations sur la callisthénie.</label>
                    <button
                        class="border rounded-md flex justify-center items-center p-2 bg-green-700 text-white focus-visible:outline-4 focus-visible:outline-offset-2 focus-visible:outline-yellow-400"
                        type="submit">
                        Envoyer le message
                    </button>
                </form>
            </section>
        </div>
    </main>
</body>

</html>
