<header class="site-header" aria-label="En-tête du site">
    <a class="brand" href="{{ route('home.index') }}" aria-label="Top diff, accueil">
        <span class="brand-mark" aria-hidden="true">+</span>
        <span>TOP<span class="brand-accent">DIFF</span></span>
    </a>

    <nav class="main-nav" aria-label="Navigation principale">
        <a class="nav-link nav-link-active" href="{{ route('home.index') }}" aria-current="page">Accueil</a>
        <a class="nav-link" href="{{ route('calisthenics.index') }}">Calisthénie</a>
        <a class="nav-link" href="{{ route('musculation.index') }}">Musculation</a>
        <a class="nav-link" href="{{ route('diet.index') }}">Diet</a>
    </nav>

    <a class="header-action" href="#main">
        <span>Explorer</span>
        <span aria-hidden="true">↓</span>
    </a>
</header>