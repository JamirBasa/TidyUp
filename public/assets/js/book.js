function handleButtonClick(button) {
    // Remove outline from all buttons
    document.querySelectorAll("button div").forEach((div) => {
        div.classList.remove("outline", "outline-neutral-700");
    });
    document.querySelectorAll("button svg").forEach((svg) => {
        svg.classList.remove("stroke-neutral-700");
    });
    // Get the corresponding radio button based on button index
    const radioButtons = document.querySelectorAll(
        'input[name="appointment_type_id"]'
    );
    const appointmentButtons = Array.from(
        document.querySelectorAll('button[onclick="handleButtonClick(this)"]')
    );
    const index = appointmentButtons.indexOf(button);
    if (index >= 0 && index < radioButtons.length) {
        radioButtons[index].checked = true;
    }

    // Add outline to clicked button
    button.querySelector("div").classList.add("outline", "outline-neutral-700");
    button.querySelector("svg").classList.add("stroke-neutral-700");
}
