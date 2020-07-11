<?php
session_start();
$con = mysqli_connect('localhost','root','',);
mysqli_select_db($con, 'blog' );
$query = "select * from details where email='". $_SESSION['email'] ."'";
$result5 = mysqli_query($con,$query)or die( mysqli_error($con));
$count2 = mysqli_num_rows($result5);
echo $count2;
if ($count2){
    $row5 = mysqli_fetch_assoc($result5);
    ?>
    <div class = name>
    <div id="<?php echo $row5["id"];?>" class="comment-row">
    <div class="container2-sm border"><?php echo $row5["id"];?>..&nbsp; &nbsp;
    <b><?php echo $row['uid']?>&nbsp;<?php echo $row5['lid']?></b>&nbsp;posted on &nbsp;<?php echo $row['time']?></div><br>
    <?php echo $row5["post"];?><br></div><br>
    <img src ="<?php echo $row5["images"];?>" class = "responsive" width ="1200" height= "800"><br><br><br><br>
    
        
    
    <?php
    
    }?>
 
