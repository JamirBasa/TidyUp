/**
 * Class representing a date picker.
 */
class DatePicker {
    /**
     * Create a date picker.
     */
    constructor() {
        /**
         * @property {Date} currentDate - The current date.
         */
        this.currentDate = new Date();

        /**
         * @property {Date|null} selectedDate - The selected date.
         */
        this.selectedDate = new Date(this.currentDate);

        this.init();
        this.render();
        this.attachEventListeners();
    }

    /**
     * Initialize the date picker by getting DOM elements.
     */
    init() {
        /**
         * @property {HTMLElement} prevMonthBtn - Button to go to the previous month.
         */
        this.prevMonthBtn = document.getElementById("prevMonth");

        /**
         * @property {HTMLElement} nextMonthBtn - Button to go to the next month.
         */
        this.nextMonthBtn = document.getElementById("nextMonth");

        /**
         * @property {HTMLElement} currentMonthDisplay - Element to display the current month.
         */
        this.currentMonthDisplay = document.getElementById("currentMonth");

        /**
         * @property {HTMLElement} calendarDays - Element to display the days of the month.
         */
        this.calendarDays = document.getElementById("calendarDays");
    }

    /**
     * Attach event listeners to the previous and next month buttons.
     */
    attachEventListeners() {
        this.prevMonthBtn.addEventListener("click", () => {
            this.currentDate.setMonth(this.currentDate.getMonth() - 1);
            this.render();
        });

        this.nextMonthBtn.addEventListener("click", () => {
            this.currentDate.setMonth(this.currentDate.getMonth() + 1);
            this.render();
        });
    }

    /**
     * Format the current month for display.
     * @returns {string} The formatted month and year.
     */
    formatMonth() {
        return new Intl.DateTimeFormat("en-US", {
            month: "long",
            year: "numeric",
        }).format(this.currentDate);
    }

    /**
     * Get the number of days in a given month.
     * @param {Date} date - The date to get the number of days for.
     * @returns {number} The number of days in the month.
     */
    getDaysInMonth(date) {
        return new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
    }

    /**
     * Get the first day of the month.
     * @param {Date} date - The date to get the first day of the month for.
     * @returns {number} The day of the week the month starts on (0-6, Monday-based).
     */
    getFirstDayOfMonth(date) {
        const firstDay = new Date(
            date.getFullYear(),
            date.getMonth(),
            1
        ).getDay();
        return firstDay === 0 ? 6 : firstDay - 1; // Convert to Monday-based
    }

    /**
     * Render the date picker.
     */
    render() {
        // Update month display
        this.currentMonthDisplay.textContent = this.formatMonth();

        // Clear existing calendar
        this.calendarDays.innerHTML = "";

        const daysInMonth = this.getDaysInMonth(this.currentDate);
        const firstDayOfMonth = this.getFirstDayOfMonth(this.currentDate);

        // Get the number of days in the previous month
        const prevMonth = new Date(
            this.currentDate.getFullYear(),
            this.currentDate.getMonth() - 1,
            1
        );
        const daysInPrevMonth = this.getDaysInMonth(prevMonth);

        // Add days from the previous month
        for (let i = firstDayOfMonth - 1; i >= 0; i--) {
            const prevDay = document.createElement("div");
            prevDay.className =
                "h-8 flex items-center justify-center text-sm text-gray-300";
            prevDay.textContent = daysInPrevMonth - i;
            this.calendarDays.appendChild(prevDay);
        }

        // Add days of the current month
        for (let day = 1; day <= daysInMonth; day++) {
            const dayElement = document.createElement("div");
            dayElement.className =
                "size-10 flex items-center justify-center text-sm cursor-pointer hover:bg-neutral-100 rounded"; // Changed to box style
            dayElement.textContent = day;

            // Check if this day is selected
            if (
                this.selectedDate &&
                this.selectedDate.getDate() === day &&
                this.selectedDate.getMonth() === this.currentDate.getMonth() &&
                this.selectedDate.getFullYear() ===
                    this.currentDate.getFullYear()
            ) {
                dayElement.classList.add("bg-brand-500", "text-white");
                dayElement.classList.remove("hover:bg-neutral-100");
            }

            dayElement.addEventListener("click", () => {
                this.selectedDate = new Date(
                    this.currentDate.getFullYear(),
                    this.currentDate.getMonth(),
                    day
                );
                this.render();
            });

            this.calendarDays.appendChild(dayElement);
        }

        // Add days from the next month
        const totalDays = firstDayOfMonth + daysInMonth;
        const nextMonthDays = 7 - (totalDays % 7);
        if (nextMonthDays < 7) {
            for (let i = 1; i <= nextMonthDays; i++) {
                const nextDay = document.createElement("div");
                nextDay.className =
                    "h-8 flex items-center justify-center text-sm text-gray-300";
                nextDay.textContent = i;
                this.calendarDays.appendChild(nextDay);
            }
        }
    }
}

// Initialize the date picker
const datePicker = new DatePicker();

document.addEventListener("DOMContentLoaded", () => {
    const selectedDateDisplay = document.getElementById("selectedDateDisplay");
    const datePicker = new DatePicker();

    const updateSelectedDateDisplay = () => {
        if (datePicker.selectedDate) {
            selectedDateDisplay.textContent = new Intl.DateTimeFormat("en-US", {
                month: "long",
                day: "numeric",
                year: "numeric",
            }).format(datePicker.selectedDate);
        }
    };

    datePicker.render = function () {
        DatePicker.prototype.render.call(this);
        updateSelectedDateDisplay();
    };

    updateSelectedDateDisplay();
});

function setupDropdown(dropdownId, buttonId) {
    const dropdown = document.getElementById(dropdownId);
    const button = document.getElementById(buttonId);

    button.addEventListener("click", (event) => {
        event.stopPropagation();
        dropdown.classList.toggle("hidden");
    });

    document.addEventListener("click", (event) => {
        if (
            !dropdown.contains(event.target) &&
            !button.contains(event.target)
        ) {
            dropdown.classList.add("hidden");
        }
    });
}

let selectedAccount = null;

function selectAccount(index) {
    if (selectedAccount !== null) {
        document
            .getElementById(`account${selectedAccount}`)
            .classList.remove("bg-neutral-100");
    }
    document.getElementById(`account${index}`).classList.add("bg-neutral-100");
    selectedAccount = index;
}

function ModalPopOver(openBtnId, modalId, modalContentId, closeButtonId) {
    const openBtn = document.getElementById(openBtnId);
    const modalWrapper = document.getElementById(modalId);
    const modalContent = document.getElementById(modalContentId);
    const closeButton = document.getElementById(closeButtonId);

    openBtn.addEventListener("click", () => {
        if (modalWrapper.classList.contains("hidden")) {
            modalWrapper.classList.remove("hidden");
            modalWrapper.classList.add("grid");
        } else {
            modalWrapper.classList.add("hidden");
            modalWrapper.classList.remove("grid");
        }
    });

    closeButton.addEventListener("click", () => {
        modalWrapper.classList.add("hidden");
        modalWrapper.classList.remove("grid");
    });

    modalWrapper.addEventListener("click", (event) => {
        if (!modalContent.contains(event.target)) {
            modalWrapper.classList.add("hidden");
            modalWrapper.classList.remove("grid");
        }
    });
}

// Example usage:
ModalPopOver(
    "open-pending-btn",
    "pending-appointments-popover",
    "pending-appointments-popover-content",
    "close-button"
);
ModalPopOver(
    "create-appointments-open-btn",
    "create-appointments-popover",
    "create-appointments-popover-content",
    "close-button2"
);
ModalPopOver(
    "existing-account-btn",
    "existing-account-popover",
    "existing-account-popover-content",
    "existing-account-close-btn"
);
ModalPopOver(
    "create-account-btn",
    "create-account-popover",
    "create-account-popover-content",
    "create-account-close-btn"
);
