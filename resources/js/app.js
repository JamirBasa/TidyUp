import './bootstrap';

// Add error checking to see if elements exist
const userHeaderDropdown = document.getElementById('user-header-dropdown');
const userProfileButton = document.getElementById('user-profile-button');

if (userProfileButton && userHeaderDropdown) {
    userProfileButton.addEventListener('click', (event) => {
        event.stopPropagation();
        userHeaderDropdown.classList.toggle('hidden');
    });

    document.addEventListener('click', (event) => {
        if (!userHeaderDropdown.contains(event.target) && !userProfileButton.contains(event.target)) {
            userHeaderDropdown.classList.add('hidden');
        }
    });
}

// this is line for the password show or hide 
const hideIcon = document.querySelector('#hide-icon');
const showIcon = document.querySelector('#show-icon');
const password = document.querySelector('#password');

if (hideIcon && showIcon && password) {
    hideIcon.addEventListener('click', () => {
        password.type = 'text';
        hideIcon.classList.add('hidden');
        showIcon.classList.remove('hidden');
    });

    showIcon.addEventListener('click', () => {
        password.type = 'password';
        hideIcon.classList.remove('hidden');
        showIcon.classList.add('hidden');
    });
}
// This javascript code is for the mobile sidebar
document.addEventListener('DOMContentLoaded', () => {
    const burgerMenuMobile = document.getElementById('burger-menu-mobile');
    const sidebarMobile = document.getElementById('sidebar-container');
    
    burgerMenuMobile.addEventListener('click', () => {
        sidebarMobile.classList.toggle('hidden');
        sidebarMobile.classList.toggle('block');
    });

    document.addEventListener('click', (event) => {
        if (!sidebarMobile.contains(event.target) && !burgerMenuMobile.contains(event.target)) {
            sidebarMobile.classList.add('hidden');
            sidebarMobile.classList.remove('block');
        }
    });
});









