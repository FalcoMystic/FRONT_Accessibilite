<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Conseils accessibles pour adapter son alimentation à la musculation et à la calisthénie.">
    <title>Nutrition | TopDiff</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-fond text-noir antialiased">
    <a href="#contenu" class="absolute left-4 top-4 z-50 -translate-y-24 bg-noir px-4 py-3 text-sm font-semibold text-blanc transition-transform focus:translate-y-0 focus:outline-none focus:ring-4 focus:ring-violet">
        Aller au contenu principal
    </a>

   <x-commun.header></x-commun.header>

    <main id="contenu" tabindex="-1" aria-labelledby="titre-principal" class="bg-fond text-texte-clair">
        <section aria-labelledby="titre-principal" class="mx-auto grid max-w-7xl gap-10 px-5 py-16 sm:px-8 lg:grid-cols-[1.1fr_0.9fr] lg:items-center lg:py-24">
            <div>
                <p class="petit-titre mb-5 text-violet">Nutrition et performance</p>
                <h1 id="titre-principal" class="max-w-4xl text-5xl font-black uppercase leading-[0.95] tracking-tight sm:text-7xl lg:text-8xl">
                    Organiser son alimentation.<br><span class="text-violet">Sans se perdre.</span>
                </h1>
                <p class="mt-8 max-w-2xl text-lg leading-8 text-texte-secondaire">
                    Une méthode concrète pour manger suffisamment, récupérer entre deux séances et faire évoluer ses habitudes sans tomber dans les interdits.
                </p>
                <a href="#bases" class="mt-8 inline-flex items-center bg-violet px-6 py-4 text-sm font-bold uppercase tracking-wide text-noir transition hover:bg-blanc focus:outline-none focus-visible:ring-4 focus-visible:ring-violet focus-visible:ring-offset-4 focus-visible:ring-offset-fond">
                    Commencer le guide <span aria-hidden="true" class="ml-3 text-xl">&#8595;</span>
                </a>
            </div>
            <figure class="border border-bordure bg-noir p-4 sm:p-6">
                <img src="{{ asset('img/diet/mmmmm.jpg') }}" alt="Assiette équilibrée composée de légumes, de féculents et d’une source de protéines" class="aspect-[4/5] w-full object-cover" width="800" height="1000">
            </figure>
        </section>

        <section id="bases" aria-labelledby="titre-bases" class="border-y border-bordure bg-blanc px-5 py-16 text-noir sm:px-8 lg:py-24">
            <div class="mx-auto max-w-7xl">
                <p class="petit-titre text-violet">01 / Les bases</p>
                <h2 id="titre-bases" class="mt-3 max-w-3xl text-4xl font-black uppercase leading-tight sm:text-6xl">Une assiette, plusieurs rôles</h2>
                <p class="mt-6 max-w-3xl text-lg leading-8 text-gris-clair">Chaque repas peut contribuer à votre énergie, votre satiété et votre récupération. Pensez en familles d’aliments plutôt qu’en aliments « parfaits ».</p>
                <div class="mt-12 grid gap-5 md:grid-cols-3">
                    <article class="border-2 border-noir bg-fond p-6 text-texte-clair">
                        <p class="text-4xl font-black text-violet" aria-hidden="true">01</p>
                        <h3 class="mt-8 text-2xl font-black uppercase">Une source d’énergie</h3>
                        <p class="mt-4 leading-7 text-texte-secondaire">Les féculents, céréales, légumineuses ou fruits apportent du carburant pour les entraînements et les activités de la journée.</p>
                    </article>
                    <article class="border-2 border-noir bg-violet p-6 text-noir">
                        <p class="text-4xl font-black" aria-hidden="true">02</p>
                        <h3 class="mt-8 text-2xl font-black uppercase">Une source de protéines</h3>
                        <p class="mt-4 leading-7">Œufs, poisson, produits laitiers, tofu, légumineuses ou viande peuvent participer au renouvellement et à la réparation musculaire.</p>
                    </article>
                    <article class="border-2 border-noir bg-fond p-6 text-texte-clair">
                        <p class="text-4xl font-black text-violet" aria-hidden="true">03</p>
                        <h3 class="mt-8 text-2xl font-black uppercase">Des végétaux et du goût</h3>
                        <p class="mt-4 leading-7 text-texte-secondaire">Légumes, fruits, herbes et matières grasses variées complètent le repas et rendent la routine agréable à tenir.</p>
                    </article>
                </div>
            </div>
        </section>

        <section aria-labelledby="titre-proteines" class="mx-auto grid max-w-7xl gap-10 px-5 py-16 sm:px-8 lg:grid-cols-[0.95fr_1.05fr] lg:items-center lg:py-24">
            <figure>
                <img src="{{ asset('img/diet/proteins.png') }}" alt="Plusieurs aliments riches en protéines disposés sur une table, dont des œufs, des légumineuses et du tofu" class="aspect-[4/3] w-full border border-bordure object-cover" width="800" height="600">
            </figure>
            <div>
                <p class="petit-titre text-violet">Focus / Protéines</p>
                <h2 id="titre-proteines" class="mt-3 text-4xl font-black uppercase leading-tight sm:text-6xl">Combien en manger ?</h2>
                <p class="mt-6 text-lg leading-8 text-texte-secondaire">Les protéines ne servent pas uniquement à « prendre du muscle ». Elles participent aussi à la satiété et au renouvellement des tissus. Leur intérêt dépend de l’ensemble de l’alimentation, de l’activité physique et du contexte de santé.</p>
                <p class="mt-5 text-lg leading-8 text-texte-secondaire">Pour une personne adulte pratiquant régulièrement un sport, un repère souvent utilisé se situe autour de <strong class="text-texte-clair">1,2 à 2 g de protéines par kilogramme de poids corporel et par jour</strong>. Ce n’est pas une obligation ni une prescription : les besoins varient, et augmenter sans limite n’apporte pas automatiquement de meilleurs résultats.</p>
                <div class="mt-8 border-l-4 border-violet pl-5 text-texte-clair">
                    <h3 class="text-xl font-black uppercase">Exemple de répartition</h3>
                    <p class="mt-2 leading-7 text-texte-secondaire">Plutôt que de concentrer toutes les protéines sur un seul repas, répartissez-les sur deux à quatre prises selon votre rythme. Une portion peut venir d’un aliment principal et être complétée par un laitage, du soja ou une légumineuse.</p>
                </div>
            </div>
        </section>

        <section aria-labelledby="titre-rythme" class="mx-auto grid max-w-7xl gap-12 px-5 py-16 sm:px-8 lg:grid-cols-[0.9fr_1.1fr] lg:items-start lg:py-24">
            <div>
                <p class="petit-titre text-violet">02 / Le rythme</p>
                <h2 id="titre-rythme" class="mt-3 text-4xl font-black uppercase leading-tight sm:text-6xl">Répartir plutôt que tout contrôler</h2>
            </div>
            <div class="space-y-8 text-lg leading-8 text-texte-secondaire">
                <p>Il n’existe pas d’horaire universel. Trois repas structurés peuvent convenir à certaines personnes, tandis que d’autres préfèrent ajouter une collation selon leur faim, leurs contraintes et leur entraînement.</p>
                <ol class="space-y-6 border-l-2 border-violet pl-6 text-texte-clair">
                    <li><strong class="text-violet">Au réveil :</strong> choisissez un repas qui vous apporte de l’énergie et qui correspond à votre appétit.</li>
                    <li><strong class="text-violet">Avant la séance :</strong> privilégiez une portion digeste, avec une source de glucides et de l’eau.</li>
                    <li><strong class="text-violet">Après la séance :</strong> reprenez un repas normal avec protéines, féculents et végétaux, sans chercher une urgence.</li>
                </ol>
                <figure class="w-full border border-bordure bg-noir p-4">
                    <img src="{{ asset('img/diet/mealpreps.jpg') }}" alt="Boîtes de repas préparées avec du poulet, du riz et des légumes verts" class="aspect-[16/7] w-full object-cover object-center" width="1200" height="525">
                    <figcaption class="mt-4 text-sm leading-6 text-texte-secondaire">Préparation de plusieurs repas avec une source de protéines, un féculent et des légumes.</figcaption>
                </figure>
            </div>
        </section>

        <section aria-labelledby="titre-hydratation" class="border-y border-bordure bg-noir px-5 py-16 sm:px-8 lg:py-24">
            <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
                <div>
                    <p class="petit-titre text-violet">03 / Hydratation et récupération</p>
                    <h2 id="titre-hydratation" class="mt-3 text-4xl font-black uppercase leading-tight sm:text-6xl">Les progrès se construisent aussi hors de la salle</h2>
                    <p class="mt-6 max-w-2xl text-lg leading-8 text-texte-secondaire">Buvez régulièrement et adaptez-vous à la chaleur, à la durée de l’effort et à votre transpiration. Le sommeil et des repas suffisamment réguliers complètent le travail réalisé à l’entraînement.</p>
                    <ul class="mt-8 space-y-4 border-l-2 border-violet pl-6 text-lg leading-7 text-texte-clair">
                        <li><strong class="text-violet">Avant :</strong> commencez la séance hydraté et gardez une bouteille facilement accessible.</li>
                        <li><strong class="text-violet">Pendant :</strong> buvez selon votre soif et la durée de l’effort ; une séance longue ou très chaude demande davantage d’attention.</li>
                        <li><strong class="text-violet">Après :</strong> poursuivez les apports et associez l’eau à un repas normal. Les boissons très sucrées ou les compléments ne sont pas systématiquement nécessaires.</li>
                    </ul>
                </div>
                <figure>
                    <img src="{{ asset('img/diet/hydrate.jpg') }}" alt="Gourde placée à côté d’un équipement de sport" class="aspect-[4/3] w-full border border-bordure object-cover" width="800" height="600">
                </figure>
            </div>
        </section>

        <section aria-labelledby="titre-objectifs" class="border-y border-bordure bg-blanc px-5 py-16 text-noir sm:px-8 lg:py-24">
            <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
                <div>
                    <p class="petit-titre text-violet">04 / Objectif et énergie</p>
                    <h2 id="titre-objectifs" class="mt-3 text-4xl font-black uppercase leading-tight sm:text-6xl">Perdre, maintenir ou prendre de la masse</h2>
                    <p class="mt-6 text-lg leading-8 text-gris-clair">Le poids évolue principalement selon l’équilibre entre l’énergie consommée et l’énergie dépensée. Ce bilan se regarde sur plusieurs semaines : une journée isolée ne définit pas votre progression.</p>
                    <div class="mt-10 grid gap-5 md:grid-cols-3">
                        <article class="border-2 border-noir bg-fond p-5 text-texte-clair">
                            <h3 class="text-xl font-black uppercase text-violet">Déficit</h3>
                            <p class="mt-3 leading-7 text-texte-secondaire">Apports légèrement inférieurs aux dépenses. Pour perdre du poids, une réduction progressive est généralement plus tenable qu’une restriction brutale.</p>
                        </article>
                        <article class="border-2 border-noir bg-violet p-5">
                            <h3 class="text-xl font-black uppercase">Équilibre</h3>
                            <p class="mt-3 leading-7">Apports proches des dépenses. C’est une base utile pour stabiliser son poids, observer sa faim et construire ses performances.</p>
                        </article>
                        <article class="border-2 border-noir bg-fond p-5 text-texte-clair">
                            <h3 class="text-xl font-black uppercase text-violet">Surplus</h3>
                            <p class="mt-3 leading-7 text-texte-secondaire">Apports légèrement supérieurs aux dépenses. Pour prendre de la masse, un surplus modéré associé à l’entraînement limite les évolutions trop rapides.</p>
                        </article>
                    </div>
                </div>
                <figure>
                    <img src="{{ asset('img/diet/plan.jpg') }}" alt="Carnet avec des repères de progression, un repas et une balance utilisés pour suivre un objectif sans obsession" class="aspect-[4/5] w-full border border-noir object-cover" width="800" height="1000">
                </figure>
            </div>
        </section>

        <section aria-labelledby="titre-adapter" class="mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:py-24">
            <div class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr]">
                <div class="border-l-8 border-violet pl-6">
                    <p class="petit-titre text-violet">04 / Ajuster</p>
                    <h2 id="titre-adapter" class="mt-3 text-4xl font-black uppercase leading-tight sm:text-6xl">Observer, tester, ajuster</h2>
                </div>
                <div class="text-lg leading-8 text-texte-secondaire">
                    <p>Suivez quelques indicateurs simples : votre énergie pendant la séance, votre faim, votre récupération et votre évolution dans le temps. Changez un seul élément à la fois pour comprendre ce qui vous convient.</p>
                    <aside aria-labelledby="titre-vigilance" class="mt-8 border border-bordure bg-blanc p-6 text-noir">
                        <h3 id="titre-vigilance" class="text-xl font-black uppercase">Point de vigilance</h3>
                        <p class="mt-3 leading-7 text-gris-clair">Ces repères sont généraux. En cas de pathologie, de traitement, de trouble du comportement alimentaire ou d’objectif spécifique, demandez l’avis d’un professionnel de santé.</p>
                    </aside>
                </div>
            </div>
        </section>

        <section aria-labelledby="titre-inscription" class="bg-violet px-5 py-16 text-noir sm:px-8 lg:py-20">
            <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[1fr_0.9fr] lg:items-end">
                <div>
                    <p class="petit-titre">Le prochain repère</p>
                    <h2 id="titre-inscription" class="mt-3 max-w-xl text-4xl font-black uppercase leading-tight sm:text-5xl">Recevoir les conseils nutrition</h2>
                    <p class="mt-5 max-w-xl text-lg leading-8">Une sélection mensuelle de conseils pratiques, lisibles et directement applicables.</p>
                </div>
                <form action="{{ route('diet.index') }}" method="get" aria-labelledby="titre-inscription" class="border-2 border-noir bg-blanc p-5 sm:p-7">
                    <label for="email" class="block text-sm font-bold uppercase tracking-wide">Adresse e-mail</label>
                    <input id="email" name="email" type="email" autocomplete="email" required aria-describedby="email-aide" class="mt-3 block w-full border-2 border-noir bg-blanc px-4 py-3 text-base text-noir outline-none placeholder:text-gris-clair focus:border-violet focus:ring-4 focus:ring-violet" placeholder="vous@exemple.fr">
                    <p id="email-aide" class="mt-2 text-sm text-gris-clair">Champ obligatoire. Vous pourrez vous désinscrire à tout moment.</p>
                    <button type="submit" class="mt-5 w-full border-2 border-noir bg-fond px-5 py-3 text-sm font-bold uppercase tracking-wide text-texte-clair transition hover:bg-violet focus:outline-none focus-visible:ring-4 focus-visible:ring-noir">S’inscrire</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="border-t border-bordure bg-fond px-5 py-8 sm:px-8">
        <div class="mx-auto flex max-w-7xl flex-col gap-3 text-sm text-texte-secondaire sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; {{ date('Y') }} TopDiff. Une pratique accessible à chacun.</p>
            <a href="#contenu" class="font-semibold underline underline-offset-4 focus:outline-none focus-visible:ring-4 focus-visible:ring-violet">Retour au contenu</a>
        </div>
    </footer>
</body>
</html>
