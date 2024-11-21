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

function ModalPopOver(buttonId, modalId, modalContentId, closeButtonId) {
    const addDiscountBtn = document.getElementById(buttonId);
    const addDiscountModal = document.getElementById(modalId);
    const addDiscountModalContent = document.getElementById(modalContentId);
    const closeButton = document.getElementById(closeButtonId);

    addDiscountBtn.addEventListener("click", () => {
        if (addDiscountModal.classList.contains("hidden")) {
            addDiscountModal.classList.remove("hidden");
            addDiscountModal.classList.add("grid");
        } else {
            addDiscountModal.classList.add("hidden");
            addDiscountModal.classList.remove("grid");
        }
    });

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
}

// Example usage:
ModalPopOver(
    "add-discount-btn1",
    "add-discount-popover",
    "add-discount-popover-content",
    "close-button"
);
ModalPopOver(
    "add-service-btn",
    "add-service-popover",
    "add-service-popover-content",
    "close-button2"
);
