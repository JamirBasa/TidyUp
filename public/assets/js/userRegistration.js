function checkPasswordStrength(password) {
    const minLength = 8;
    const hasUpperCase = /[A-Z]/.test(password);
    const hasLowerCase = /[a-z]/.test(password);
    const hasNumber = /[0-9]/.test(password);
    const hasSymbol = /[!@#$%^&*(),.?":{}|<>]/.test(password);
    const lengthCheck = password.length >= minLength;
    let strengthScore = 0;
    if (minLength <= password.length) {
        document.getElementById("charLimit").style.color = "green";
        strengthScore++;
    }
    if (hasLowerCase && hasUpperCase) {
        document.getElementById("upperLowerChar").style.color = "green";
        strengthScore++;
    }
    if (hasNumber) {
        document.getElementById("isNumber").style.color = "green";
        strengthScore++;
    }
    if (hasSymbol) {
        document.getElementById("isSymbol").style.color = "green";
        strengthScore++;
    }
    if (!lengthCheck) {
        return "Weak Password";
    } else if (strengthScore === 4) {
        return "Strong Password";
    } else if (strengthScore >= 2) {
        return "Good Password";
    } else {
        return "Weak Password";
    }
}

const passwordInput = document.getElementById("password");
const confirmPasswordInput = document.getElementById("password_confirmation");
const strengthDisplay = document.getElementById("strengthDisplay");
const matchPasswordDisplay = document.getElementById("matchPasswordDisplay");
passwordInput.addEventListener("input", () => {
    const password = passwordInput.value;
    const text = checkPasswordStrength(password);

    if (text === "Weak Password") {
        strengthDisplay.style.color = "red";
    } else if (text === "Good Password") {
        strengthDisplay.style.color = "orange";
    } else {
        strengthDisplay.style.color = "green";
    }

    strengthDisplay.textContent = `${text}`; // Corrected this line
});
confirmPasswordInput.addEventListener("input", checkPasswordMatch);
function checkPasswordMatch() {
    if (
        confirmPasswordInput.value === passwordInput.value &&
        confirmPasswordInput.value !== ""
    ) {
        matchPasswordDisplay.textContent = "Passwords match";
        matchPasswordDisplay.style.color = "green";
    } else {
        matchPasswordDisplay.textContent = "Passwords do not match";
        matchPasswordDisplay.style.color = "red";
    }
}

function togglePasswordVisibility(passwordInput, hideIcon, showIcon) {
    passwordInput = document.getElementById(passwordInput);
    hideIcon = document.getElementById(hideIcon);
    showIcon = document.getElementById(showIcon);
    hideIcon.addEventListener("click", () => {
        passwordInput.type = "text";
        hideIcon.classList.add("hidden");
        showIcon.classList.remove("hidden");
    });

    showIcon.addEventListener("click", () => {
        passwordInput.type = "password";
        hideIcon.classList.remove("hidden");
        showIcon.classList.add("hidden");
    });
}
togglePasswordVisibility("password", "hide-icon", "show-icon");
togglePasswordVisibility("password_confirmation", "hide-icon2", "show-icon2");
