const buttons = document.querySelectorAll('[id^="button"]');

buttons.forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault();
        
        // Get the number from the button ID
        const buttonNumber = button.id.slice(-1);
        
        // Get related elements using the same number
        const checkBox = document.querySelector(`#checkbox${buttonNumber}`);
        const checkIcon = document.querySelector(`#check-icon${buttonNumber}`);
        const category = document.querySelector(`#category${buttonNumber}`);
        
        if (checkBox.checked) {
            checkBox.checked = false;
            button.classList.toggle('border-neutral-400');
            button.classList.remove('bg-black', 'text-white', 'border-black');
            checkIcon.classList.add('hidden');
            category.classList.remove('mr-4');
        } else {
            checkBox.checked = true;
            button.classList.add('bg-black', 'text-white', 'border-black');
            button.classList.toggle('border-neutral-400');
            checkIcon.classList.remove('hidden');
            category.classList.add('mr-4');
        }
    });
});

const regionSelect = document.getElementById("regionSelect");
const provinceSelect = document.getElementById("provinceSelect");
const citySelect = document.getElementById("citySelect");
const barangaySelect = document.getElementById("barangaySelect");

function updateSelects() {
    provinceSelect.disabled = !regionSelect.value;
    provinceSelect.classList.toggle('bg-gray-200', regionSelect.value === '');

    
    citySelect.disabled = !provinceSelect.value;
    citySelect.classList.toggle('bg-gray-200', provinceSelect.value === '');

    barangaySelect.disabled = !citySelect.value;
    barangaySelect.classList.toggle('bg-gray-200', citySelect.value === '');
}

regionSelect.addEventListener("change", updateSelects);
provinceSelect.addEventListener("change", updateSelects);
citySelect.addEventListener("change", updateSelects);

// Initial call to set the correct state on page load
updateSelects();

function checkPasswordStrength(password) {
    const minLength = 8;
    const hasUpperCase = /[A-Z]/.test(password);
    const hasLowerCase = /[a-z]/.test(password);
    const hasNumber = /[0-9]/.test(password);
    const hasSymbol = /[!@#$%^&*(),.?":{}|<>]/.test(password);
    const lengthCheck = password.length >= minLength;
    let strengthScore = 0;
    if (hasUpperCase) strengthScore++;
    if (hasLowerCase) strengthScore++;
    if (hasNumber) strengthScore++;
    if (hasSymbol) strengthScore++;
    if (!lengthCheck) {
        return 'Weak Password';
    } else if (strengthScore === 4) {
        return 'Strong Password';
    } else if (strengthScore >= 2) {
        return 'Good Password';
    } else {
        return 'Weak Password';
    }
}

const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('password_confirmation');
const strengthDisplay = document.getElementById('strengthDisplay');
const matchPasswordDisplay = document.getElementById('matchPasswordDisplay');

passwordInput.addEventListener('input', () => {
    const password = passwordInput.value;
    const text = checkPasswordStrength(password);
    
    if (text === 'Weak Password') {
        strengthDisplay.style.color = 'red';
    } else if (text === 'Good Password') {
        strengthDisplay.style.color = 'orange';
    } else {
        strengthDisplay.style.color = 'green';
    }


    strengthDisplay.textContent = `${text}`; // Corrected this line
});

confirmPasswordInput.addEventListener('input', checkPasswordMatch);

function checkPasswordMatch() {
    if (confirmPasswordInput.value === passwordInput.value && confirmPasswordInput.value !== '') {
        matchPasswordDisplay.textContent = 'Passwords match';
        matchPasswordDisplay.style.color = 'green';
    } else {
        matchPasswordDisplay.textContent = 'Passwords do not match';
        matchPasswordDisplay.style.color = 'red';
    }
};



