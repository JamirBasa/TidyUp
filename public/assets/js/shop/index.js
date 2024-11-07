window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (window.scrollY > 0) {
      header.classList.add('backdrop-blur-md', 'bg-transparent');
    } else {
      header.classList.remove('backdrop-blur-md', 'bg-transparent');
    }
});

const sidebarToggle = document.getElementById('sidebar-toggle');

function toggleSidebar() {
    const sidebar = document.getElementById('sidebar-container');
    const sidebarLinks = document.querySelectorAll('#sidebar-link-name');

    if (sidebar.classList.contains('w-[20rem]')) {
        // Collapse to 4rem/16 width
        sidebar.classList.remove('w-[20rem]');
        sidebar.classList.add('w-[6.8rem]');
        sidebar.classList.remove('shadow-lg')

        sidebar.classList.remove('bg-white');
        sidebarLinks.forEach(link => {
            link.classList.add('opacity-0');
            setTimeout(() => {
                link.classList.add('hidden');
            }, 200);
        });
    } else {
        // Expand from 4rem/16 to 20rem
        sidebar.classList.remove('w-[6.8rem]');
        sidebar.classList.add('w-[20rem]');
        sidebar.classList.add('bg-white');
        sidebar.classList.add('shadow-lg')

        sidebarLinks.forEach(link => {
            link.classList.remove('hidden');
            setTimeout(() => {
                link.classList.remove('opacity-0');
            }, 50);
        });
    }
}
