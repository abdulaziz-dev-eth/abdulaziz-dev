// ===== LOADING SCREEN =====
window.addEventListener('load', function () {
    const loadingScreen = document.getElementById('loading-screen');
    if (loadingScreen) {
        setTimeout(function () {
            loadingScreen.classList.add('hidden');
        }, 500);
    }
});