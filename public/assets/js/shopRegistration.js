const buttons = document.querySelectorAll('[id^="button"]');

buttons.forEach((button) => {
    button.addEventListener("click", (event) => {
        event.preventDefault();

        // Get the number from the button ID
        const buttonNumber = button.id.slice(-1);

        // Get related elements using the same number
        const checkBox = document.querySelector(`#checkbox${buttonNumber}`);
        const checkIcon = document.querySelector(`#check-icon${buttonNumber}`);
        const category = document.querySelector(`#category${buttonNumber}`);

        if (checkBox.checked) {
            checkBox.checked = false;
            button.classList.toggle("border-neutral-400");
            button.classList.remove("bg-black", "text-white", "border-black");
            checkIcon.classList.add("hidden");
            category.classList.remove("mr-4");
        } else {
            checkBox.checked = true;
            button.classList.add("bg-black", "text-white", "border-black");
            button.classList.toggle("border-neutral-400");
            checkIcon.classList.remove("hidden");
            category.classList.add("mr-4");
        }
    });
});

const regionSelect = document.getElementById("regionSelect");
const provinceSelect = document.getElementById("provinceSelect");
const citySelect = document.getElementById("citySelect");
const barangaySelect = document.getElementById("barangaySelect");

function updateSelects() {
    provinceSelect.disabled = !regionSelect.value;
    provinceSelect.classList.toggle("bg-gray-200", regionSelect.value === "");

    citySelect.disabled = !provinceSelect.value;
    citySelect.classList.toggle("bg-gray-200", provinceSelect.value === "");

    barangaySelect.disabled = !citySelect.value;
    barangaySelect.classList.toggle("bg-gray-200", citySelect.value === "");
}

regionSelect.addEventListener("change", updateSelects);
provinceSelect.addEventListener("change", updateSelects);
citySelect.addEventListener("change", updateSelects);

// Initial call to set the correct state on page load
updateSelects();

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
