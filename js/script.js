const sidebar = document.getElementById('sidebar');
const menu = document.getElementById('menu');
const closeMenu = document.getElementById('close-menu');

function setMenuOpen(isOpen) {
    sidebar.classList.toggle('is-open', isOpen);
    sidebar.setAttribute('aria-hidden', String(!isOpen));
    menu.setAttribute('aria-expanded', String(isOpen));
}

menu.addEventListener('click', function() {
    setMenuOpen(sidebar.getAttribute('aria-hidden') === 'true');
});

closeMenu.addEventListener('click', function() {
    setMenuOpen(false);
    menu.focus();
});

sidebar.querySelectorAll('a').forEach(function(link) {
    link.addEventListener('click', function() {
        setMenuOpen(false);
    });
});

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        setMenuOpen(false);
    }
});

document.querySelector('.formulaire form').addEventListener('submit', function(event) {
    event.preventDefault();
    const status = document.querySelector('.contact_us');
    status.textContent = 'Vos informations sont valides, mais aucun service d’envoi n’est encore configuré sur ce site.';
    status.hidden = false;
});