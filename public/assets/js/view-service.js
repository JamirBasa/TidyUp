document.addEventListener("DOMContentLoaded", function () {
    const branchChangeBtn = document.querySelector(".branch-change-btn");
    const branchDropdown = document.getElementById("branch-dropdown");

    // Toggle dropdown visibility
    branchChangeBtn.addEventListener("click", function () {
        branchDropdown.classList.toggle("hidden");
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function (event) {
        if (
            !branchChangeBtn.contains(event.target) &&
            !branchDropdown.contains(event.target)
        ) {
            branchDropdown.classList.add("hidden");
        }
    });

    // Handle branch selection
    branchDropdown.querySelectorAll("div").forEach((option) => {
        option.addEventListener("click", function () {
            // Update button text
            branchChangeBtn.querySelector(
                "svg"
            ).parentElement.previousElementSibling.textContent =
                this.textContent;
            branchDropdown.classList.add("hidden");
        });
    });
});
const bookNowBtn = document.getElementById("book-now-btn");

bookNowBtn.addEventListener("click", (e) => {
    e.preventDefault();
});

function updateDisplayPicture(newSrc) {
    const displayPicture = document.getElementById("displayPicture");
    if (displayPicture) {
        displayPicture.style.opacity = "0";
        setTimeout(() => {
            displayPicture.src = newSrc;
            displayPicture.style.opacity = "1";
        }, 300);
    }
}
