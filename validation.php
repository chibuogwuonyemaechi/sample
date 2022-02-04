<?php

session_start();


$con= mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'frimoth');

$name = $_POST['username'];
$pass = $_POST['password'];
$email= $_POST['email'];

$sql = " select * from user_login where email = '$email' && password = '$pass'";

$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

if($num ==1){
    $_SESSION['username']= $name;
    header('location:checkout.php'); 
    }else{
    header('location:myaccount.php');
}
?>
