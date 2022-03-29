<?php include '../includes/config.php' ?>

<?php
if(isset($_POST['submit'])){
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);

if(empty($username) || empty($password)){
    header("Location:../index.php");
}else{
    $password = hash('gost', $password); 
    $query = mysqli_query($db , "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'");
    if(mysqli_num_rows($query) == 1){
        while($row = mysqli_fetch_assoc($query)){
            header('Location: ../about.php');
        }
        die();
    }else{
        header("Location:../index.php");
    }
}
}
?>