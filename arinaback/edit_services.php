<?php include '../includes/config.php' ?>
<?php include 'includes/navbar.php';?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
<?php 
      $query = mysqli_query($db , "SELECT * FROM `admin` WHERE `id` = '$userid'");
      while($row = mysqli_fetch_assoc($query)){
            $_SESSION['role'] = sec($row['email']);
            $role = $_SESSION['role'];
            }?>

<div class="edits-images">
      <center><img src="assets/img/service-doctor-edit.gif"></center>
</div>
<div class="edit-services-cards">
	<?php
	$query = mysqli_query($db , "SELECT * FROM `services`");
	while($row = mysqli_fetch_assoc($query)){?>
		<div class="edit-services-cards-details">
                  <div class="edit-services-cards-details-data">
			<img src="../assets/images/<?php echo sec($row['img']);?>">
			<h1><?php echo sec($row['name']);?></h1>
			<p><?php echo sec($row['details']);?></p>
			<p><?php echo sec($row['content']);?></p>
			<h1><?php echo sec($row['lang']);?></h1>
                  </div>
                  <?php
                        if($role == "dlbrenakre17@gmail.com")
                  {?>
			<div class="edit-services-cards-buttons">
			    <a href="modal/edit_services.inc.php?delete=<?php echo sec($row['id']);?>"><button name="delete" class="btn btn-outline-danger">Delete</button></a>
			    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#edit<?php echo sec($row['id']);?>">Edit</button>
			</div>
                  <?php }else{
                        echo "you don't have permission "; } ?>

		</div>
		<!-- Modal -->
            <div class="modal fade" id="edit<?php echo sec($row['id']);?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            	<div class="modal-dialog">
            		<div class="modal-content">
            			<div class="modal-body">
            				<form method="POST" action="modal/edit_services.inc.php">
            					<center><img src="assets/img/confirm.gif"></center>
            					<input type="text" name="id" value="<?php echo sec($row['id']);?>" hidden>
            					<label>Name:</label><br>
            					<input type="text" name="name" value="<?php echo sec($row['name']);?>">
            					<br>
            					<label>Detail:</label>
            					<br>
            					<textarea type="text" name="details">
            					<?php echo sec($row['details']);?></textarea>
            					<br>
            		        	<label>Content:</label>
            		        	<br>
            		        	<textarea type="text" name="content"><?php echo sec($row['content']);?></textarea>
            					<br>
            					<label>Lang:</label><br>
            					<input type="text" name="lang" value="<?php echo sec($row['lang']);?>">
            					<br>
            					<button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
            					<button name="edit" class="btn btn-outline-success">Edit</button>
            				</form>
            			</div>
            		</div>
            	</div>
            </div>
	<?php } ?>
</div>
