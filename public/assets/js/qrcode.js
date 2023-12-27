document.querySelectorAll(".qr-icon").forEach(function(qrIcon) {
    qrIcon.addEventListener('click', function() {
        // Toggle a class on the body to change the background color
        document.body.classList.toggle('qrcode-active');
        var url = qrIcon.getAttribute("data-url");

        // Create a new QR code container
        var qrcodeContainer = document.createElement("div");
        qrcodeContainer.className = "qrcode-container text-center";
        qrcodeContainer.style.display = 'none';

        // Create a close button for the new container
        var closeButton = document.createElement("div");
        closeButton.className = "qrcode-close";
        closeButton.style.cursor = "pointer";
        closeButton.innerHTML = "&times;";
        closeButton.addEventListener('click', function() {
            document.body.classList.remove('qrcode-active');
            qrcodeContainer.style.display = 'none';
        });

        // Create a new div for the QR code
        var qrcodeDiv = document.createElement("div");
        qrcodeDiv.className = "qrcode";

        // Append the close button and QR code div to the container
        qrcodeContainer.appendChild(closeButton);
        qrcodeContainer.appendChild(qrcodeDiv);

        // Close any existing QR code containers
        document.querySelectorAll(".qrcode-container").forEach(function(container) {
            container.style.display = 'none';
        });

        // Generate QR code
        var qrcode = new QRCode(qrcodeDiv, {
            text: url,
            width: 128,
            height: 128
        });

        // Append the new container to the body
        document.body.appendChild(qrcodeContainer);

        // Show the new QR code container
        qrcodeContainer.style.display = 'block';
        
    });
});

