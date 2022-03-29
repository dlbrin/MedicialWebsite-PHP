<?php include 'includes/navbar.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('assets/images/3.jpg'); background-position: center;
  background-repeat: no-repeat; background-size: cover; height: 100vh;
  width: 100%;">
    <div class="login-container">
        <center>
            <div class="login-details">
                <img src="assets/img/logo.png">
                <form method="POST" action="modal/login.inc.php">
                    <input type="text" name="username" placeholder="Enter UserName">
                    <br>
                    <input type="password" name="password" placeholder="Enter Password">
                    <br>
                    <input type="submit" name="submit" value="LOGIN">
                </form>
            </div>
        </center>
    </div>
</body>
</html>