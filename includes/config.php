<?php
session_start();
$db = mysqli_connect('localhost','root','','arina');
if (!$db){
	echo mysqli_connect_error($db);
	echo "DataBase Niya";
}

function sec($data){
    global $db;
    $data = mysqli_real_escape_string($db,htmlspecialchars($data));
    return $data;
}

function dla($condition){
	global $db;
	$query = mysqli_query($db , "SELECT * FROM $condition");
	echo mysqli_num_rows($query);
}
$ip = $_SERVER['REMOTE_ADDR'];
$query = mysqli_query($db , "SELECT * FROM `visitors` WHERE `ip` = '$ip'");
if(mysqli_num_rows($query) == 0){
    $query = mysqli_query($db , "INSERT INTO `visitors`(`ip`) VALUES('$ip')");

}

if(isset($_SESSION['userid'])){
    $userid = $_SESSION['userid'];
}

if(isset($_GET['logout'])){
    session_unset();
    unset($_SESSION['userid']);
    session_destroy();
    header('Location: index.php');
    }


 
?>