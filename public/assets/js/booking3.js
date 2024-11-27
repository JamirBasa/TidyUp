function toggleService(button) {
    // Remove active class from all buttons
    document.querySelectorAll(".service-btn").forEach((btn) => {
        btn.classList.remove("bg-black", "text-white");
        btn.classList.add("bg-neutral-150", "text-black");
    });

    // Add active class to clicked button
    button.classList.remove("bg-neutral-150", "text-black");
    button.classList.add("bg-black", "text-white");
}
$(document).ready(function () {
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
                $carousel.animate(
                    {
                        scrollLeft: "-=400",
                    },
                    600,
                    function () {
                        updateArrowVisibility($carousel);
                    }
                );
            });

        $(rightArrowId)
            .off("click")
            .on("click", function (e) {
                e.preventDefault();
                const $carousel = $(carouselId);
                $carousel.animate(
                    {
                        scrollLeft: "+=400",
                    },
                    600,
                    function () {
                        updateArrowVisibility($carousel);
                    }
                );
            });
    }
});
