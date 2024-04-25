document.addEventListener("DOMContentLoaded", function() {
    const inputFields = document.querySelectorAll('input[name="job_title"], input[name="f_name"], input[name="l_name"], input[name="email"], input[name="reference"]');
    const createButton = document.querySelector('button[name="save_first_page"]');
    const emailError = document.getElementById('emailErr');

    inputFields.forEach(function(inputField) {
        inputField.addEventListener("input", function() {
            const emailValue = document.querySelector('input[name="email"]').value.trim();
            const containsInvalidCharacters = /[+\-=!#$%^&*()[\]{}\\|/?~`]/.test(emailValue);
            const allFieldsFilled = Array.from(inputFields).every(field => field.value.trim() !== '');

            if (emailValue !== '') {
                const isEmailValid = emailValue.includes('@') && emailValue.includes('.com') && !containsInvalidCharacters;

                if (!isEmailValid) {
                    emailError.innerText = "Invalid email format. Please enter a valid email address.";
                } else {
                    emailError.innerText = ""; // Clear error message if email is valid
                }

                createButton.disabled = !(allFieldsFilled && isEmailValid);

                if (allFieldsFilled && isEmailValid) {
                    createButton.style.backgroundColor = "#1ED761"; // Change color to green when enabled
                    createButton.style.cursor = "pointer"; // Change cursor to pointer when enabled
                } else {
                    createButton.style.backgroundColor = "#BEBEBE"; // Revert to original color when disabled
                    createButton.style.cursor = "default"; // Revert cursor to default when disabled
                }
            } else {
                emailError.innerText = ""; // Clear error message if email field is empty
                createButton.disabled = !allFieldsFilled;
                createButton.style.backgroundColor = "#BEBEBE"; // Revert to original color when any field is empty
                createButton.style.cursor = "default"; // Revert cursor to default when any field is empty
            }
        });
    });

    // Function to handle AJAX form submission
    function submitForm() {
        const formData = new FormData();
        inputFields.forEach(function(inputField) {
            formData.append(inputField.name, inputField.value);
        });

        const xhr = new XMLHttpRequest();
        xhr.open("POST", "your_server_script_url_here", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Handle successful response from server
                    console.log(xhr.responseText);
                } else {
                    // Handle error response from server
                    console.error('Error:', xhr.statusText);
                }
            }
        };
        xhr.send(formData);
    }

    // Add click event listener to the button for form submission
    createButton.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default form submission behavior

        // Check if all fields are filled and email is valid before submitting form via AJAX
        const emailValue = document.querySelector('input[name="email"]').value.trim();
        const containsInvalidCharacters = /[+\-=!#$%^&*()[\]{}\\|/?~`]/.test(emailValue);
        const allFieldsFilled = Array.from(inputFields).every(field => field.value.trim() !== '');
        const isEmailValid = emailValue.includes('@') && emailValue.includes('.com') && !containsInvalidCharacters;
        if (allFieldsFilled && isEmailValid) {
            submitForm();
        }
    });
});
