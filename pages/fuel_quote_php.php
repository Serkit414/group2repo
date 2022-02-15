<!DOCTYPE html>
<html>
<body>

<h1>Fuel Quote Form</h1>

<h2>Please confirm the following information:</h2>
<br>

<span>Suggested Price/Gallon: $</span> <span id = "price">2.50</span> <br> <br>
<span>Gallon Number: </span><span id = "number"><?php echo $_POST["GallonNumber"]; ?></span> <br>
<p>Delivery Address: 123 Apple Dr, Houston, TX, 77204</p>
<p>Delivery Date: <?php echo $_POST["DelDate"]; ?></p>
<span>Total Cost: $</span> <span id = "costAmount"></span> <br>

<button type = "button" onClick = "confirmInfo()">Confirm</button>
<button type = "button" onClick = "denyInfo()">Deny</button>

<script src = "../js/confirmInfo.js"></script>
</body>
</html> 