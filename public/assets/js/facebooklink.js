document.addEventListener('click', function (event) {
    var inputElement = document.getElementById("facebookProfile");
    var errorMessage = document.getElementById("error-message");

    // Check if the click occurred outside the input element
    if (event.target !== inputElement && !inputElement.contains(event.target)) {
      inputElement.style.display = "block"; // Show the input element
      errorMessage.style.display = "none"; // Hide the error message
    }
  });

//   function validateAndToggleInput(value) {
//     var inputElement = document.getElementById("facebookProfile");
//     var errorMessage = document.getElementById("error-message");

//     // Basic validation: Check if the link starts with "https://www.facebook.com/"
//     if (value.startsWith("https://www.facebook.com/")) {
//         errorMessage.style.display = "none";
//         inputElement.style.border = "1px solid #ccc"; // Reset border
//     } else {
//         // Display an error message, apply visual feedback, and hide the input
//         errorMessage.textContent = "Please enter a valid Facebook profile link.";
//         errorMessage.style.display = "block";
//         inputElement.style.border = "1px solid red"; // Highlight the textarea
//         inputElement.style.display = "none"; // Hide the input
//     }
//   }

function validateFacebookUsername() {
    var usernameInput = document.getElementById('facebookUsername');
    var validationMessage = document.getElementById('facebookValidationMessage');
    var username = usernameInput.value.trim();

    // Regular expression to check if the entered value is a valid Facebook username
    var facebookUsernameRegex = /^[a-zA-Z0-9.]{5,50}$/; // Adjust the regex based on your criteria

    if (facebookUsernameRegex.test(username)) {
        validationMessage.textContent = ''; // Clear the validation message
    } else {
        validationMessage.textContent = 'Please enter a valid Facebook username.';
        usernameInput.focus();
    }
}







