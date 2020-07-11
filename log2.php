<?php
session_start();



$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'blog');

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
  

    if ($email != "" && $password != ""){

        $sql_query = "select * from register where email='".$email."'and password='".$password."'";
        $result = mysqli_query($con,$sql_query)or die( mysqli_error($con));
        $count = mysqli_num_rows($result);
       
        if ($count){
            $row = mysqli_fetch_assoc($result);
           
             
            
    
                $_SESSION['email'] = $email;
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
              
                echo'<script>alert( "You are logged in !!!!")</script>';
                ?>
                <script>
                    location.replace("home.php");
                </script>
                <?php
                
           }else{
                echo'<script>alert( "Invalid username and password")</script>';?>
                     <script>
                    location.replace("login.php");
                </script>
                <?php
            }
    
    
        }else{
            echo'<script>alert( "Not connected")</script>';
    
        
        }
    }    

?>