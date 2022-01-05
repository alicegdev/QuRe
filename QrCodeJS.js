<script src="./qrcode.js" defer></script>
<div id="qrcode"></div>
var QR_CODE = new QRCode("qrcode", {
    width: 220,
    height: 220,
    colorDark: "#000000",
    colorLight: "#ffffff",
    correctLevel: QRCode.CorrectLevel.H,
  });
QR_CODE.makeCode("https://buymeacoffee.com/bibekkakati");