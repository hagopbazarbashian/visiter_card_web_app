function validateAndToggleInput(value) {
    var inputElement = document.getElementById("facebookProfile");
    var errorMessage = document.getElementById("error-message");

    // Basic validation: Check if the link starts with "https://www.facebook.com/"
    if (value.startsWith("https://www.facebook.com/")) {
        errorMessage.style.display = "none";
        inputElement.style.border = "1px solid #ccc"; // Reset border
    } else {
        // Display an error message, apply visual feedback, and hide the input
        errorMessage.textContent = "Please enter a valid Facebook profile link.";
        errorMessage.style.display = "block";
        inputElement.style.border = "1px solid red"; // Highlight the textarea
        inputElement.style.display = "none"; // Hide the input
    }
}


function validateAndToggleInstagramInput(value) {
    var inputElement = document.getElementById("instagramProfile");
    var errorMessage = document.getElementById("error-messageins");

    // Basic validation: Check if the link starts with "https://www.instagram.com/"
    if (value.startsWith("https://www.instagram.com/")) {
        errorMessage.style.display = "none";
        inputElement.style.border = "1px solid #ccc"; // Reset border
    } else {
        // Display an error message, apply visual feedback, and hide the input
        errorMessage.textContent = "Please enter a valid Instagram profile link.";
        errorMessage.style.display = "block";
        inputElement.style.border = "1px solid red"; // Highlight the textarea
        inputElement.style.display = "none"; // Hide the input
    }
}


function validateAndToggleLinkedInInput(value) {
    var inputElement = document.getElementById("linkedinProfile");
    var errorMessage = document.getElementById("error-messagelinkedin");

    // Basic validation: Check if the link starts with "https://www.linkedin.com/in/"
    if (value.startsWith("https://www.linkedin.com/in/")) {
        errorMessage.style.display = "none";
        inputElement.style.border = "1px solid #ccc"; // Reset border
    } else {
        // Display an error message, apply visual feedback, and hide the input
        errorMessage.textContent = "Please enter a valid LinkedIn profile link.";
        errorMessage.style.display = "block";
        inputElement.style.border = "1px solid red"; // Highlight the textarea
        inputElement.style.display = "none"; // Hide the input
    }
}
