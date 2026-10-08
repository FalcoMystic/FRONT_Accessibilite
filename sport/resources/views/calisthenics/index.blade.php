<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/formCalisthenics.js'])
    <title>Callisthénie : bénéfices et conseils d’entraînement</title>
</head>

<body class="min-h-screen bg-fond text-texte-clair antialiased">
    <x-commun.header />

    <nav class="mx-auto max-w-7xl px-5 pt-4 sm:px-8" aria-label="Fil d’Ariane">
        <ol class="flex flex-wrap items-center gap-2 text-sm text-texte-secondaire">
            <li>
                <a class="underline-offset-4 hover:text-violet hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-violet"
                    href="{{ route('home.index') }}">Accueil</a>
            </li>
            <li aria-hidden="true">/</li>
            <li aria-current="page" class="font-semibold text-texte-clair">Callisthénie</li>
        </ol>
    </nav>

    <main id="contenu" tabindex="-1">
        <section
            class="mx-auto grid max-w-7xl gap-10 px-5 py-16 sm:px-8 lg:grid-cols-[1.1fr_0.9fr] lg:items-center lg:py-24">
            <div>
                <p class="petit-titre mb-5 text-violet">Force et mouvement</p>
                <h1 id="titre-principal"
                    class="max-w-4xl text-5xl font-black uppercase leading-[1.05] tracking-tight sm:text-7xl lg:text-8xl">
                    Callisthénie.<br><span class="text-violet">Maîtriser son corps.</span></h1>
                <p class="mt-8 max-w-2xl text-lg leading-8 text-texte-secondaire">
                    Une discipline accessible pour développer sa force, sa mobilité, son équilibre et sa coordination
                    grâce à des mouvements progressifs, avec peu ou pas de matériel.
                </p>
                <a href="#benefices"
                    class="mt-8 inline-flex items-center bg-violet px-6 py-4 text-sm font-bold uppercase tracking-wide text-noir transition hover:bg-blanc focus:outline-none focus-visible:ring-4 focus-visible:ring-violet focus-visible:ring-offset-4 focus-visible:ring-offset-fond">
                    Découvrir la discipline <span aria-hidden="true" class="ml-3 text-xl">&#8595;</span>
                </a>
            </div>
            <div class="aspect-video overflow-hidden border border-bordure bg-noir">
                <a href="#sommaire-page"
                    class="sr-only focus:not-sr-only focus:absolute focus:z-10 focus:bg-blanc focus:px-4 focus:py-3 focus:text-noir focus:outline-none focus-visible:ring-4 focus-visible:ring-violet">
                    Passer la vidéo et accéder au sommaire de la page
                </a>
                <iframe class="h-full w-full" src="https://www.youtube.com/embed/Uc9hQGqV-DU"
                    title="Vidéo sur la callisthénie, durée : 9 minutes et 40 secondes"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </section>

        <nav id="sommaire-page" class="mx-auto max-w-7xl px-5 py-6 sm:px-8" aria-label="Sommaire de la page">
            <h2 class="text-lg font-bold">Dans cette page</h2>
            <ul class="mt-3 flex flex-wrap gap-x-5 gap-y-2 text-sm">
                <li>
                    <a class="underline-offset-4 hover:text-violet hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-violet"
                        href="#benefices">Bénéfices</a>
                </li>
                <li>
                    <a class="underline-offset-4 hover:text-violet hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-violet"
                        href="#progression">Progression</a>
                </li>
                <li>
                    <a class="underline-offset-4 hover:text-violet hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-violet"
                        href="#avantages">Avantages</a>
                </li>
                <li>
                    <a class="underline-offset-4 hover:text-violet hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-violet"
                        href="#photos">Photos</a>
                </li>
                <li>
                    <a class="underline-offset-4 hover:text-violet hover:underline focus:outline-none focus-visible:ring-2 focus-visible:ring-violet"
                        href="#faq">Foire aux questions</a>
                </li>
            </ul>
        </nav>

        <section id="benefices" class="border-y border-bordure bg-blanc px-5 py-16 text-noir sm:px-8 lg:py-24">
            <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:items-center">
                <h2 id="titre-benefices" class="text-4xl font-black uppercase leading-tight sm:text-6xl">Bénéfices</h2>
                <p class="text-lg leading-8 text-noir">La pratique régulière de la callisthénie permet de
                    renforcer les muscles en profondeur, notamment ceux du haut du corps, de la sangle abdominale et des
                    jambes. Les exercices progressifs améliorent aussi la souplesse, la mobilité articulaire et la
                    stabilité. En apprenant à contrôler chaque mouvement, on développe progressivement son équilibre, sa
                    coordination et une meilleure maîtrise de son corps.</p>
            </div>
        </section>

        <section id="progression" aria-label="Principe de progression"
            class="mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:py-24">
            <aside class="border-l-8 border-violet pl-6 sm:pl-8">
                <blockquote class="max-w-4xl text-2xl font-black uppercase leading-tight sm:text-4xl">« La progression
                    ne se mesure pas seulement à la difficulté des mouvements, mais aussi à la maîtrise et à la
                    régularité avec lesquelles ils sont réalisés. »</blockquote>
                <cite class="mt-5 block text-base not-italic text-texte-secondaire">Principe de progression en
                    callisthénie</cite>
            </aside>
        </section>

        <section id="avantages" class="border-y border-bordure bg-noir px-5 py-16 sm:px-8 lg:py-24">
            <div class="mx-auto max-w-7xl">
                <h2 id="titre-avantages" class="text-4xl font-black uppercase leading-tight sm:text-6xl">Avantages</h2>
                <ul class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <li
                        class="flex h-32 items-center justify-center border-2 border-bordure bg-fond p-6 text-center text-lg font-bold">
                        Renforcer les muscles en
                        profondeur</li>
                    <li
                        class="flex h-32 items-center justify-center border-2 border-bordure bg-violet p-6 text-center text-lg font-bold text-noir">
                        Améliorer la souplesse
                        et la mobilité</li>
                    <li
                        class="flex h-32 items-center justify-center border-2 border-bordure bg-fond p-6 text-center text-lg font-bold">
                        Développer l'équilibre et la
                        coordination</li>
                    <li
                        class="flex h-32 items-center justify-center border-2 border-bordure bg-fond p-6 text-center text-lg font-bold">
                        Améliorer la posture et
                        l'endurance</li>
                    <li
                        class="flex h-32 items-center justify-center border-2 border-bordure bg-fond p-6 text-center text-lg font-bold">
                        Renforcer la confiance en soi</li>
                    <li
                        class="flex h-32 items-center justify-center border-2 border-bordure bg-fond p-6 text-center text-lg font-bold">
                        Progresser à son propre rythme
                    </li>
                </ul>
            </div>
        </section>

        <section id="photos" class="mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:py-24">
            <h2 id="titre-photos" class="text-4xl font-black uppercase leading-tight sm:text-6xl">Photos</h2>
            <div class="mt-12 grid gap-5 md:grid-cols-3">
                <img class="aspect-[3/4] w-full border border-bordure object-cover" src="{{ asset('img/flag.webp') }}"
                    alt="">
                <img class="aspect-[3/4] w-full border border-bordure object-cover"
                    src="{{ asset('img/handstand.webp') }}" alt="">
                <img class="aspect-[3/4] w-full border border-bordure object-cover" src="{{ asset('img/Lever.webp') }}"
                    alt="">
            </div>
        </section>

        <section id="faq" class="border-y border-bordure bg-blanc px-5 py-16 text-noir sm:px-8 lg:py-24">
            <div class="mx-auto max-w-7xl">
                <h2 id="titre-faq" class="text-4xl font-black uppercase leading-tight sm:text-6xl">Foire aux questions
                </h2>
                <div class="mt-12 grid gap-5 lg:grid-cols-3">
                    <article class="border-2 border-noir bg-fond p-6 text-texte-clair">
                        <h3 class="text-2xl font-black uppercase text-violet">Faut-il être sportif pour commencer ?</h3>
                        <p class="mt-5 leading-7">Non. La callisthénie est accessible aux débutants. Les exercices
                            peuvent être adaptés à votre niveau et à vos capacités.</p>
                    </article>
                    <article class="border-2 border-noir bg-violet p-6">
                        <h3 class="text-2xl font-black uppercase">Quel matériel faut-il utiliser ?</h3>
                        <p class="mt-5 leading-7">Aucun matériel n'est obligatoire pour débuter. Un tapis, une barre de
                            traction ou des barres parallèles peuvent toutefois enrichir les entraînements.</p>
                    </article>
                    <article class="border-2 border-noir bg-fond p-6 text-texte-clair">
                        <h3 class="text-2xl font-black uppercase text-violet">À quelle fréquence faut-il s'entraîner ?
                        </h3>
                        <p class="mt-5 leading-7">Deux à trois séances par semaine suffisent pour progresser.
                            L'important est de rester régulier et de laisser au corps le temps de récupérer.</p>
                    </article>
                </div>
            </div>
        </section>
    </main>
    <x-commun.footer />
</body>

</html>
