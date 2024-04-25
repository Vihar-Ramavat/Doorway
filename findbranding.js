// Function to check if a URL is valid
    function checkURLValidity() {
        var url = document.getElementById("websiteInput").value.trim(); // Get the URL input value
        var errorMessage = document.getElementById("urlErrorMessage"); // Get the error message element

        if (url.startsWith("http://") || url.startsWith("https://")) {
            // Display error message if URL starts with http:// or https://
            errorMessage.textContent = "Only domain name is allowed. Please remove http:// or https://";
            return;
        }

        var request = new XMLHttpRequest(); // Create a new XMLHttpRequest object

        request.onreadystatechange = function () {
            if (request.readyState === XMLHttpRequest.DONE) {
                if (request.status === 200) {
                    // URL is valid
                    console.log("URL is valid.");
                    errorMessage.textContent = ""; // Clear error message
                } else {
                    // URL is not valid
                    console.log("URL is not valid.");
                    errorMessage.textContent = "Invalid website URL. Please enter a valid domain name.";
                }
            }
        };

        // Open a GET request to the server with the URL
        request.open("GET", "http://" + url, true);
        request.send(); // Send the request
    }

    // Event listener for the Find button click
    document.querySelector(".colorless_btn").addEventListener("click", function () {
        checkURLValidity(); // Call the function to check URL validity
    });