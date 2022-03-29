<?php include '../includes/config.php' ?>
<?php include 'includes/navbar.php';?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
<center>
	<div class="edit-title">
	    <img src="assets/img/examples.gif">
		<div class="edit_services-inputs">
			<form method="POST" action="modal/edit_examples.inc.php" enctype="multipart/form-data">
				<input type="text" name="name" placeholder="Name">
				<input type="text" name="title" placeholder="Title">
				<input type="file" name="file">
				<br>
				<button name="submit">Insert</button>
			</form>
		</div>
	</div>
</center>