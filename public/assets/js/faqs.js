const accordionElement = document.getElementById("accordion-example");
const options = {
    alwaysOpen: false,
    activeClasses: "bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white",
    inactiveClasses: "text-gray-500 dark:text-gray-400",
};

class Accordion {
    constructor(element, items, options) {
        this.element = element;
        this.items = items;
        this.options = options;
        this.init();
    }

    init() {
        this.items.forEach((item) => {
            if (item.active) {
                this.open(item.id);
            } else {
                this.close(item.id);
            }
        });
    }

    open(id) {
        const item = this.items.find((item) => item.id === id);
        if (item) {
            if (!this.options.alwaysOpen) {
                this.items.forEach((i) => {
                    if (i.id !== id) this.close(i.id);
                });
            }
            item.targetEl.classList.remove("hidden");
            item.triggerEl
                .querySelector("button")
                .classList.add(...this.options.activeClasses.split(" "));
            item.triggerEl
                .querySelector("button")
                .classList.remove(...this.options.inactiveClasses.split(" "));
            item.triggerEl.querySelector("svg").classList.add("rotate-180");
        }
    }

    close(id) {
        const item = this.items.find((item) => item.id === id);
        if (item) {
            item.targetEl.classList.add("hidden");
            item.triggerEl
                .querySelector("button")
                .classList.remove(...this.options.activeClasses.split(" "));
            item.triggerEl
                .querySelector("button")
                .classList.add(...this.options.inactiveClasses.split(" "));
            item.triggerEl.querySelector("svg").classList.remove("rotate-180");
        }
    }

    toggle(id) {
        const item = this.items.find((item) => item.id === id);
        if (item) {
            if (item.targetEl.classList.contains("hidden")) {
                this.open(id);
            } else {
                this.close(id);
            }
        }
    }
}

// Find all accordion items dynamically
const allAccordionHeadings = document.querySelectorAll(
    '[id^="accordion-example-heading-"]'
);
const accordionItems = Array.from(allAccordionHeadings).map((heading) => {
    const id = heading.id;
    const number = id.split("-").pop();
    return {
        id: id,
        triggerEl: heading,
        targetEl: document.querySelector(`#accordion-example-body-${number}`),
        active: number === "1", // First item is active by default
    };
});

// Create accordion instance
const accordion = new Accordion(accordionElement, accordionItems, options);

// Add click listeners to all accordion items
accordionItems.forEach((item) => {
    item.triggerEl.addEventListener("click", () => {
        accordion.toggle(item.id);
    });
});
