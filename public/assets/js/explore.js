$(document).ready(function () {
    let currentIndex = 0;
    const shops = window.shops || [];
    const $featuredImage = $(".content-section > a img");
    const $featuredAnchor = $(".content-section > a");
    const $featuredName = $(".content-section > a h6");
    const $featuredRating = $(".content-section > a .text-4xl");
    const $featuredLocation = $("#detailed_address");
    const $featuredTag = $(".content-section > a span.rounded-full");

    if (shops.length > 0) {
        setInterval(() => {
            currentIndex = (currentIndex + 1) % shops.length;
            $featuredImage.css("transition", "opacity 0.5s");
            $featuredImage.css("opacity", 0);

            setTimeout(() => {
                $featuredImage.attr(
                    "src",
                    `/storage/${shops[currentIndex].path}`
                );
                $featuredAnchor.attr(
                    "href",
                    `/view/shop/${shops[currentIndex].shop_id}/${shops[currentIndex].branch_id}`
                );
                $featuredName.text(shops[currentIndex].shop_name);
                $featuredLocation.text(shops[currentIndex].detailed_address);
                $featuredTag.text(shops[currentIndex].category_name);
                $featuredImage.css("opacity", 1);
            }, 500);
        }, 3000);
    }

    // Handle all carousels (1-5)
    for (let i = 1; i <= 5; i++) {
        const carouselId = i === 1 ? "#carousel" : `#carousel${i}`;
        const leftArrowId = i === 1 ? "#left-arrow" : `#left-arrow${i}`;
        const rightArrowId = i === 1 ? "#right-arrow" : `#right-arrow${i}`;

        const updateArrowVisibility = ($carousel) => {
            const isAtStart = $carousel.scrollLeft() <= 0;
            const isAtEnd =
                $carousel.scrollLeft() >=
                $carousel[0].scrollWidth - $carousel.width();
            $(leftArrowId).toggleClass(
                "invisible pointer-events-none",
                isAtStart
            );
            $(rightArrowId).toggleClass(
                "invisible pointer-events-none",
                isAtEnd
            );
        };

        // Left arrow click handler
        $(leftArrowId)
            .off("click")
            .on("click", function (e) {
                e.preventDefault();
                const $carousel = $(carouselId);
                $carousel.animate({ scrollLeft: "-=400" }, 600, function () {
                    updateArrowVisibility($carousel);
                });
            });

        $(rightArrowId)
            .off("click")
            .on("click", function (e) {
                e.preventDefault();
                const $carousel = $(carouselId);
                $carousel.animate({ scrollLeft: "+=400" }, 600, function () {
                    updateArrowVisibility($carousel);
                });
            });
    }
});

function buttonClicked(selectedButton) {
    const buttons = document.querySelectorAll("#carousel .button");

    // Retrieve the category_id of the clicked button
    const categoryId = selectedButton.dataset.categoryId;
    console.log("Selected Category ID:", categoryId);

    // Remove active styles from all buttons and make them clickable again
    buttons.forEach((button) => {
        button.classList.remove("bg-black", "text-white");
        button.classList.add(
            "bg-neutral-150",
            "text-black",
            "hover:bg-neutral-200"
        );
        button.style.pointerEvents = "auto"; // Re-enable clicking for inactive buttons
    });

    // Apply active styles to the clicked button and disable clicking on it
    selectedButton.classList.remove(
        "bg-neutral-150",
        "text-black",
        "hover:bg-neutral-200"
    );
    selectedButton.classList.add("bg-black", "text-white");
    selectedButton.style.pointerEvents = "none"; // Disable clicking on the active button

    // Call a function to load services for the selected category
    loadServices(categoryId);
}

function loadServices(categoryId) {
    // Implement the logic to load services based on the categoryId
    console.log("Loading services for category:", categoryId);
}
