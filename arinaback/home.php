<?php include '../includes/config.php' ?>
<?php include 'includes/navbar.php';?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
</head>
<body>
	<div class="first">
		<div class="admin-logo">
			<div class="admin-logo-text">
				<h1>Welcome To Arina Admin Panel</h1>
			</div>
			<div class="admin-logo-img">
				<center><img src="assets/img/admin-doctor.gif"></center>
			</div>
		</div>
		<div class="home-cards">
			<div class="home-cards-details">
				<div class="home-cards-info">
					<img src="assets/img/visitors.svg">
				    <div class="home-cards-info-text">
					    <h1>Visitors</h1>
				        <br>
				        <br>
				        <h1><?php dla('visitors');?></h1>
				    </div>
			    </div>
			</div>
			<div class="home-cards-details">
				<div class="home-cards-info">
					<?php
			        $query = mysqli_query($db, "SELECT * FROM `services`");
			        $row = mysqli_num_rows($query);?>
					<img src="assets/img/services.svg">
				    <div class="home-cards-info-text">
					    <h1>Services</h1>
				        <br>
				        <br>
				        <h1><?php echo sec($row);?></h1>
				    </div>
			    </div>
			</div>
			<div class="home-cards-details">
				<div class="home-cards-info">
					<?php
			        $query = mysqli_query($db, "SELECT * FROM `examples`");
			        $row = mysqli_num_rows($query);?>
					<img src="assets/img/examples.svg">
				    <div class="home-cards-info-text">
					    <h1>Examples</h1>
				        <br>
				        <br>
				        <h1><?php echo sec($row);?></h1>
				    </div>
			    </div>
			</div>
			<div class="home-cards-details">
				<div class="home-cards-info">
					<?php
			        $query = mysqli_query($db, "SELECT * FROM `contact`");
			        $row = mysqli_num_rows($query);?>
					<img src="assets/img/messages.svg">
				    <div class="home-cards-info-text">
					    <h1>Messages</h1>
				        <br>
				        <br>
				        <h1><?php echo sec($row);?></h1>
				    </div>
			    </div>
			</div>
		</div>
	</div>
</body>
</html>