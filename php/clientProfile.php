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
    <script src = "../js/tempProfileInfo.js"></script>
</head>

<body>
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
		<form id = "profileForm" action = "../pages/client_profile_management.html" method="POST">
			<h2 class="text-center">Profile</h2>
			<div class="form-group">
				<label>Name:</label>
                <span id = "profileName"></span>

			</div>
			<div class="form-group">
				<label>Primary Address:</label>
                <span id = "profileAddress1"></span>
				
			</div>
			<div class="form-group">
				<label>Secondary Address:</label>
                <span id = "profileAddress2"></span>
				
			</div>
			<div class="form-group">
				<label>City:</label>
                <span id = "profileCity"></span>
				
			</div>
			<div class="form-group">
				<label>State:</label>
				<span id = "profileState"></span>

			</div>
			<div class="form-group">
				<label>Zipcode:</label>
                <span id = "profileZipcode"></span>
				
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block">Edit</button>
			</div>
		</form>
	</div>
	</body>
</html>
