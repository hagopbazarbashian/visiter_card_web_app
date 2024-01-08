<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Link</title>
    <script src="https://cdn.rawgit.com/neocotic/qrious/v4.0.2/dist/qrious.min.js"></script>
    <style>
        #qrcode-container {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div id="qrcode-container">
        <!-- Generate QR code -->
        <div id="qrcode"></div>
    </div>

    <script>
        // URL you want the QR code to link to
        var targetUrl = "https://example.com"; // Replace with your desired URL

        // Generate QR code with the specified URL
        var qr = new QRious({
            element: document.getElementById('qrcode'),
            value: targetUrl,
            size: 200
        });

        // You can also open the URL directly in the browser
        // Uncomment the line below if you want to open the URL immediately
        // window.location.href = targetUrl;
    </script>
</body>
</html>
