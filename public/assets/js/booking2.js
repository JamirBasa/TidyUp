const times = [
    "8:00 AM",
    "9:00 AM",
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
    "8:00 PM",
];
let selectedTime = null;
const container = document.getElementById("timeButtons");
const timeInput = document.getElementById("timeInput");

times.forEach((time) => {
    const button = document.createElement("button");
    button.className =
        "border border-neutral-500 p-3 rounded-lg transition-colors";
    button.textContent = time;

    button.onclick = (e) => {
        e.preventDefault();

        // Parse time into 24-hour format
        const [timeString, modifier] = time.split(" ");
        let [hours, minutes] = timeString.split(":");
        hours = parseInt(hours, 10); // Convert hours to number for calculation

        if (modifier === "PM" && hours !== 12) {
            hours += 12; // Convert PM hours (except 12 PM)
        } else if (modifier === "AM" && hours === 12) {
            hours = 0; // Convert 12 AM to 00
        }

        const formattedTime = `${hours.toString().padStart(2, "0")}:${minutes}`;
        timeInput.value = formattedTime;

        // Toggle button selection
        if (selectedTime) {
            selectedTime.classList.remove("bg-brand-500", "text-white");
        }
        if (selectedTime !== button) {
            button.classList.add("bg-brand-500", "text-white");
            selectedTime = button;
        } else {
            timeInput.value = ""; // Clear input if deselected
            selectedTime = null;
        }
    };

    container.appendChild(button);
});
