const form = document.forms['form-web'];
const successAlert = document.getElementById('success-alert');

form.addEventListener('submit', e => {
    e.preventDefault();
    // Reset the error message before each submission
    successAlert.classList.add('d-none');

    if (validateForm()) {
        // Simulate form submission success
        setTimeout(() => {
            successAlert.classList.remove('d-none');
            form.reset();
        }, 2000); // Display the success alert for 2 seconds (adjust as needed)
    }
    console.log('Form submitted')
});