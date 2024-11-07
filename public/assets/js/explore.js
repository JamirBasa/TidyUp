$(document).ready(function () {
    let currentIndex = 0;
    const shops = window.shops || [];
    const $featuredImage = $(".content-section > a img");
    const $featuredName = $(".content-section > a h6");
    const $featuredRating = $(".content-section > a .text-4xl");
    const $featuredTag = $(".content-section > a span.rounded-full");

    if (shops.length > 0) {
        setInterval(() => {
            currentIndex = (currentIndex + 1) % shops.length;
            $featuredImage.css("transition", "opacity 0.5s");
            $featuredImage.css("opacity", 0);

            setTimeout(() => {
                $featuredImage.attr(
                    "src",
                    `/assets/images/shops/${shops[currentIndex].image}`
                );
                $featuredName.text(shops[currentIndex].name);
                $featuredRating.text(shops[currentIndex].rating);
                $featuredTag.text(shops[currentIndex].tag);
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
            const isAtEnd = $carousel.scrollLeft() >= $carousel[0].scrollWidth - $carousel.width();
            $(leftArrowId).toggleClass("invisible pointer-events-none", isAtStart);
            $(rightArrowId).toggleClass("invisible pointer-events-none", isAtEnd);
        };

        // Left arrow click handler
        $(leftArrowId).off("click").on("click", function (e) {
            e.preventDefault();
            const $carousel = $(carouselId);
            $carousel.animate({ scrollLeft: "-=400" }, 600, function () {
                updateArrowVisibility($carousel);
            });
        });
        
        $(rightArrowId).off("click").on("click", function (e) {
            e.preventDefault();
            const $carousel = $(carouselId);
            $carousel.animate({ scrollLeft: "+=400" }, 600, function () {
                updateArrowVisibility($carousel);
            });
        });
        
    }
});
