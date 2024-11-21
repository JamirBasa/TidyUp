function setupDropdown(dropdownId, buttonId) {
    const dropdown = document.getElementById(dropdownId);
    const button = document.getElementById(buttonId);

    button.addEventListener("click", (event) => {
        event.stopPropagation();
        dropdown.classList.toggle("hidden");
    });

    document.addEventListener("click", (event) => {
        if (
            !dropdown.contains(event.target) &&
            !button.contains(event.target)
        ) {
            dropdown.classList.add("hidden");
        }
    });
}

// Setup dropdowns
setupDropdown("action-dropdown", "action-button");
setupDropdown("action-dropdown2", "action-button2");

const categoryButtons = document.querySelectorAll('[id^="category-button"]');
let previousCategoryButton = categoryButtons[0]; // Set first button as previous
let selectedCategoryButton = categoryButtons[0];
// Set default background for first button
categoryButtons[0].classList.add("bg-neutral-100");

categoryButtons.forEach((button) => {
    button.addEventListener("click", () => {
        if (previousCategoryButton) {
            previousCategoryButton.classList.remove("bg-neutral-100");
        }
        button.classList.add("bg-neutral-100");
        previousCategoryButton = button;
        selectedCategoryButton = button;
    });
});

const addDiscountBtn = document.getElementById("add-discount-btn1");
const addDiscountModal = document.getElementById("add-discount-popover");
const addDiscountModalContent = document.getElementById(
    "add-discount-popover-content"
);

addDiscountBtn.addEventListener("click", () => {
    if (addDiscountModal.classList.contains("hidden")) {
        addDiscountModal.classList.remove("hidden");
        addDiscountModal.classList.add("grid");
    } else {
        addDiscountModal.classList.add("hidden");
        addDiscountModal.classList.remove("grid");
    }
});

const closeButton = document.getElementById("close-button");
closeButton.addEventListener("click", () => {
    addDiscountModal.classList.add("hidden");
    addDiscountModal.classList.remove("grid");
});

addDiscountModal.addEventListener("click", (event) => {
    if (!addDiscountModalContent.contains(event.target)) {
        addDiscountModal.classList.add("hidden");
        addDiscountModal.classList.remove("grid");
    }
});
