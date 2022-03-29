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
      <center><img src="assets/img/example-doctor-edit.gif"></center>
</div>
<div class="edit-services-cards">
	<?php
	$query = mysqli_query($db , "SELECT * FROM `examples`");
	while($row = mysqli_fetch_assoc($query)){?>
		<div class="edit-services-cards-details">
			<img src="../assets/images/<?php echo sec($row['images']);?>">
			<h1><?php echo sec($row['name']);?></h1>
			<p><?php echo sec($row['title']);?></p>
                  <?php
                        if($role == "dlbrenakre17@gmail.com")
                         {?>
                        <div class="edit-services-cards-buttons">
                        <a href="modal/edit_examples.inc.php?delete=<?php echo sec($row['id']);?>"><button name="delete" class="btn btn-outline-danger">Delete</button></a>
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
            				<form method="POST" action="modal/edit_examples.inc.php">
            					<center><img src="assets/img/confirm.gif"></center>
            					<input type="text" name="id" value="<?php echo sec($row['id']);?>" hidden>
            					<label>Name:</label><br>
            					<input type="text" name="name" value="<?php echo sec($row['name']);?>">
            					<br>
            					<label>Detail:</label>
            					<br>
            					<textarea type="text" name="title">
            					<?php echo sec($row['title']);?></textarea>
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
