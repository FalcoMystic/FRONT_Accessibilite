const menus = document.querySelectorAll('header details[name="menu-principal"]');

// Clic en dehors : on ferme les sous-menus
document.addEventListener('click', (e) => {
    menus.forEach((menu) => {
        if (!menu.contains(e.target)) menu.open = false;
    });
});

// Touche Échap : on ferme le menu ouvert et on rend le focus à son bouton
document.addEventListener('keydown', (e) => {
    if (e.key !== 'Escape') return;
    const openMenu = [...menus].find((menu) => menu.open);
    if (!openMenu) return;
    openMenu.open = false;
    openMenu.querySelector('summary').focus();
});