// Initialize functionality when the DOM content is fully loaded
document.addEventListener("DOMContentLoaded", () => {
    const categoryCards = document.querySelectorAll("#category-card");
    const serviceItems = document.querySelectorAll(".service-item");

    // Function to handle filtering services
    function filterServices(categoryId) {
        serviceItems.forEach((service) => {
            const serviceCategoryId = service.getAttribute("data-category-id");
            if (serviceCategoryId === categoryId) {
                service.style.display = "flex";
            } else {
                service.style.display = "none";
            }
        });
    }

    // Handle category card click events
    categoryCards.forEach((card) => {
        card.addEventListener("click", () => {
            // Remove active class from all cards
            categoryCards.forEach((btn) => {
                btn.classList.remove("bg-black", "text-white");
                btn.classList.add(
                    "bg-neutral-150",
                    "text-black",
                    "hover:bg-neutral-200"
                );
            });

            // Add active class to the clicked card
            card.classList.remove(
                "bg-neutral-150",
                "text-black",
                "hover:bg-neutral-200"
            );
            card.classList.add("bg-black", "text-white");

            // Get the clicked card's category ID
            const categoryId = card.getAttribute("data-category-id");

            // Filter services based on the category ID
            filterServices(categoryId);
        });
    });

    // Show services for the first category by default
    if (categoryCards.length > 0) {
        const firstCategoryId =
            categoryCards[0].getAttribute("data-category-id");
        filterServices(firstCategoryId);
        categoryCards[0].classList.add("bg-black", "text-white");
    }
});
