{{-- resources/views/musculation.blade.php --}}
<x-layout.base title="Musculation : principes et exercices - TOPDIFF">

    <x-commun.header />

    <!-- Lien d'évitement -->
    <a href="#contenu-principal" class="sr-only focus:not-sr-only focus:fixed focus:top-24 focus:left-4 focus:z-50 focus:px-6 focus:py-3 focus:bg-purple-500 focus:text-white focus:font-bold focus:rounded focus:shadow-xl focus:outline-none focus:ring-4 focus:ring-white">
        Aller au contenu principal
    </a>

    <!-- Contenu Principal -->
    <main id="contenu-principal" role="main" class="max-w-7xl mx-auto px-6 py-12 md:py-20 w-full space-y-24 focus:outline-none text-gray-200" tabindex="-1">
        
        <!-- EN-TÊTE -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center" aria-labelledby="hero-titre">
            <div>
                <p class="text-purple-500 uppercase tracking-widest font-bold text-sm mb-4" aria-hidden="true">Guide pratique</p>
                <h1 id="hero-titre" class="text-6xl md:text-8xl font-black text-white uppercase leading-none tracking-tight font-['Tanker'] mb-6">
                    La musculation.<br><span class="text-purple-500">Une pratique<br>complète.</span>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl leading-relaxed mb-8 font-['Space_Grotesk']">
                    Un guide complet pour découvrir la musculation, structurer ses séances et maîtriser les mouvements essentiels.
                </p>
                
                <nav aria-label="Sommaire de la page" class="flex flex-wrap gap-4 font-['Space_Grotesk']">
                    <a href="#presentation" class="inline-block bg-purple-500 text-white font-bold uppercase tracking-wider px-6 py-3 hover:bg-purple-400 transition-colors focus:outline-none focus:ring-4 focus:ring-purple-300">Présentation &darr;</a>
                    <a href="#exercices" class="inline-block border border-gray-600 text-white font-bold uppercase tracking-wider px-6 py-3 hover:border-white transition-colors focus:outline-none focus:ring-4 focus:ring-gray-400">Exercices &darr;</a>
                    <a href="#recapitulatif" class="inline-block border border-gray-600 text-white font-bold uppercase tracking-wider px-6 py-3 hover:border-white transition-colors focus:outline-none focus:ring-4 focus:ring-gray-400">Tableau &darr;</a>
                    <a href="#inscription" class="inline-block border border-gray-600 text-white font-bold uppercase tracking-wider px-6 py-3 hover:border-white transition-colors focus:outline-none focus:ring-4 focus:ring-gray-400">Inscription &darr;</a>
                </nav>
            </div>
            
            <figure aria-label="Illustration de la thématique musculation">
                <img src="{{ asset('img/Salle de sport.jpg') }}" alt="Vue générale d'une salle de musculation moderne avec des sportifs s'entraînant sur diverses machines et poids libres." class="w-full h-auto object-cover shadow-2xl"/>
            </figure>
        </section>

        <!-- SECTION : PRÉSENTATION -->
        <section id="presentation" aria-labelledby="titre-presentation" class="scroll-mt-32 space-y-8 focus-within:ring-2 focus-within:ring-purple-500 focus-within:ring-offset-8 focus-within:ring-offset-[#111] outline-none transition-all">
            <header>
                <h2 id="titre-presentation" class="text-4xl md:text-6xl font-black text-white uppercase font-['Tanker'] tracking-tight mb-6">Présentation de la musculation</h2>
                <div class="space-y-4 text-gray-300 text-lg leading-relaxed max-w-4xl font-['Space_Grotesk']">
                    <p>La musculation consiste à exercer les muscles contre une résistance, avec le poids du corps, des haltères, des barres, des machines ou des élastiques.</p>
                </div>
            </header>
        </section>

        <!-- SECTION : EXERCICES -->
        <section id="exercices" aria-labelledby="titre-exercices" class="scroll-mt-32 space-y-10 focus-within:ring-2 focus-within:ring-purple-500 focus-within:ring-offset-8 focus-within:ring-offset-[#111] outline-none transition-all">
            <header>
                <h2 id="titre-exercices" class="text-4xl md:text-6xl font-black text-white uppercase font-['Tanker'] tracking-tight mb-6">Les exercices fondamentaux</h2>
            </header>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 font-['Space_Grotesk']">
                <!-- Squat -->
                <article aria-labelledby="squat-titre" class="bg-[#161616] border border-gray-800 rounded-xl overflow-hidden shadow-lg group focus-within:ring-2 focus-within:ring-purple-500 focus-within:border-transparent outline-none transition-all" tabindex="0">
                    <figure class="h-48 w-full bg-black overflow-hidden relative border-b border-gray-800">
                        <img src="https://images.unsplash.com/photo-1574680178050-55c6a6a96e0a?auto=format&fit=crop&w=800&q=80" alt="Une personne fléchit les genoux en descendant le bassin vers l'arrière avec une barre sur le dos." class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-focus:opacity-100 transition-opacity duration-300">
                    </figure>
                    <div class="p-6">
                        <h3 id="squat-titre" class="text-2xl font-bold text-white mb-3 uppercase tracking-wide font-['Tanker']">Squat</h3>
                        <p class="text-gray-400 leading-relaxed mb-4 text-sm">Le squat consiste à fléchir les hanches et les genoux en gardant le buste maîtrisé.</p>
                    </div>
                </article>

                <!-- Soulevé de terre -->
                <article aria-labelledby="sd-titre" class="bg-[#161616] border border-gray-800 rounded-xl overflow-hidden shadow-lg group focus-within:ring-2 focus-within:ring-purple-500 focus-within:border-transparent outline-none transition-all" tabindex="0">
                    <figure class="h-48 w-full bg-black overflow-hidden relative border-b border-gray-800">
                        <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=800&q=80" alt="Un athlète se redresse depuis le sol en soulevant une lourde barre." class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-focus:opacity-100 transition-opacity duration-300">
                    </figure>
                    <div class="p-6">
                        <h3 id="sd-titre" class="text-2xl font-bold text-white mb-3 uppercase tracking-wide font-['Tanker']">Soulevé de terre</h3>
                        <p class="text-gray-400 leading-relaxed mb-4 text-sm">On pousse dans le sol et on redresse les hanches en conservant le dos stable.</p>
                    </div>
                </article>

                <!-- Développé couché -->
                <article aria-labelledby="dc-titre" class="bg-[#161616] border border-gray-800 rounded-xl overflow-hidden shadow-lg group focus-within:ring-2 focus-within:ring-purple-500 focus-within:border-transparent outline-none transition-all" tabindex="0">
                    <figure class="h-48 w-full bg-black overflow-hidden relative border-b border-gray-800">
                        <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?auto=format&fit=crop&w=800&q=80" alt="Une personne allongée sur le dos repousse une barre vers le plafond." class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-focus:opacity-100 transition-opacity duration-300">
                    </figure>
                    <div class="p-6">
                        <h3 id="dc-titre" class="text-2xl font-bold text-white mb-3 uppercase tracking-wide font-['Tanker']">Développé couché</h3>
                        <p class="text-gray-400 leading-relaxed mb-4 text-sm">Allongé sur un banc, on descend la barre vers la poitrine puis on pousse.</p>
                    </div>
                </article>
            </div>
        </section>

        <!-- SECTION : TABLEAU RÉCAPITULATIF -->
        <section id="recapitulatif" aria-labelledby="titre-recapitulatif" class="scroll-mt-32 space-y-10 focus-within:ring-2 focus-within:ring-purple-500 focus-within:ring-offset-8 focus-within:ring-offset-[#111] outline-none transition-all font-['Space_Grotesk']">
            <header>
                <h2 id="titre-recapitulatif" class="text-4xl md:text-6xl font-black text-white uppercase font-['Tanker'] tracking-tight mb-6">Structure type d'une séance</h2>
            </header>
            <div class="bg-[#161616] border border-gray-800 rounded-2xl shadow-xl overflow-hidden">
                <div class="overflow-x-auto focus:outline-none focus:ring-inset focus:ring-2 focus:ring-purple-500" tabindex="0" role="region" aria-labelledby="titre-recapitulatif">
                    <table class="w-full text-left border-collapse min-w-max">
                        <caption class="sr-only">Tableau des exercices fondamentaux.</caption>
                        <thead class="bg-gray-900 border-b border-gray-800 text-purple-400">
                            <tr>
                                <th scope="col" class="px-6 py-4 font-bold uppercase tracking-wider text-sm">Exercice</th>
                                <th scope="col" class="px-6 py-4 font-bold uppercase tracking-wider text-sm">Cible</th>
                                <th scope="col" class="px-6 py-4 font-bold uppercase tracking-wider text-sm text-center">Séries</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800 text-gray-300">
                            <tr class="hover:bg-gray-800/30">
                                <th scope="row" class="px-6 py-4 font-bold text-white">Squat</th>
                                <td class="px-6 py-4">Quadriceps</td>
                                <td class="px-6 py-4 text-center font-medium">3 - 4</td>
                            </tr>
                            <tr class="hover:bg-gray-800/30">
                                <th scope="row" class="px-6 py-4 font-bold text-white">Développé Couché</th>
                                <td class="px-6 py-4">Pectoraux</td>
                                <td class="px-6 py-4 text-center font-medium">3 - 4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- SECTION : FORMULAIRE DE CONTACT & CAPTCHA JS ACCESSIBLE -->
        <section id="inscription" aria-labelledby="titre-inscription" class="scroll-mt-32 space-y-10 focus-within:ring-2 focus-within:ring-purple-500 focus-within:ring-offset-8 focus-within:ring-offset-[#111] outline-none transition-all font-['Space_Grotesk']">
            <header>
                <h2 id="titre-inscription" class="text-4xl md:text-6xl font-black text-white uppercase font-['Tanker'] tracking-tight mb-6">
                    Rejoindre une session
                </h2>
                <p class="text-gray-300 text-lg leading-relaxed max-w-4xl">
                    Remplissez ce formulaire pour participer à notre prochaine initiation. <br>Tous les champs marqués d'une <span class="text-purple-500">*</span> sont obligatoires.
                </p>
            </header>

            <!-- Message de succès caché par défaut -->
            <div id="message-succes" hidden aria-live="polite" class="bg-green-900/50 border border-green-500 text-green-200 p-6 rounded-xl font-bold max-w-2xl text-lg mb-8 shadow-lg"></div>

            <form id="formulaire-contact" action="#" method="POST" class="bg-[#161616] border border-gray-800 p-8 rounded-2xl shadow-xl max-w-2xl space-y-8" novalidate>
                
                <!-- Nom -->
                <div class="flex flex-col space-y-2">
                    <label for="nom" class="font-bold text-white">Nom <span class="text-purple-500" aria-hidden="true">*</span><span class="sr-only">(obligatoire)</span></label>
                    <input type="text" id="nom" name="nom" required autocomplete="family-name" class="bg-black border border-gray-700 text-white p-3 rounded focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition-all">
                    <span id="nom-erreur" hidden class="text-red-400 font-medium text-sm flex items-center gap-2" aria-live="polite"></span>
                </div>

                <!-- Prénom -->
                <div class="flex flex-col space-y-2">
                    <label for="prenom" class="font-bold text-white">Prénom <span class="text-purple-500" aria-hidden="true">*</span><span class="sr-only">(obligatoire)</span></label>
                    <input type="text" id="prenom" name="prenom" required autocomplete="given-name" class="bg-black border border-gray-700 text-white p-3 rounded focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition-all">
                    <span id="prenom-erreur" hidden class="text-red-400 font-medium text-sm flex items-center gap-2" aria-live="polite"></span>
                </div>

                <!-- Email -->
                <div class="flex flex-col space-y-2">
                    <label for="email" class="font-bold text-white">Adresse e-mail <span class="text-purple-500" aria-hidden="true">*</span><span class="sr-only">(obligatoire)</span></label>
                    <p id="email-aide" class="text-sm text-gray-500">Format attendu : nom@exemple.com</p>
                    <input type="email" id="email" name="email" required autocomplete="email" aria-describedby="email-aide" class="bg-black border border-gray-700 text-white p-3 rounded focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition-all">
                    <span id="email-erreur" hidden class="text-red-400 font-medium text-sm flex items-center gap-2" aria-live="polite"></span>
                </div>

                <!-- Fieldset Radio : Niveau -->
                <fieldset id="niveau-fieldset" class="border border-gray-800 p-6 rounded-xl space-y-4 bg-black/50">
                    <legend class="font-bold text-white px-2">Niveau de pratique <span class="text-purple-500" aria-hidden="true">*</span><span class="sr-only">(obligatoire)</span></legend>
                    <div class="flex flex-col gap-3">
                        <label class="flex items-center gap-3 text-gray-300 cursor-pointer">
                            <input type="radio" name="niveau" value="debutant" required class="w-5 h-5 text-purple-500 bg-black border-gray-700 focus:ring-purple-500 focus:ring-offset-black"> Débutant
                        </label>
                        <label class="flex items-center gap-3 text-gray-300 cursor-pointer">
                            <input type="radio" name="niveau" value="intermediaire" required class="w-5 h-5 text-purple-500 bg-black border-gray-700 focus:ring-purple-500 focus:ring-offset-black"> Intermédiaire
                        </label>
                        <label class="flex items-center gap-3 text-gray-300 cursor-pointer">
                            <input type="radio" name="niveau" value="avance" required class="w-5 h-5 text-purple-500 bg-black border-gray-700 focus:ring-purple-500 focus:ring-offset-black"> Avancé
                        </label>
                    </div>
                    <span id="niveau-erreur" hidden class="text-red-400 font-medium text-sm flex items-center gap-2 mt-2" aria-live="polite"></span>
                </fieldset>

                <!-- CAPTCHA -->
                <div class="flex flex-col space-y-3 pt-4 border-t border-gray-800">
                    <label for="captcha" class="font-bold text-white">Vérification de sécurité <span class="text-purple-500" aria-hidden="true">*</span><span class="sr-only">(obligatoire)</span></label>
                    <p id="captcha-aide" class="text-sm text-gray-400">Veuillez résoudre cette addition simple pour prouver que vous n'êtes pas un robot.</p>
                    <div class="flex items-center gap-4">
                        <span class="bg-gray-800 text-white px-4 py-3 rounded font-bold text-xl tracking-widest" aria-hidden="true">5 + 3 =</span>
                        <span class="sr-only">Combien font cinq plus trois ?</span>
                        <input type="number" id="captcha" name="captcha" required aria-describedby="captcha-aide" class="bg-black border border-gray-700 text-white p-3 rounded w-32 focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500 transition-all">
                    </div>
                    <span id="captcha-erreur" hidden class="text-red-400 font-medium text-sm flex items-center gap-2" aria-live="polite"></span>
                </div>

                <!-- Consentement Checkbox -->
                <div class="flex flex-col space-y-2 pt-4">
                    <label class="flex items-start gap-4 text-gray-300 cursor-pointer">
                        <input type="checkbox" id="consentement" name="consentement" required class="w-6 h-6 mt-1 text-purple-500 bg-black border-gray-700 rounded focus:ring-purple-500 focus:ring-offset-black"> 
                        <span class="text-sm leading-relaxed">En soumettant ce formulaire, j'accepte que mes données soient utilisées pour me recontacter concernant les sessions d'initiation. <span class="text-purple-500" aria-hidden="true">*</span><span class="sr-only">(obligatoire)</span></span>
                    </label>
                    <span id="consentement-erreur" hidden class="text-red-400 font-medium text-sm flex items-center gap-2" aria-live="polite"></span>
                </div>

                <!-- Bouton -->
                <div class="pt-6">
                    <button type="submit" class="w-full bg-purple-500 text-white font-bold uppercase tracking-wider py-4 rounded hover:bg-purple-400 focus:outline-none focus:ring-4 focus:ring-purple-300 transition-all font-['Tanker'] text-xl">
                        Valider mon inscription
                    </button>
                </div>
            </form>
        </section>
    </main>

    <x-commun.footer />

    <!-- LOGIQUE JAVASCRIPT ACCESSIBLE -->
    <script>
        const form = document.getElementById("formulaire-contact");
        const successMessage = document.getElementById("message-succes");

        const messages = {
            nom: "Veuillez saisir votre nom.",
            prenom: "Veuillez saisir votre prénom.",
            email: "Veuillez saisir une adresse e-mail valide, par exemple : nom@exemple.fr.",
            niveau: "Veuillez choisir votre niveau de pratique.",
            captcha: "Le résultat de l'opération mathématique est incorrect.",
            consentement: "Veuillez cocher cette case pour consentir à l'utilisation de vos données personnelles."
        };

        function showError(control, key) {
            const error = document.getElementById(`${key}-erreur`);
            error.textContent = `❌ ${messages[key]}`;
            error.hidden = false;
            
            // Si c'est un fieldset, on met aria-invalid sur les boutons radio plutôt que le fieldset lui-même pour le narrateur
            if (control.tagName.toLowerCase() === 'fieldset') {
                const radios = control.querySelectorAll('input[type="radio"]');
                radios.forEach(radio => radio.setAttribute("aria-invalid", "true"));
                radios[0].setAttribute("aria-describedby", `${key}-erreur`);
            } else {
                control.setAttribute("aria-invalid", "true");
                // On préserve les aides textuelles existantes tout en ajoutant l'erreur
                const currentDescribedBy = control.getAttribute("aria-describedby") || "";
                if (!currentDescribedBy.includes(`${key}-erreur`)) {
                    control.setAttribute("aria-describedby", `${currentDescribedBy} ${key}-erreur`.trim());
                }
            }
        }

        function clearError(control, key) {
            const error = document.getElementById(`${key}-erreur`);
            error.hidden = true;
            error.textContent = "";
            
            if (control.tagName && control.tagName.toLowerCase() === 'fieldset') {
                const radios = control.querySelectorAll('input[type="radio"]');
                radios.forEach(radio => {
                    radio.removeAttribute("aria-invalid");
                    let desc = (radio.getAttribute("aria-describedby") || "").replace(`${key}-erreur`, "").trim();
                    desc ? radio.setAttribute("aria-describedby", desc) : radio.removeAttribute("aria-describedby");
                });
            } else {
                control.removeAttribute("aria-invalid");
                let desc = (control.getAttribute("aria-describedby") || "").replace(`${key}-erreur`, "").trim();
                desc ? control.setAttribute("aria-describedby", desc) : control.removeAttribute("aria-describedby");
            }
        }

        form.addEventListener("submit", (event) => {
            event.preventDefault();
            let firstInvalid = null;

            // Vérification classique texte/email
            ["nom", "prenom", "email"].forEach((id) => {
                const field = document.getElementById(id);
                if (field.validity.valid) {
                    clearError(field, id);
                } else {
                    showError(field, id);
                    firstInvalid ??= field;
                }
            });

            // Vérification Fieldset (Boutons radio)
            const fieldset = document.getElementById("niveau-fieldset");
            const radios = form.querySelectorAll('input[name="niveau"]');
            if ([...radios].some((r) => r.checked)) {
                clearError(fieldset, "niveau");
            } else {
                showError(fieldset, "niveau");
                firstInvalid ??= radios[0];
            }

            // Vérification du CAPTCHA (5 + 3 = 8)
            const captcha = document.getElementById("captcha");
            if (captcha.value === "8") {
                clearError(captcha, "captcha");
            } else {
                showError(captcha, "captcha");
                firstInvalid ??= captcha;
            }

            // Vérification de la Checkbox (Consentement)
            const consent = document.getElementById("consentement");
            if (consent.checked) {
                clearError(consent, "consentement");
            } else {
                showError(consent, "consentement");
                firstInvalid ??= consent;
            }

            // Focus management
            if (firstInvalid) {
                firstInvalid.focus();
                successMessage.hidden = true;
                return;
            }

            // Succès
            form.style.display = "none";
            successMessage.textContent = "✅ Votre message a bien été envoyé. Nous vous répondrons prochainement.";
            successMessage.hidden = false;
            // On déplace le focus sur le message de succès pour que le narrateur le lise
            successMessage.setAttribute("tabindex", "-1");
            successMessage.focus();
        });

        // Nettoyage dynamique
        form.addEventListener("input", (event) => {
            const field = event.target;
            
            // Pour les inputs standards et checkbox
            if (field.id && field.validity.valid && field.hasAttribute("aria-invalid")) {
                if (field.id === "captcha" && field.value !== "8") return;
                clearError(field, field.id);
            }
            
            // Pour les radios
            if (field.name === "niveau" && field.checked) {
                clearError(document.getElementById("niveau-fieldset"), "niveau");
            }
        });
    </script>
</x-layout.base>