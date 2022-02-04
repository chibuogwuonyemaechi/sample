<?php

session_start();
header('location:validation.php');

$con= mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'frimoth');

$name = $_POST['username'];
$pass = $_POST['password'];
$email= $_POST['email'];

$sql = " select * from user_login where email = '$email'";

$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

if($num ==1){
    echo" Username Already Taken"; 
    }else{
    $reg= " insert into user_login(username, password, email) values ('$name', '$pass', '$email')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}
?>
