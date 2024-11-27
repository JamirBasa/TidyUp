document.addEventListener("DOMContentLoaded", function () {
    ModalPopOver(
        "add-image-open-btn",
        "add-image-modal",
        "add-image-modal-content",
        "add-image-modal-close-btn"
    );
});

$("#branch_img").on("change", function (e) {
    const files = e.target.files;
    const $warning = $("#file-count-warning");
    const $preview = $("#image-preview");

    if (files.length > 3) {
        $(this).val("");
        $warning.removeClass("hidden");
        $preview.empty();
        return;
    }

    $warning.addClass("hidden");
    $preview.empty();

    // Show preview of selected images
    Array.from(files).forEach((file) => {
        const reader = new FileReader();
        reader.onload = function (e) {
            $preview.append(`
        <div class="h-36 rounded-xl overflow-hidden">
            <img src="${e.target.result}" class="h-full w-full object-cover rounded-xl">
        </div>
        `);
        };
        reader.readAsDataURL(file);
    });
});

$("#add-image-modal-content").on("submit", function (e) {
    e.preventDefault();
    $("#upload-error").remove();

    const formData = new FormData(this);
    const files = formData.getAll("branch_img[]");

    if (files.length > 3) {
        alert("Maximum 3 files allowed");
        return;
    }

    $.ajax({
        url: $(this).attr("action"),
        method: "POST",
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            "X-Requested-With": "XMLHttpRequest",
        },
        success: function (data) {
            if (data.success) {
                // Update gallery with new images
                if (data.images) {
                    const galleryContainer = $("#gallery-");
                    data.images.forEach((image) => {
                        const newImage = `
                            <div class="h-36 rounded-xl overflow-hidden">
                                <img class="h-full w-full object-cover rounded-xl" src="${image.url}">
                            </div>
                        `;
                        galleryContainer.append(newImage);
                    });
                }

                // Show success message
                const $success = $("<div>", {
                    id: "upload-success",
                    class: "text-green-600 font-bold mt-2 bg-green-200 py-4 px-10 fixed bottom-20 right-20 rounded-lg opacity-0 transition-all duration-300 ease-in-out transform translate-y-10",
                    text: data.message,
                }).appendTo("body");

                // Fade in
                setTimeout(() => {
                    $success.removeClass("opacity-0 translate-y-10");
                }, 100);

                // Fade out and remove
                setTimeout(() => {
                    $success.addClass("opacity-0 translate-y-10");
                    setTimeout(() => {
                        $success.remove();
                    }, 300);
                }, 3000);

                // Reset form and close modal
                $("#add-image-modal-content")[0].reset();
                $("#image-preview").empty();
                $("#add-image-modal").removeClass("grid").addClass("hidden");
            } else {
                const $error = $(`
                    <div id="upload-error" class="text-red-500 font-bold mt-2 bg-red-200 py-4 px-10 fixed bottom-20 right-20 rounded-lg opacity-0 transition-all duration-300 ease-in-out transform translate-y-10">
                        ${data.message || "Error uploading images"}
                    </div>
                `).appendTo("#add-image-modal-content");

                // Fade in
                setTimeout(() => {
                    $error.removeClass("opacity-0 translate-y-10");
                }, 100);

                // Fade out and remove
                setTimeout(() => {
                    $error.addClass("opacity-0 translate-y-10");
                    setTimeout(() => {
                        $error.remove();
                    }, 300);
                }, 3000);
            }
        },
        error: function () {
            const $error = $(`
                <div id="upload-error" class="text-red-500 font-bold mt-2 bg-red-200 py-4 px-10 fixed bottom-20 right-20 rounded-lg opacity-0 transition-all duration-300 ease-in-out transform translate-y-10">
                    Error uploading images. Please try again.
                </div>
            `).appendTo("#add-image-modal-content");

            // Fade in
            setTimeout(() => {
                $error.removeClass("opacity-0 translate-y-10");
            }, 100);

            // Fade out and remove
            setTimeout(() => {
                $error.addClass("opacity-0 translate-y-10");
                setTimeout(() => {
                    $error.remove();
                }, 300);
            }, 3000);
        },
    });
});
