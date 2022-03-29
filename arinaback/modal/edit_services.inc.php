<?php 
include '../../includes/config.php';
//insert data
if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$details = mysqli_real_escape_string($db, $_POST['details']);
  $content = mysqli_real_escape_string($db, $_POST['content']);
  $lang = mysqli_real_escape_string($db, $_POST['lang']);

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

          $query = mysqli_query($db , "INSERT INTO `services`(`name`, `lang`, `details`, `content`, `img`) VALUES ('$name', '$lang', '$details', '$content', '$fileNewName')");

          if($query){
          	header('Location: ../insert_services.php?success');
          }
        }
      }
    }

    if(empty($name) || empty($details) || empty($content) || empty($lang) || empty($file)){
      header('Location: ../insert_services.php?error');
      }
}

//delete data
if(isset($_GET['delete'])){
	$id = sec($_GET['delete']);
	$query = mysqli_query($db , "DELETE FROM `services` WHERE `id` = '$id'");
	if($query){
		header('Location: ../edit_services.php?delete');
	}
}

//edit data
if(isset($_POST['edit'])){
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$details = mysqli_real_escape_string($db, $_POST['details']);
  $content = mysqli_real_escape_string($db, $_POST['content']);
  $lang = mysqli_real_escape_string($db, $_POST['lang']);
  $id_edit = mysqli_real_escape_string($db, $_POST['id']);

	$query = mysqli_query($db , "UPDATE `services` SET `name`='$name' , `details`='$details' , `content`='$content' , `lang`='$lang' WHERE `id` = '$id_edit'");
	          if($query){
          	header('Location: ../edit_services.php?updated');
          }
        }
?>