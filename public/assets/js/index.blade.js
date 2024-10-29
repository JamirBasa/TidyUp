document.addEventListener("DOMContentLoaded", function() {
    // Show the loading screen for 3 seconds
    setTimeout(function() {
        // Hide the loading screen
        document.getElementById('loading-screen').classList.add('opacity-0');
        setTimeout(function() {
            document.getElementById('loading-screen').classList.add('hidden');
        }, 1000);
    }, 1000); // 1000 milliseconds = 1 seconds
});