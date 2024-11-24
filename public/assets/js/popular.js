function ModalPopOver(openBtnId, modalId, modalContentId, closeButtonId) {
    const openBtn = document.getElementById(openBtnId);
    const modalWrapper = document.getElementById(modalId);
    const modalContent = document.getElementById(modalContentId);
    const closeButton = document.getElementById(closeButtonId);

    openBtn.addEventListener("click", () => {
        if (modalWrapper.classList.contains("hidden")) {
            modalWrapper.classList.remove("hidden");
            modalWrapper.classList.add("grid");
        } else {
            modalWrapper.classList.add("hidden");
            modalWrapper.classList.remove("grid");
        }
    });

    closeButton.addEventListener("click", (e) => {
        e.preventDefault();
        modalWrapper.classList.add("hidden");
        modalWrapper.classList.remove("grid");
    });

    modalWrapper.addEventListener("click", (event) => {
        if (!modalContent.contains(event.target)) {
            modalWrapper.classList.add("hidden");
            modalWrapper.classList.remove("grid");
        }
    });
}

// Example usage:
ModalPopOver(
    "filter-open-btn",
    "filter-modal",
    "filter-modal-content",
    "filter-close-btn"
);
