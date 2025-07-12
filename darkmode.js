const toggleIcon = document.getElementById('icons');

function toggleDarkMode() {
    const body = document.body;
    const isDark = body.classList.toggle('dark-theme');

    // Ganti ikon sesuai mode
    toggleIcon.src = isDark ? 'images/sun.png' : 'images/moon.png';
}

toggleIcon.addEventListener('click', toggleDarkMode);