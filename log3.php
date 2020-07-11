<?php
session_start();

// Include the database configuration file

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'blog');
if(isset($_POST['btn2'])){


$text = $_POST['post'];
$file = $_FILES['file'];
//print_r($text);
//print_r($file);

$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

    if ($fileerror == 0){

        $destfile = 'images/'.$filename;
        move_uploaded_file($filepath, $destfile);
        $insert = "INSERT into details (post, uid, images, time) VALUES ('".$text."','".$_SESSION['name']."','".$destfile."',NOW())";
$result = mysqli_query($con,$insert)or die( mysqli_error($con));
if($result){
    echo'<script>alert( "The file has been uploaded successfully")</script>';
    header('location: home.php');
    exit();

}else{
    echo'<script>alert( "File upload failed, please try again")</script>';
    exit();
} 
    }

}
?>