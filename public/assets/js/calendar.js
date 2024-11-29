class DatePicker {
    constructor() {
        this.currentDate = new Date();
        this.selectedDate = new Date(this.currentDate);

        this.prevMonthBtn = document.getElementById("prevMonth");
        this.nextMonthBtn = document.getElementById("nextMonth");
        this.currentMonthDisplay = document.getElementById("currentMonth");
        this.calendarDays = document.getElementById("calendarDays");
        this.selectedDateDisplay = document.getElementById(
            "selectedDateDisplay"
        );

        this.attachEventListeners();
        this.render();
        this.updateHiddenInput();
    }

    attachEventListeners() {
        this.prevMonthBtn.addEventListener("click", (e) => {
            e.preventDefault();
            this.currentDate.setMonth(this.currentDate.getMonth() - 1);
            this.selectedDate = new Date(
                this.currentDate.getFullYear(),
                this.currentDate.getMonth(),
                1
            );
            this.updateHiddenInput();
            this.render();
        });

        this.nextMonthBtn.addEventListener("click", (e) => {
            e.preventDefault();
            this.currentDate.setMonth(this.currentDate.getMonth() + 1);
            this.selectedDate = new Date(
                this.currentDate.getFullYear(),
                this.currentDate.getMonth(),
                1
            );
            this.updateHiddenInput();
            this.render();
        });
    }

    updateHiddenInput() {
        const hiddenInput = document.getElementById("calendar-value");
        if (hiddenInput && this.selectedDate) {
            hiddenInput.value = this.selectedDate.toISOString().split("T")[0];
        }
        this.updateSelectedDateDisplay();
    }

    updateSelectedDateDisplay() {
        if (this.selectedDateDisplay && this.selectedDate) {
            this.selectedDateDisplay.textContent = new Intl.DateTimeFormat(
                "en-US",
                {
                    month: "long",
                    day: "numeric",
                    year: "numeric",
                }
            ).format(this.selectedDate);
        }
    }

    formatMonth() {
        return new Intl.DateTimeFormat("en-US", {
            month: "long",
            year: "numeric",
        }).format(this.currentDate);
    }

    getDaysInMonth(date) {
        return new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
    }

    getFirstDayOfMonth(date) {
        const firstDay = new Date(
            date.getFullYear(),
            date.getMonth(),
            1
        ).getDay();
        return firstDay === 0 ? 6 : firstDay - 1; // Monday-based index
    }

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
                "h-8 w-8 flex items-center justify-center text-sm text-gray-300";
            prevDay.textContent = daysInPrevMonth - i;
            this.calendarDays.appendChild(prevDay);
        }

        // Add days of the current month
        for (let day = 1; day <= daysInMonth; day++) {
            const dayElement = document.createElement("div");
            dayElement.className =
                "h-8 w-8 flex items-center justify-center text-sm cursor-pointer hover:bg-gray-100 rounded";
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
                dayElement.classList.remove("hover:bg-gray-100");
            }

            dayElement.addEventListener("click", () => {
                this.selectedDate = new Date(
                    this.currentDate.getFullYear(),
                    this.currentDate.getMonth(),
                    day
                );

                this.updateHiddenInput();
                this.render();
            });

            this.calendarDays.appendChild(dayElement);
        }

        // Add days from the next month to fill the grid
        const totalCells = firstDayOfMonth + daysInMonth;
        const nextDays = totalCells % 7 === 0 ? 0 : 7 - (totalCells % 7);

        for (let i = 1; i <= nextDays; i++) {
            const nextDay = document.createElement("div");
            nextDay.className =
                "h-8 w-8 flex items-center justify-center text-sm text-gray-300";
            nextDay.textContent = i;
            this.calendarDays.appendChild(nextDay);
        }
    }
}

// Initialize the date picker
document.addEventListener("DOMContentLoaded", () => {
    const datePicker = new DatePicker();
});
