const times = [
    "10:00 AM",
    "11:00 AM",
    "12:00 PM",
    "1:00 PM",
    "2:00 PM",
    "3:00 PM",
    "4:00 PM",
    "5:00 PM",
    "6:00 PM",
    "7:00 PM",
];
let selectedTime = null;
const container = document.getElementById("timeButtons");

times.forEach((time) => {
    const button = document.createElement("button");
    button.className =
        "border border-neutral-500 p-3 rounded-lg transition-colors";
    button.textContent = time;
    button.onclick = () => {
        if (selectedTime) {
            selectedTime.classList.remove("bg-brand-500", "text-white");
        }
        if (selectedTime !== button) {
            button.classList.add("bg-brand-500", "text-white");
            selectedTime = button;
        } else {
            selectedTime = null;
        }
    };
    container.appendChild(button);
});
