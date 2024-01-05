document.querySelectorAll(".qr-icon").forEach(function (qrIcon) {
    qrIcon.addEventListener('click', function () {
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
        closeButton.addEventListener('click', function () {
            document.body.classList.remove('qrcode-active');
            qrcodeContainer.style.display = 'none';
        });

        // Create a new div for the QR code
        var qrcodeDiv = document.createElement("div");
        qrcodeDiv.className = "qrcode";

        // Append the close button and QR code div to the container
        qrcodeContainer.appendChild(closeButton);
        qrcodeContainer.appendChild(qrcodeDiv);

        // Create a "Copy Link" button
            var copyLinkButton = document.createElement("button");
            copyLinkButton.textContent = "Copy Link";
            copyLinkButton.className = "copy-link-button action-button"; // Add the "copy-link-button" class here
            copyLinkButton.addEventListener('click', function() {
            copyToClipboard(url);
            });

        // Append the "Copy Link" button to the container
        qrcodeContainer.appendChild(copyLinkButton);

        // Create a "Save QR Code" button
        var saveQRCodeButton = createButton("Save QR Code", "copy-link-buttonqr action-button", function () {
            saveQRCodeImage(qrcodeDiv);
        });

        // Append the action buttons to the container
        qrcodeContainer.appendChild(copyLinkButton);
        qrcodeContainer.appendChild(saveQRCodeButton);

        // Close any existing QR code containers
        document.querySelectorAll(".qrcode-container").forEach(function (container) {
            container.style.display = 'none';
        });

        // Generate QR code
        var qrcode = new QRCode(qrcodeDiv, {
            text: url,
            width: 128, // Set the width as needed
            height: 128 // Set the height as needed 
        });
        

        // Append the new container to the body
        document.body.appendChild(qrcodeContainer);

        // Show the new QR code container
        qrcodeContainer.style.display = 'block';
    });
});

function createButton(text, className, clickHandler) {
    var button = document.createElement("button");
    button.textContent = text;
    button.className = className;
    button.addEventListener('click', clickHandler);
    return button;
}

function copyToClipboard(text) {
    var dummyElement = document.createElement("textarea");
    document.body.appendChild(dummyElement);
    dummyElement.value = text;
    dummyElement.select();
    document.execCommand("copy");
    document.body.removeChild(dummyElement);
    alert("Link copied to clipboard: " + text);
}

function saveQRCodeImage(qrcodeDiv) {
    var qrCodeImage = qrcodeDiv.querySelector("img");
    if (qrCodeImage) {
        var link = document.createElement("a");
        link.href = qrCodeImage.src;
        link.download = "qrcode.png";
        link.click();
    } else {
        alert("QR Code image not found.");
    }
}
