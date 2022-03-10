<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="../styles.css">
    <script src = "../js/formMover.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src ="../js/tab.js"></script>
</head>

<body>
    <?php
        require_once('php_class/FuelQuote.php');
        require_once('php_class/PriceCalculator.php');
        $userQuote = new FuelQuote($_POST["GallonNumber"], $_POST["DelDate"]);

    ?>
    <header>
        <div class="tab">
            <button class="tablinks" onclick="loginTab()">Login</button>
            <button class="tablinks" onclick="registerTab()">Register</button>
            <button class="tablinks" onclick="profileTab()">Profile</button>
            <button class="tablinks" onclick="quoteTab()">Fuel Quote</button>
            <button class="tablinks" onclick="historyTab()">Fuel Quote History</button>
        </div>
  </header>
<div class = "quote-form">
    <h2 class = "text-center">Fuel Quote Form</h2>

    <form id = "fuelConf">
        <h2 class = "text-center">Please confirm the following information:</h2>
        <br>

        <div class = "form-group">
            <span>Suggested Price/Gallon:</span> <span id = "defaultPrice"><?php echo PriceCalculator::suggestedPrice() ?></span> <br>
        </div>

        <div class = "form-group">
            <span>Gallon Number: </span><span id = "GallonNumber"><?php echo $userQuote -> getGallons(); ?></span> <br>
        </div>

        <div class = "form-group">
            <label for = "DelAddr">Delivery Address:</label>
            <span id = "profileAddress"></span>
        </div>

        <div class = "form-group">
            <p>Delivery Date: <?php echo $userQuote -> getDate(); ?></p>
        </div>

        <div class = "form-group">
            <span>Total Cost: </span> <span id = "costAmount"><?php echo $userQuote -> calculatePrice()?></span> <br>
        </div>

        <div class = "form-group">
            <button type = "button" onClick = "confirmInfo()" class = "btn btn-primary btn-block">Confirm</button>
        </div>

        <div class = "form-group">
            <button type = "button" onClick = "denyInfo()" class = "btn btn-primary btn-block">Deny</button>
        </div>
    </form>
</div>

<script src = "../js/formFiller.js"></script>
</body>
</html> 
