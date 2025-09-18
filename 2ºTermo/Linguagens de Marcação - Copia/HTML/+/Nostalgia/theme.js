document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('theme-toggle');
    const sun = btn.querySelector('.icon-sun');
    const moon = btn.querySelector('.icon-moon');
    const body = document.body;

    // Carrega preferência do usuário
    if (localStorage.getItem('theme') === 'dark') {
        body.classList.add('dark-theme');
        sun.style.display = '';
        moon.style.display = 'none';
    }

    btn.addEventListener('click', function () {
        body.classList.toggle('dark-theme');
        const isDark = body.classList.contains('dark-theme');
        sun.style.display = isDark ? '' : 'none';
        moon.style.display = isDark ? 'none' : '';
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
    });
});