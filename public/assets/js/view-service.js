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
