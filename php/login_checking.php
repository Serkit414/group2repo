<!DOCTYPE html>
<html lang = "en">
    <meta charset="UTF-8">
    <title>Fuel Quote Confirmation</title>
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
            <h2 class = "text-center">Verifying Login Information...</h2>
            
            <?php
                require_once('php_class/Login.php');
                
                $userLogin = new Login($_POST["username"], $_POST["password"]);
                
                $userLogin -> checkUserPassword
            ?>
        </div>
    </body>
</html>
