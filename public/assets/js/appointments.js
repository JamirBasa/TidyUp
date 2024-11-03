document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('li');
    const indicator = document.querySelector('.slide-indicator');

    function updateIndicator(tab) {
        indicator.style.width = `${tab.offsetWidth}px`;
        indicator.style.transform = `translateX(${tab.offsetLeft}px)`;
    }

    // Initialize indicator position
    const activeTab = document.querySelector('li.active');
    if (activeTab) {
        updateIndicator(activeTab);
    }

    // Add click handlers
    tabs.forEach(tab => {
        tab.addEventListener('click', (e) => {
            e.preventDefault();

            // Remove active class and text color from all tabs
            tabs.forEach(t => {
                t.classList.remove('active');
                const link = t.querySelector('a');
                link.classList.remove('text-gray-900');
                link.classList.add('text-gray-500');
            });

            // Add active class and text color to clicked tab
            tab.classList.add('active');
            const link = tab.querySelector('a');
            link.classList.remove('text-gray-500');
            link.classList.add('text-gray-900');

            // Update indicator position
            updateIndicator(tab);
        });
    });
});