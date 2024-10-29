const buttons = document.querySelectorAll('[id^="button"]');

buttons.forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault();
        
        // Get the number from the button ID
        const buttonNumber = button.id.slice(-1);
        
        // Get related elements using the same number
        const checkBox = document.querySelector(`#checkbox${buttonNumber}`);
        const checkIcon = document.querySelector(`#check-icon${buttonNumber}`);
        const category = document.querySelector(`#category${buttonNumber}`);
        
        if (checkBox.checked) {
            checkBox.checked = false;
            button.classList.toggle('border-neutral-400');
            button.classList.remove('bg-black', 'text-white', 'border-black');
            checkIcon.classList.add('hidden');
            category.classList.remove('mr-4');
        } else {
            checkBox.checked = true;
            button.classList.add('bg-black', 'text-white', 'border-black');
            button.classList.toggle('border-neutral-400');
            checkIcon.classList.remove('hidden');
            category.classList.add('mr-4');
        }
    });
});