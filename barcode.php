<!DOCTYPE html>
<html>
<head>
    <title>QR Code Generator</title>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
</head>
<body>
    <h1>QR Code Generator</h1>
    <div id="qrcode"></div>

    <script>
        // Replace the following URL with the data you want to encode into the QR code
        const dataToEncode = "https://www.example.com";

        // Generate the QR code and display it in the specified div
        const qrcodeDiv = document.getElementById("qrcode");
        const qrcode = new QRCode(qrcodeDiv, {
            text: dataToEncode,
            width: 256,
            height: 256,
        });
    </script>
</body>
</html>
