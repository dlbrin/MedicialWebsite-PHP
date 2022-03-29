<?php include '../../includes/config.php' ?>

<?php
if(isset($_POST['submit'])){
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);

if(empty($email) || empty($password)){
    header("Location:../index.php");
}else{
    $password = hash('gost', $password); 
    $query = mysqli_query($db , "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password'");
    if(mysqli_num_rows($query) == 1){
        while($row = mysqli_fetch_assoc($query)){
            $_SESSION['userid'] = $row['id'];
            header('Location: ../home.php');
        }
        die();
    }else{
        header("Location:../index.php");
    }
}
}
?>