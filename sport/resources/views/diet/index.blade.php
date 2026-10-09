<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Conseils accessibles pour adapter son alimentation à la musculation et à la Callisthénie.">
    <title>Nutrition - TopDiff</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[var(--color-background)] text-[var(--color-text)] antialiased">
    <x-commun.header></x-commun.header>

    <nav aria-label="Navigation des sections nutrition" class="border-y border-[var(--color-border)] bg-[var(--color-background)] px-5 py-4 sm:px-8">
        <ul class="mx-auto flex max-w-7xl list-none flex-wrap items-center gap-2 p-0 text-xs font-bold uppercase tracking-widest text-[var(--color-text-muted)]">
            <li><a href="#bases" class="inline-block px-3 py-2 transition hover:text-[var(--color-text)] hover:underline">Les bases</a></li>
            <li><a href="#proteines" class="inline-block px-3 py-2 transition hover:text-[var(--color-text)] hover:underline">Protéines</a></li>
            <li><a href="#hydratation" class="inline-block px-3 py-2 transition hover:text-[var(--color-text)] hover:underline">Hydratation</a></li>
            <li><a href="#objectifs" class="inline-block px-3 py-2 transition hover:text-[var(--color-text)] hover:underline">Objectifs</a></li>
            <li><a href="#apports" class="inline-block px-3 py-2 transition hover:text-[var(--color-text)] hover:underline">Tableau</a></li>
        </ul>
    </nav>

    <main id="contenu" tabindex="-1" aria-labelledby="titre-principal" class="bg-[var(--color-background)] text-[var(--color-text)]">
        <section aria-labelledby="titre-principal" class="mx-auto grid max-w-7xl gap-10 px-5 py-16 sm:px-8 lg:grid-cols-[1.1fr_0.9fr] lg:items-center lg:py-24">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.24em] mb-5 text-[var(--color-purple)]">Nutrition et performance</p>
                <h1 id="titre-principal" class="max-w-4xl text-5xl font-black uppercase leading-[0.95] tracking-tight sm:text-7xl lg:text-8xl">
                    Organiser son alimentation.<br><span class="text-[var(--color-purple)]">Sans se perdre.</span>
                </h1>
                <p class="mt-8 max-w-2xl text-lg leading-8 text-[var(--color-text-muted)]">
                    Une méthode concrète pour manger suffisamment, récupérer entre deux séances et faire évoluer ses habitudes sans tomber dans les interdits.
                </p>
                <a href="#bases" class="mt-8 inline-flex items-center bg-[var(--color-purple)] px-6 py-4 text-sm font-bold uppercase tracking-wide text-[var(--color-text-dark)] transition hover:bg-[var(--color-surface-light)] focus:outline-none focus-visible:ring-4 focus-visible:ring-[var(--color-purple)] focus-visible:ring-offset-4 focus-visible:ring-offset-[var(--color-background)]">
                    Commencer le guide <span aria-hidden="true" class="ml-3 text-xl">&#8595;</span>
                </a>
            </div>
            <figure class="border border-[var(--color-border)] bg-[var(--color-background)] p-4 sm:p-6">
                <img src="{{ asset('img/diet/mmmmm.jpg') }}" alt="" class="aspect-[4/5] w-full object-cover" width="800" height="1000">
            </figure>
        </section>

        <section id="bases" aria-labelledby="titre-bases" class="border-y border-[var(--color-border)] bg-[var(--color-surface-light)] px-5 py-16 text-[var(--color-text-dark)] sm:px-8 lg:py-24">
            <div class="mx-auto max-w-7xl">
                <p class="text-xs font-bold uppercase tracking-[0.24em] text-[var(--color-purple)]">Les bases</p>
                <h2 id="titre-bases" class="mt-3 max-w-3xl text-4xl font-black uppercase leading-tight sm:text-6xl">Une assiette, plusieurs rôles</h2>
                <p class="mt-6 max-w-3xl text-lg leading-8 text-[var(--color-gray)]">Chaque repas peut contribuer à votre énergie, votre satiété et votre récupération. Pensez en familles d’aliments plutôt qu’en aliments « parfaits ».</p>
                <div class="mt-12 grid gap-5 md:grid-cols-3">
                    <article class="border-2 border-[var(--color-text-dark)] bg-[var(--color-background)] p-6 text-[var(--color-text)]">
                        <h3 class="mt-8 text-2xl font-black uppercase">Une source d’énergie</h3>
                        <p class="mt-4 leading-7 text-[var(--color-text-muted)]">Les féculents, céréales, légumineuses ou fruits apportent du carburant pour les entraînements et les activités de la journée.</p>
                    </article>
                    <article class="border-2 border-[var(--color-text-dark)] bg-[var(--color-purple)] p-6 text-[var(--color-text-dark)]">
                        <h3 class="mt-8 text-2xl font-black uppercase">Une source de protéines</h3>
                        <p class="mt-4 leading-7">Œufs, poisson, produits laitiers, tofu, légumineuses ou viande peuvent participer au renouvellement et à la réparation musculaire.</p>
                    </article>
                    <article class="border-2 border-[var(--color-text-dark)] bg-[var(--color-background)] p-6 text-[var(--color-text)]">
                        <h3 class="mt-8 text-2xl font-black uppercase">Des végétaux et du goût</h3>
                        <p class="mt-4 leading-7 text-[var(--color-text-muted)]">Légumes, fruits, herbes et matières grasses variées complètent le repas et rendent la routine agréable à tenir.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="proteines" aria-labelledby="titre-proteines" class="mx-auto grid max-w-7xl gap-10 px-5 py-16 sm:px-8 lg:grid-cols-[0.95fr_1.05fr] lg:items-center lg:py-24">
            <figure>
                <img src="{{ asset('img/diet/proteins.png') }}" alt="" class="aspect-[4/3] w-full border border-[var(--color-border)] object-cover" width="800" height="600">
            </figure>
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.24em] text-[var(--color-purple)]">Focus / Protéines</p>
                <h2 id="titre-proteines" class="mt-3 text-4xl font-black uppercase leading-tight sm:text-6xl">Combien en manger ?</h2>
                <p class="mt-6 text-lg leading-8 text-[var(--color-text-muted)]">Les protéines ne servent pas uniquement à « prendre du muscle ». Elles participent aussi à la satiété et au renouvellement des tissus. Leur intérêt dépend de l’ensemble de l’alimentation, de l’activité physique et du contexte de santé.</p>
                <p class="mt-5 text-lg leading-8 text-[var(--color-text-muted)]">Pour une personne adulte pratiquant régulièrement un sport, un repère souvent utilisé se situe autour de <strong class="text-[var(--color-text)]">1,2 à 2 g de protéines par kilogramme de poids corporel et par jour</strong>. Ce n’est pas une obligation ni une prescription : les besoins varient, et augmenter sans limite n’apporte pas automatiquement de meilleurs résultats.</p>
                <div class="mt-8 border-l-4 border-[var(--color-purple)] pl-5 text-[var(--color-text)]">
                    <h3 class="text-xl font-black uppercase">Exemple de répartition</h3>
                    <p class="mt-2 leading-7 text-[var(--color-text-muted)]">Plutôt que de concentrer toutes les protéines sur un seul repas, répartissez-les sur deux à quatre prises selon votre rythme. Une portion peut venir d’un aliment principal et être complétée par un laitage, du soja ou une légumineuse.</p>
                </div>
            </div>
        </section>

        <section id="rythme" aria-labelledby="titre-rythme" class="mx-auto grid max-w-7xl gap-12 px-5 py-16 sm:px-8 lg:grid-cols-[0.9fr_1.1fr] lg:items-start lg:py-24">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.24em] text-[var(--color-purple)]">Le rythme</p>
                <h2 id="titre-rythme" class="mt-3 text-4xl font-black uppercase leading-tight sm:text-6xl">Répartir plutôt que tout contrôler</h2>
            </div>
            <div class="space-y-8 text-lg leading-8 text-[var(--color-text-muted)]">
                <p>Il n’existe pas d’horaire universel. Trois repas structurés peuvent convenir à certaines personnes, tandis que d’autres préfèrent ajouter une collation selon leur faim, leurs contraintes et leur entraînement.</p>
                <ol class="space-y-6 border-l-2 border-[var(--color-purple)] pl-6 text-[var(--color-text)]">
                    <li><strong class="text-[var(--color-purple)]">Au réveil :</strong> choisissez un repas qui vous apporte de l’énergie et qui correspond à votre appétit.</li>
                    <li><strong class="text-[var(--color-purple)]">Avant la séance :</strong> privilégiez une portion digeste, avec une source de glucides et de l’eau.</li>
                    <li><strong class="text-[var(--color-purple)]">Après la séance :</strong> reprenez un repas normal avec protéines, féculents et végétaux, sans chercher une urgence.</li>
                </ol>
                <figure class="w-full border border-[var(--color-border)] bg-[var(--color-background)] p-4">
                    <img src="{{ asset('img/diet/mealpreps.jpg') }}" alt="" class="aspect-[16/7] w-full object-cover object-center" width="1200" height="525">
                    <figcaption class="mt-4 text-sm leading-6 text-[var(--color-text-muted)]">Préparation de plusieurs repas avec une source de protéines, un féculent et des légumes.</figcaption>
                </figure>
            </div>
        </section>

        <section id="hydratation" aria-labelledby="titre-hydratation" class="border-y border-[var(--color-border)] bg-[var(--color-background)] px-5 py-16 sm:px-8 lg:py-24">
            <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.24em] text-[var(--color-purple)]">Hydratation et récupération</p>
                    <h2 id="titre-hydratation" class="mt-3 text-4xl font-black uppercase leading-tight sm:text-6xl">Les progrès se construisent aussi hors de la salle</h2>
                    <p class="mt-6 max-w-2xl text-lg leading-8 text-[var(--color-text-muted)]">Buvez régulièrement et adaptez-vous à la chaleur, à la durée de l’effort et à votre transpiration. Le sommeil et des repas suffisamment réguliers complètent le travail réalisé à l’entraînement.</p>
                    <ul class="mt-8 space-y-4 border-l-2 border-[var(--color-purple)] pl-6 text-lg leading-7 text-[var(--color-text)]">
                        <li><strong class="text-[var(--color-purple)]">Avant :</strong> commencez la séance hydraté et gardez une bouteille facilement accessible.</li>
                        <li><strong class="text-[var(--color-purple)]">Pendant :</strong> buvez selon votre soif et la durée de l’effort ; une séance longue ou très chaude demande davantage d’attention.</li>
                        <li><strong class="text-[var(--color-purple)]">Après :</strong> poursuivez les apports et associez l’eau à un repas normal. Les boissons très sucrées ou les compléments ne sont pas systématiquement nécessaires.</li>
                    </ul>
                </div>
                <figure>
                    <img src="{{ asset('img/diet/hydrate.jpg') }}" alt="" class="aspect-[4/3] w-full border border-[var(--color-border)] object-cover" width="800" height="600">
                </figure>
            </div>
        </section>

        <section id="objectifs" aria-labelledby="titre-objectifs" class="border-y border-[var(--color-border)] bg-[var(--color-surface-light)] px-5 py-16 text-[var(--color-text-dark)] sm:px-8 lg:py-24">
            <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.24em] text-[var(--color-purple)]">Objectif et énergie</p>
                    <h2 id="titre-objectifs" class="mt-3 text-4xl font-black uppercase leading-tight sm:text-6xl">Perdre, maintenir ou prendre de la masse</h2>
                    <p class="mt-6 text-lg leading-8 text-[var(--color-gray)]">Le poids évolue principalement selon l’équilibre entre l’énergie consommée et l’énergie dépensée. Ce bilan se regarde sur plusieurs semaines : une journée isolée ne définit pas votre progression.</p>
                    <div class="mt-10 grid gap-5 md:grid-cols-3">
                        <article class="border-2 border-[var(--color-text-dark)] bg-[var(--color-background)] p-5 text-[var(--color-text)]">
                            <h3 class="text-xl font-black uppercase text-[var(--color-purple)]">Déficit</h3>
                            <p class="mt-3 leading-7 text-[var(--color-text-muted)]">Apports légèrement inférieurs aux dépenses. Pour perdre du poids, une réduction progressive est généralement plus tenable qu’une restriction brutale.</p>
                        </article>
                        <article class="border-2 border-[var(--color-text-dark)] bg-[var(--color-purple)] p-5">
                            <h3 class="text-xl font-black uppercase">Équilibre</h3>
                            <p class="mt-3 leading-7">Apports proches des dépenses. C’est une base utile pour stabiliser son poids, observer sa faim et construire ses performances.</p>
                        </article>
                        <article class="border-2 border-[var(--color-text-dark)] bg-[var(--color-background)] p-5 text-[var(--color-text)]">
                            <h3 class="text-xl font-black uppercase text-[var(--color-purple)]">Surplus</h3>
                            <p class="mt-3 leading-7 text-[var(--color-text-muted)]">Apports légèrement supérieurs aux dépenses. Pour prendre de la masse, un surplus modéré associé à l’entraînement limite les évolutions trop rapides.</p>
                        </article>
                    </div>
                </div>
                <figure>
                    <img src="{{ asset('img/diet/plan.jpg') }}" alt="" class="aspect-[4/5] w-full border border-[var(--color-text-dark)] object-cover" width="800" height="1000">
                </figure>
            </div>
        </section>

        <section id="apports" aria-labelledby="titre-apports" class="border-b border-[var(--color-border)] bg-[var(--color-background)] px-5 py-16 sm:px-8 lg:py-24">
            <div class="mx-auto max-w-7xl">
                <p class="text-xs font-bold uppercase tracking-[0.24em] text-[var(--color-purple)]">Repères chiffrés</p>
                <h2 id="titre-apports" class="mt-3 max-w-4xl text-4xl font-black uppercase leading-tight sm:text-6xl">Des repères pour se situer</h2>
                <p class="mt-6 max-w-4xl text-lg leading-8 text-[var(--color-text-muted)]">Ce tableau propose des exemples journaliers pour des adultes ayant une activité physique modérée. Les valeurs sont calculées à partir d’un scénario pédagogique : environ 1,6 g de protéines, 0,8 g de lipides et 5 g de glucides par kilogramme de poids corporel.</p>
                <p id="resume-apports" class="mt-4 max-w-4xl text-base leading-7 text-[var(--color-text-muted)]">Le tableau compare six profils selon le sexe et le poids. Chaque ligne indique le poids de référence puis une estimation en grammes par jour pour les protéines, les lipides et les glucides. Ces chiffres ne constituent ni une prescription médicale ni un objectif obligatoire.</p>

                <div class="mt-10 overflow-x-auto border border-[var(--color-border)] bg-[var(--color-background)] p-3 focus:outline-none focus-visible:ring-4 focus-visible:ring-[var(--color-purple)]" tabindex="0" role="region" aria-label="Tableau des apports nutritionnels indicatifs">
                    <table aria-describedby="resume-apports" class="w-full min-w-[52rem] border-collapse text-left text-base">
                        <caption class="mb-4 text-left text-lg font-bold text-[var(--color-text)]">Apports journaliers indicatifs selon le profil et le poids</caption>
                        <thead class="bg-[var(--color-purple)] text-[var(--color-text-dark)]">
                            <tr>
                                <th scope="col" class="border border-[var(--color-text-dark)] px-4 py-3 font-bold">Profil</th>
                                <th scope="col" class="border border-[var(--color-text-dark)] px-4 py-3 font-bold">Poids de référence</th>
                                <th scope="col" class="border border-[var(--color-text-dark)] px-4 py-3 font-bold">Protéines<br>(g / jour)</th>
                                <th scope="col" class="border border-[var(--color-text-dark)] px-4 py-3 font-bold">Lipides<br>(g / jour)</th>
                                <th scope="col" class="border border-[var(--color-text-dark)] px-4 py-3 font-bold">Glucides<br>(g / jour)</th>
                            </tr>
                        </thead>
                        <tbody class="text-[var(--color-text)]">
                            <tr class="bg-[var(--color-background)]">
                                <th scope="row" class="border border-[var(--color-border)] px-4 py-3 font-bold text-[var(--color-purple)]">Homme</th>
                                <td class="border border-[var(--color-border)] px-4 py-3">60 kg</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">96 g</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">48 g</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">300 g</td>
                            </tr>
                            <tr>
                                <th scope="row" class="border border-[var(--color-border)] px-4 py-3 font-bold text-[var(--color-purple)]">Homme</th>
                                <td class="border border-[var(--color-border)] px-4 py-3">75 kg</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">120 g</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">60 g</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">375 g</td>
                            </tr>
                            <tr class="bg-[var(--color-background)]">
                                <th scope="row" class="border border-[var(--color-border)] px-4 py-3 font-bold text-[var(--color-purple)]">Homme</th>
                                <td class="border border-[var(--color-border)] px-4 py-3">90 kg</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">144 g</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">72 g</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">450 g</td>
                            </tr>
                            <tr>
                                <th scope="row" class="border border-[var(--color-border)] px-4 py-3 font-bold text-[var(--color-purple)]">Femme</th>
                                <td class="border border-[var(--color-border)] px-4 py-3">50 kg</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">80 g</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">40 g</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">250 g</td>
                            </tr>
                            <tr class="bg-[var(--color-background)]">
                                <th scope="row" class="border border-[var(--color-border)] px-4 py-3 font-bold text-[var(--color-purple)]">Femme</th>
                                <td class="border border-[var(--color-border)] px-4 py-3">65 kg</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">104 g</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">52 g</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">325 g</td>
                            </tr>
                            <tr>
                                <th scope="row" class="border border-[var(--color-border)] px-4 py-3 font-bold text-[var(--color-purple)]">Femme</th>
                                <td class="border border-[var(--color-border)] px-4 py-3">80 kg</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">128 g</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">64 g</td>
                                <td class="border border-[var(--color-border)] px-4 py-3">400 g</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="mt-5 max-w-4xl text-sm leading-6 text-[var(--color-text-muted)]">La répartition réelle dépend notamment de l’âge, de la taille, du niveau d’activité, de l’objectif et de l’état de santé. Pour un besoin individuel, demandez conseil à un professionnel qualifié.</p>
            </div>
        </section>

        <section id="adapter" aria-labelledby="titre-adapter" class="mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:py-24">
            <div class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr]">
                <div class="border-l-8 border-[var(--color-purple)] pl-6">
                    <p class="text-xs font-bold uppercase tracking-[0.24em] text-[var(--color-purple)]">Ajuster</p>
                    <h2 id="titre-adapter" class="mt-3 text-4xl font-black uppercase leading-tight sm:text-6xl">Observer, tester, ajuster</h2>
                </div>
                <div class="text-lg leading-8 text-[var(--color-text-muted)]">
                    <p>Suivez quelques indicateurs simples : votre énergie pendant la séance, votre faim, votre récupération et votre évolution dans le temps. Changez un seul élément à la fois pour comprendre ce qui vous convient.</p>
                    <aside aria-labelledby="titre-vigilance" class="mt-8 border border-[var(--color-border)] bg-[var(--color-surface-light)] p-6 text-[var(--color-text-dark)]">
                        <h3 id="titre-vigilance" class="text-xl font-black uppercase">Point de vigilance</h3>
                        <p class="mt-3 leading-7 text-[var(--color-gray)]">Ces repères sont généraux. En cas de pathologie, de traitement, de trouble du comportement alimentaire ou d’objectif spécifique, demandez l’avis d’un professionnel de santé.</p>
                    </aside>
                </div>
            </div>
        </section>

    </main>

    <x-commun.footer />
</body>
</html>
