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
        require_once('php_class/ClientProfileManagement.php');
        
        $userProfile = new ClientProfileManagement($_POST["fullname"], $_POST["address1"], $_POST["address2"], $_POST["city"], $_POST["state"], $_POST["zipcode"]);

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

<div class="quote-form">
		<h2 class="text-center">Confirm the following information:</h2>

    <form id = "profileConf">
		<div class="form-group">
          	<p>Full Name: <?php echo $userProfile -> getName(); ?></p>
		</div>

		<div class="form-group">
            <p>Address 1: <?php echo $userProfile -> getAdd1(); ?></p>
        </div>

      	<div class="form-group">
            <p>Address 2: <?php echo $userProfile -> getAdd2(); ?></p>
		</div>

      	<div class="form-group">
            <p>City: <?php echo $userProfile -> getCity(); ?></p>
		</div>

      	<div class="form-group">
            <p>State: <?php echo $userProfile -> getState(); ?></p>
      	</div>

      	<div class="form-group">
            <p>Zipcode: <?php echo $userProfile -> getZipcode(); ?></p>
		</div>

		<div class="form-group">
			<button type="button" onClick = "confirmProf()" class="btn btn-primary btn-block">Confirm</button>
		</div>

        <div class="form-group">
			<button type="button" onClick = "denyProf()" class="btn btn-primary btn-block">Deny</button>
		</div>
	</form>
</div>

</body>
</html>
