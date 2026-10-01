<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Conseils accessibles pour adapter son alimentation à la musculation et à la Callisthénie.">
    <title>Nutrition | TopDiff</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-fond text-noir antialiased">
    <a href="#contenu" class="absolute left-4 top-4 z-50 -translate-y-24 bg-noir px-4 py-3 text-sm font-semibold text-blanc transition-transform focus:translate-y-0 focus:outline-none focus:ring-4 focus:ring-violet">
        Aller au contenu principal
    </a>

    <header class="border-b border-bordure bg-fond">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-5 px-5 py-5 sm:px-8">
            <a href="{{ route('home.index') }}" aria-label="TopDiff, accueil" class="text-lg font-black uppercase tracking-[0.16em] text-noir focus:outline-none focus-visible:ring-4 focus-visible:ring-violet focus-visible:ring-offset-4 focus-visible:ring-offset-fond">
                TopDiff<span class="text-violet">.</span>
            </a>
            <nav aria-label="Navigation principale">
                <ul class="flex flex-wrap items-center gap-x-5 gap-y-2 text-sm font-semibold">
                    <li><a href="{{ route('musculation.index') }}" class="underline-offset-4 hover:underline focus:outline-none focus-visible:ring-4 focus-visible:ring-violet">Musculation</a></li>
                    <li><a href="{{ route('calisthenics.index') }}" class="underline-offset-4 hover:underline focus:outline-none focus-visible:ring-4 focus-visible:ring-violet">Callisthénie</a></li>
                    <li><a href="{{ route('diet.index') }}" aria-current="page" class="text-violet-fonce underline decoration-2 underline-offset-4 focus:outline-none focus-visible:ring-4 focus-visible:ring-violet">Nutrition</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="contenu" tabindex="-1" aria-labelledby="titre-principal">
        <section aria-labelledby="titre-principal" class="mx-auto grid max-w-7xl gap-10 px-5 py-14 sm:px-8 lg:grid-cols-[1.15fr_0.85fr] lg:items-center lg:py-24">
            <div>
                <p class="petit-titre mb-5 text-violet-fonce">Nutrition et performance</p>
                <h1 id="titre-principal" class="max-w-3xl text-5xl font-black uppercase leading-[0.95] tracking-tight sm:text-7xl lg:text-8xl">
                    Mange mieux.<br>
                    <span class="text-violet-fonce">Bouge fort.</span>
                </h1>
                <p class="texte-principal mt-8 max-w-xl">
                    Des repères simples pour construire une alimentation adaptée à vos objectifs, sans promesse miracle ni régime universel.
                </p>
                <a href="#ressources" class="mt-8 inline-flex items-center border-2 border-noir bg-noir px-6 py-4 text-sm font-bold uppercase tracking-wide text-white transition hover:border-violet-fonce hover:bg-violet-fonce focus:outline-none focus-visible:ring-4 focus-visible:ring-violet focus-visible:ring-offset-4 focus-visible:ring-offset-fond">
                    Découvrir les repères
                    <span aria-hidden="true" class="ml-3 text-xl">&#8595;</span>
                </a>
            </div>

            <div class="relative min-h-[22rem] overflow-hidden bg-noir p-7 text-texte-clair sm:min-h-[28rem] sm:p-10">
                <div aria-hidden="true" class="absolute -right-10 -top-12 h-48 w-48 rounded-full bg-violet sm:h-64 sm:w-64"></div>
                <div aria-hidden="true" class="absolute -bottom-16 -left-12 h-56 w-56 rounded-full border-2 border-texte-clair bg-noir sm:h-72 sm:w-72"></div>
                <div aria-hidden="true" class="absolute bottom-12 right-10 h-28 w-28 rounded-full bg-gris-clair sm:h-40 sm:w-40"></div>
                <div class="relative flex h-full min-h-[19rem] flex-col justify-between">
                    <p class="max-w-[11rem] text-xs font-bold uppercase leading-5 tracking-[0.2em] text-gris-clair">Le guide du quotidien</p>
                    <div>
                        <p class="text-6xl font-black uppercase leading-[0.8] sm:text-8xl">Fuel</p>
                        <p class="mt-3 text-2xl font-semibold uppercase tracking-[0.12em] text-gris-clair sm:text-3xl">your practice</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="ressources" aria-labelledby="titre-ressources" class="border-y border-bordure bg-blanc px-5 py-16 sm:px-8 lg:py-24">
            <div class="mx-auto max-w-7xl">
                <div class="max-w-2xl">
                    <p class="petit-titre text-violet-fonce">Les fondamentaux</p>
                    <h2 id="titre-ressources" class="mt-3 text-4xl font-black uppercase leading-tight sm:text-5xl">Construire ses bases</h2>
                    <p class="texte-principal mt-5">Avant de chercher la méthode parfaite, installez des habitudes réalistes et compatibles avec votre entraînement.</p>
                </div>
                <div class="mt-12 grid gap-5 md:grid-cols-3">
                    <article class="border-2 border-noir bg-fond p-6">
                        <p class="text-4xl font-black text-violet-fonce" aria-hidden="true">01</p>
                        <h3 class="mt-8 text-2xl font-black uppercase">Énergie</h3>
                        <p class="mt-4 leading-7 text-texte-secondaire">Comprendre ses besoins et ajuster progressivement les portions selon son objectif et son niveau d’activité.</p>
                    </article>
                    <article class="border-2 border-noir bg-noir p-6 text-blanc">
                        <p class="text-4xl font-black text-violet-clair" aria-hidden="true">02</p>
                        <h3 class="mt-8 text-2xl font-black uppercase">Protéines</h3>
                        <p class="mt-4 leading-7 text-texte-carte">Répartir les sources de protéines au fil de la journée, en variant les aliments et les textures.</p>
                    </article>
                    <article class="border-2 border-noir bg-fond p-6">
                        <p class="text-4xl font-black text-violet-fonce" aria-hidden="true">03</p>
                        <h3 class="mt-8 text-2xl font-black uppercase">Récupération</h3>
                        <p class="mt-4 leading-7 text-texte-secondaire">Associer hydratation, sommeil et repas réguliers pour soutenir la progression sur la durée.</p>
                    </article>
                </div>
            </div>
        </section>

        <section aria-labelledby="titre-conseil" class="mx-auto grid max-w-7xl gap-10 px-5 py-16 sm:px-8 lg:grid-cols-[0.8fr_1.2fr] lg:items-start lg:py-24">
            <div class="border-l-8 border-violet pl-6">
                <p class="petit-titre text-violet-fonce">À retenir</p>
                <h2 id="titre-conseil" class="mt-3 text-4xl font-black uppercase leading-tight">La régularité avant la restriction.</h2>
            </div>
            <div class="max-w-2xl texte-principal">
                <p>Une alimentation utile est une alimentation que vous pouvez tenir. Faites évoluer un seul repère à la fois, observez vos sensations et demandez conseil à un professionnel de santé pour un besoin spécifique.</p>
                <p class="mt-5 text-base">Ces informations sont générales et ne remplacent pas un avis médical ou diététique personnalisé.</p>
            </div>
        </section>

        <section aria-labelledby="titre-inscription" class="bg-violet px-5 py-16 text-noir sm:px-8 lg:py-20">
            <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[1fr_0.9fr] lg:items-end">
                <div>
                    <p class="text-sm font-bold uppercase tracking-[0.24em]">Le prochain repère</p>
                    <h2 id="titre-inscription" class="mt-3 max-w-xl text-4xl font-black uppercase leading-tight sm:text-5xl">Recevoir les conseils nutrition</h2>
                    <p class="mt-5 max-w-xl text-lg leading-8">Une sélection mensuelle de conseils pratiques, lisibles et directement applicables.</p>
                </div>
                <form action="{{ route('diet.index') }}" method="get" aria-labelledby="titre-inscription" class="border-2 border-noir bg-fond p-5 sm:p-7">
                    <div>
                        <label for="email" class="block text-sm font-bold uppercase tracking-wide">Adresse e-mail</label>
                        <input id="email" name="email" type="email" autocomplete="email" required aria-describedby="email-aide" class="mt-3 block w-full border-2 border-noir bg-blanc px-4 py-3 text-base text-noir outline-none placeholder:text-texte-indication focus:border-violet-fonce focus:ring-4 focus:ring-violet-clair" placeholder="vous@exemple.fr">
                        <p id="email-aide" class="mt-2 text-sm text-texte-secondaire">Champ obligatoire. Vous pourrez vous désinscrire à tout moment.</p>
                    </div>
                    <button type="submit" class="mt-5 w-full border-2 border-noir bg-noir px-5 py-3 text-sm font-bold uppercase tracking-wide text-blanc transition hover:bg-violet-fonce focus:outline-none focus-visible:ring-4 focus-visible:ring-noir focus-visible:ring-offset-2 focus-visible:ring-offset-fond">S’inscrire</button>
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
