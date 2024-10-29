document.addEventListener("DOMContentLoaded", function() {
    const loadingScreen = document.getElementById('loading-screen');
    
    // Return early if element not found or already shown this session
    if (!loadingScreen || sessionStorage.getItem('loadingScreenShown')) {
        loadingScreen?.classList.add('hidden');
        return;
    }

    // Show loading screen
    loadingScreen.classList.remove('hidden');
    
    // Fade out and hide
    setTimeout(() => {
        loadingScreen.classList.add('opacity-0');
        setTimeout(() => {
            loadingScreen.classList.add('hidden');
            sessionStorage.setItem('loadingScreenShown', 'true');
        }, 1000); // Wait for fade animation to complete
    }, 1000); // Initial delay before starting fade
});