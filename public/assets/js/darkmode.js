document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('darkModeToggle');
    const currentTheme = localStorage.getItem('theme');

    // Set initial theme based on saved preference
    if (currentTheme) {
        document.documentElement.setAttribute('data-theme', currentTheme);
        toggleButton.textContent = currentTheme === 'dark' ? '☀️' : '🌙';
    }

    // Toggle theme on button click
    toggleButton.addEventListener('click', () => {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        document.documentElement.setAttribute('data-theme', newTheme);
        toggleButton.textContent = newTheme === 'dark' ? '☀️' : '🌙';
        localStorage.setItem('theme', newTheme);
    });
});
