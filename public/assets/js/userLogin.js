const hideIcon = document.querySelector('#hide-icon');
const showIcon = document.querySelector('#show-icon');
const password = document.querySelector('#password');

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

