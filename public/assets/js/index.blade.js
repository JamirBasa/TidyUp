document.addEventListener("DOMContentLoaded", function() {
    const loadingScreen = document.getElementById('loading-screen');
    
    if (!loadingScreen || sessionStorage.getItem('loadingScreenShown')) {
        if (loadingScreen) {
            loadingScreen.style.opacity = '0';
            loadingScreen.style.visibility = 'hidden';
        }
        return;
    }

    // Function to hide the loading screen
    const hideLoadingScreen = () => {
        loadingScreen.style.opacity = '0';
        loadingScreen.addEventListener('transitionend', () => {
            loadingScreen.style.visibility = 'hidden';
            sessionStorage.setItem('loadingScreenShown', 'true');
        }, { once: true });
    };

    // Show loading screen
    loadingScreen.style.opacity = '1';
    loadingScreen.style.visibility = 'visible';
    
    // Trigger fade out after initial delay
    setTimeout(hideLoadingScreen, 1000);
});

