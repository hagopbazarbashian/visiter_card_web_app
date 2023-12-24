document.addEventListener('DOMContentLoaded', function() {
    const photoInput = document.getElementById('photo');
    previewImage(photoInput);
  });

  function previewImage(input) {
    const preview = document.getElementById('image-preview');
    const noImageMessage = document.getElementById('no-image-message');
    const file = input.files[0];

    if (file) {
      const reader = new FileReader();

      reader.onload = function (e) {
        preview.src = e.target.result;
        preview.style.display = 'block';
        noImageMessage.style.display = 'none';
      };

      reader.readAsDataURL(file);
    } else {
      preview.style.display = 'none';
      noImageMessage.style.display = 'block';
    }
  }



  function toggleInput(socialMedia) {
    // Show the selected social media input field
    var inputId = socialMedia + 'Input';
    var input = document.getElementById(inputId);
    input.style.display = 'block';

    // Show the submit button
    var submitButton = document.getElementById('submitButton');
    submitButton.style.display = 'block';
  }

  function submitForm() {
    var form = document.getElementById('myForm');
    form.submit(); // Submit the form to your Laravel backend
  }
