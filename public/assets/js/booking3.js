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
function toggleService(index) {
    const plusBtn = document.getElementById(`service-${index}-plus-btn`);
    const checkBtn = document.getElementById(`service-${index}-check-btn`);
    const radioBtn = document.querySelector(
        `input[data-service-id="${plusBtn.dataset.serviceId}"]`
    );
    const radioBtn2 = document.querySelector(
        `#radio2-${plusBtn.dataset.serviceId}`
    );

    // Get service details from the clicked item
    const serviceItem = plusBtn.closest(".service-item");
    const serviceName = serviceItem.querySelector("#service_name").textContent;
    const serviceDuration = serviceItem.querySelector("#duration").textContent;
    const serviceCost = serviceItem.querySelector("#cost").textContent;

    // Update the service display section
    document.querySelector("#service_name_dsp").textContent = serviceName;
    document.querySelector("#service_time_dsp").textContent = serviceDuration;
    document.querySelector("#service_price_dsp").textContent = serviceCost;
    document.querySelector("#total-price").textContent = serviceCost;

    // Hide all check buttons and show all plus buttons
    document
        .querySelectorAll('[id^="service-"][id$="-check-btn"]')
        .forEach((btn) => btn.classList.add("hidden"));
    document
        .querySelectorAll('[id^="service-"][id$="-plus-btn"]')
        .forEach((btn) => btn.classList.remove("hidden"));

    // Toggle the clicked button
    plusBtn.classList.toggle("hidden");
    checkBtn.classList.toggle("hidden");

    // Check the corresponding radio button
    if (radioBtn) {
        radioBtn.checked = true;
    }
    if (radioBtn2) {
        radioBtn2.checked = true;
    }
}
