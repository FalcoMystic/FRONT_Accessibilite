<x-layout.base title="Accueil">
    <a class="skip-link" href="#contenu">Aller au contenu principal</a>

    <div class="home-shell">
        <x-commun.header />

        <main id="contenu">
            <section class="hero" aria-labelledby="hero-title">
                <div class="hero-copy">
                    <p class="eyebrow"><span class="eyebrow-line" aria-hidden="true"></span> Mouvement · Force · Équilibre</p>
                    <h1 id="hero-title">Construis ta<br><em>meilleure version.</em></h1>
                    <p class="hero-text">Des repères clairs pour t'entraîner avec intention, progresser à ton rythme et nourrir ce qui te fait avancer.</p>
                    <a class="primary-button" href="#disciplines">Commencer l'exploration <span aria-hidden="true">↗</span></a>
                </div>

                <div class="hero-art" aria-label="Illustration abstraite représentant un mouvement dynamique" role="img">
                    <img src="{{ asset('#') }}" alt="Illustration">
                </div>
            </section>

            <section id="disciplines" class="discipline-section" aria-labelledby="disciplines-title">
                <div class="section-heading">
                    <div>
                        <p class="eyebrow"><span class="eyebrow-line" aria-hidden="true"></span> Ton terrain de jeu</p>
                        <h2 id="disciplines-title">Choisis ton<br><em>point de départ.</em></h2>
                    </div>
                    <p class="section-note">Trois approches. Un même objectif : te sentir mieux.</p>
                </div>

                <div class="discipline-card-list">
                    <a class="discipline-card discipline-card--violet" href="{{ route('calisthenics.index') }}">
                        <span class="discipline-card__index">01 / 03</span>
                        <span class="discipline-card__icon" aria-hidden="true">↗</span>
                        <span class="discipline-card__content"><strong>Calisthénie</strong><span>Maîtrise ton poids.</span></span>
                        <span class="discipline-card__arrow" aria-hidden="true">→</span>
                    </a>
                    <a class="discipline-card discipline-card--gray" href="{{ route('musculation.index') }}">
                        <span class="discipline-card__index">02 / 03</span>
                        <span class="discipline-card__icon discipline-card__icon--solid" aria-hidden="true">✦</span>
                        <span class="discipline-card__content"><strong>Musculation</strong><span>Développe ta force.</span></span>
                        <span class="discipline-card__arrow" aria-hidden="true">→</span>
                    </a>
                    <a class="discipline-card discipline-card--light" href="{{ route('diet.index') }}">
                        <span class="discipline-card__index">03 / 03</span>
                        <span class="discipline-card__icon" aria-hidden="true">◒</span>
                        <span class="discipline-card__content"><strong>Diet</strong><span>Nourris ton énergie.</span></span>
                        <span class="discipline-card__arrow" aria-hidden="true">→</span>
                    </a>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <span>TOPDIFF / 2026</span>
            <span>Ta progression, ton rythme.</span>
            <a href="#contenu">Retour en haut <span aria-hidden="true">↑</span></a>
        </footer>
    </div>
</x-layout.base>