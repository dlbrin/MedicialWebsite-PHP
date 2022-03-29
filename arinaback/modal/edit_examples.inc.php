<?php 
include '../../includes/config.php';
//insert data
if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$title = mysqli_real_escape_string($db, $_POST['title']);

	  $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];
  
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $fileAllowed = array('png' , 'jpg' , 'jpeg' , 'svg' , 'gif');
  
    if(in_array($fileActualExt , $fileAllowed)){
      if($fileError === 0){
        if($fileSize < 10000000){
  
          $fileNewName = rand().".".$fileActualExt;
          $fileDestinition = "../../assets/images/$fileNewName";
          move_uploaded_file($fileTmpName , $fileDestinition);

          $query = mysqli_query($db , "INSERT INTO `examples`(`name`, `title`, `images`) VALUES ('$name', '$title', '$fileNewName')");

          if($query){
          	header('Location: ../insert_examples.php?success');
          }
        }
      }
    }

    if(empty($name) || empty($title) || empty($file)){
      header('Location: ../insert_examples.php?error');
      }
}

//delete data
if(isset($_GET['delete'])){
	$id = sec($_GET['delete']);
	$query = mysqli_query($db , "DELETE FROM `examples` WHERE `id` = '$id'");
	if($query){
		header('Location: ../edit_examples.php?delete');
	}
}

//edit data
if(isset($_POST['edit'])){
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$details = mysqli_real_escape_string($db, $_POST['details']);
  $content = mysqli_real_escape_string($db, $_POST['content']);
  $lang = mysqli_real_escape_string($db, $_POST['lang']);
  $id_edit = mysqli_real_escape_string($db, $_POST['id']);

	$query = mysqli_query($db , "UPDATE `examples` SET `name`='$name' , `title`='$title' WHERE `id` = '$id_edit'");
	          if($query){
          	header('Location: ../edit_examples.php?updated');
          }
        }
?>