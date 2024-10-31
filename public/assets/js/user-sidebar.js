document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('user-sidebar');
    let isDragging = false;
    let startY;
    let scrollTop;

    // Prevent default drag behavior for links and other elements
    sidebar.addEventListener('dragstart', (e) => {
        e.preventDefault();
    });

    sidebar.addEventListener('mousedown', (e) => {
        isDragging = true;
        startY = e.pageY - sidebar.offsetTop;
        scrollTop = sidebar.scrollTop;
        sidebar.style.cursor = 'grabbing';
        // Disable pointer events on buttons
        sidebar.querySelectorAll('button').forEach(button => button.style.pointerEvents = 'none');
    });

    document.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        e.preventDefault();
        const y = e.pageY - sidebar.offsetTop;
        const walk = (y - startY) * 2; // Adjust the scroll speed
        sidebar.scrollTop = scrollTop - walk;
    });

    document.addEventListener('mouseup', () => {
        isDragging = false;
        sidebar.style.cursor = 'grab';
        // Re-enable pointer events on buttons
        sidebar.querySelectorAll('button').forEach(button => button.style.pointerEvents = 'auto');
    });

    sidebar.addEventListener('mouseleave', () => {
        isDragging = false;
        sidebar.style.cursor = 'grab';
        // Re-enable pointer events on buttons
        sidebar.querySelectorAll('button').forEach(button => button.style.pointerEvents = 'auto');
    });
});