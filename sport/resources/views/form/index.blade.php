<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/formCalisthenics.js'])
    <title>Formulaire de contact</title>
</head>

<body class="min-h-screen bg-fond text-texte-clair antialiased">
    <x-commun.header />

    <main id="contenu" tabindex="-1">
        <section class="bg-fond px-5 py-16 text-texte-clair sm:px-8 lg:py-24">
            <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
                <div>
                    <h1 id="titre-contact" class="text-4xl font-black uppercase leading-tight sm:text-6xl">Contact.</h1>
                    <p class="mt-6 text-lg leading-8">Une question sur la callisthénie ou sur les entraînements ?
                        Contactez-nous pour obtenir des conseils adaptés à votre niveau.</p>
                </div>
                <div class="flex flex-col gap-4">
                    <h3 class="text-xl font-bold">Les noms de champs suivit de <span aria-hidden="true">"- obligatoire"</span> sont indispensables à la complétion du formulaire.</h3>
                    <form id="formulaire-contact" action="" aria-labelledby="titre-contact" novalidate
                        class="border-2 border-noir bg-blanc p-5 text-noir sm:p-7">

                        <label class="block text-sm font-bold uppercase tracking-wide" for="nom">Nom* - obligatoire</label>
                        <input id="nom"
                            class="mt-3 block w-full border-2 border-noir bg-blanc px-4 py-3 text-base text-noir outline-none focus:border-violet focus:ring-4 focus:ring-violet"
                            type="text" name="nom" placeholder="Keller" autocomplete="family-name" aria-describedby="nom-erreur" required>
                        <p class="mt-2" id="nom-erreur" hidden></p>

                        <label class="mt-5 block text-sm font-bold uppercase tracking-wide" for="prenom">Prénom* - obligatoire</label>
                        <input id="prenom"
                            class="mt-3 block w-full border-2 border-noir bg-blanc px-4 py-3 text-base text-noir outline-none focus:border-violet focus:ring-4 focus:ring-violet"
                            type="text" name="prenom" placeholder="Justin" autocomplete="given-name" aria-describedby="prenom-erreur" required>
                        <p class="mt-2" id="prenom-erreur" hidden></p>

                        <label class="mt-5 block text-sm font-bold uppercase tracking-wide" for="email">Adresse
                            e-mail* - obligatoire</label>
                        <input id="email"
                            class="mt-3 block w-full border-2 border-noir bg-blanc px-4 py-3 text-base text-noir outline-none focus:border-violet focus:ring-4 focus:ring-violet"
                            type="email" name="email" placeholder="justin@gmail.com" autocomplete="email" aria-describedby="email-erreur" required>
                        <p class="mt-2" id="email-erreur" hidden></p>

                        <fieldset class="mt-6" aria-describedby="niveau-erreur">
                            <legend class="text-sm font-bold uppercase tracking-wide">Niveau de pratique - obligatoire</legend>
                            <div class="mt-3 flex flex-col gap-3">
                                <label><input class="accent-violet" type="radio" name="niveau" value="debutant" required>
                                    Débutant</label>
                                <label><input class="accent-violet" type="radio" name="niveau" value="intermediaire">
                                    Intermédiaire</label>
                            </div>
                            <p class="mt-4" id="niveau-erreur" hidden></p>
                        </fieldset>

                        <label class="mt-6 flex gap-3 leading-6"><input class="mt-1 accent-violet" type="checkbox"
                                name="informations">
                            <span>J'accepte que mes données soient utilisées pour être recontacté(e) à des fins de communication.</span></label>
                        <button
                            class="mt-6 w-full border-2 border-noir bg-fond px-5 py-3 text-sm font-bold uppercase tracking-wide text-texte-clair transition hover:bg-violet focus:outline-none focus-visible:ring-4 focus-visible:ring-noir"
                            type="submit">Envoyer le message</button>
                        <p id="message-succes" class="mt-4" role="status" aria-live="polite" hidden></p>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <x-commun.footer />
</body>

</html>
