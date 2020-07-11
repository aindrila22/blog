<?php

session_start();



$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'blog');

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$ename = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from register where email = '$ename' && password = '$pass' ";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo'<script>alert("email/password already taken")</script>';
}else{
    $reg = "INSERT INTO register(firstname,lastname,email,password) VALUES ('" . $fname . "','" . $lname . "','" . $ename . "','" . $pass . "')";
    mysqli_query($con, $reg);

    echo'<script>alert("Registration Successful")</script>';
    header('location: login.php');
}
?>