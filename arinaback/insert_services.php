<?php include '../includes/config.php' ?>
<?php include 'includes/navbar.php';?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
<center>
	<div class="edit-title">
		<img src="assets/img/service-doctor.gif">
		<div class="edit_services-inputs">
			<form method="POST" action="modal/edit_services.inc.php" enctype="multipart/form-data">
				<input type="text" name="name" placeholder="Name">
				<input type="text" name="details" placeholder="Details">
				<textarea name="content" placeholder="Content"></textarea>
				<br>
				<select name="lang">
					<option>en</option>
					<option>bs</option>
					<option>ar</option>
				</select>
				<input type="file" name="file">
				<br>
				<button name="submit">Insert</button>
			</form>
		</div>
	</div>
</center>
