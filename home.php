<?php
session_start()
?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="style.css">
 </head>
<style>
    /* created for device width 1024 */
 @media only screen and (max-device-width: 1024px) {
    .container a {
      float: none;
      text-align: left;
   
   
    }

    .button6{
  display: block;
  margin: 0.4em auto ;
  }
  
    .panel-heading{
      float: none;
      font-size: 3vw;
  
    }
    .name{
      float: none;
      font-size: 2vw;
    }
  
    .content{
      float: none;
      font-size: 3vw;
  
    }
    .form-inline{
      float: none;
    }
    .form-control{
      float: none;
    }
   }

   /* created for device width 768px  */
   @media screen and (min-device-width: 768px) {
    .container a {
      float: none;
      text-align: left;
   
    }
    .button6{
  display: block;
  margin: 0.4em auto ;
  }
  
    .panel-heading{
      float: none;
      font-size: 3vw;
  
    }
    .name{
      float: none;
      font-size: 1.2vw;
    }
    .content{
      float: none;
      font-size: 3vw;
  
    }
    .form-inline{
      float: none;
    }
    .form-control{
      float: none;
    }
    .btn2{
      float: none;
      width: 7vw;
      height: 3vw;
      background: green;
      color: white;
      border-radius: 0.5vw;
      position: absolute;
    
    }
   }

   /* contents for web  */
  .navbar-collapse hover{
    color:blue;
  }
  .navbar{
    color:	rgb(255,105,180,0.2);
  }
  .container2-sm{
  
  height: 9%;  
  background: 	rgb(255,105,180,0.5);
  color: navy;
  font-style: verdana;
  font-size: 1.8vw;
  text-align: center;
  
  }


  .button6{
  
  display: inline-block;
  padding: 0.7em 1.4em;
  margin : 0 0.3em 0.3em 0;
  border-radius: 0.15em;
  box-sizing: border-box;
  text-decoration:none;
  font-family:'Roboto',sans-serif;
  text-transform:uppercase;
  font-weight:400;
  color:#FFFFFF;
  background-color: rgb(255,20,147);
  box-shadow:inset 0 -0.6em 0 -0.35em 	rgb(199,21,133,0.2);
  text-align:center;
  position:relative;
  }


  .button6:active{
  top:0.1em;
  }


  .responsive {
    width: 100%;
    height: auto;
  }


  .active-pink-textarea-2 textarea.md-textarea {
    border-bottom: 1px solid #f48fb1;
    box-shadow: 0 1px 0 0 #f48fb1;
  }


  .active-pink-textarea-2.md-form label.active {
    color: #f48fb1;
  }


  .active-pink-textarea-2.md-form label {
    color: #f48fb1;
  }

  
  .active-pink-textarea-2.md-form textarea.md-textarea:focus:not([readonly])+label {
    color: #f48fb1;
  }
  
  </style>
 <body>
  <div class="container">
   <br />
  
   <h2 align="center"></h2>
   <br />
   <div class="panel panel-default">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" style="color:blueviolet"><b>WELCOME !!&nbsp; &nbsp;<?php echo $_SESSION['name']?></b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" ><b>Home</b><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log_Out</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav><br><br>

   <form action="add.php" method="post" enctype="multipart/form-data">
   <div class="form-group">
   <div class="md-form mb-4 pink-textarea active-pink-textarea-2">
  <textarea id="form17" class="md-textarea form-control" rows="3" name="post" required="required"></textarea>
  <label for="form17"> Write Your Blog</label>
</div><br><br>

     <input type="hidden" name="uid" value="">
     <input type="hidden" name="lid" value="">
     <input type="hidden" name="email" value="">
      <label for="file">Post Your Images</label><br>
      <input  type="file" name="file" />
    </div><br>
    <button type="submit" class="button6" id="btn2" name="btn2">POST</button>
  </form><br><br>
</div>

   
   </form><br><br><br>

<?php
$con = mysqli_connect('localhost','root','',);
mysqli_select_db($con, 'blog' );

$call = "SELECT * FROM details ORDER BY id DESC ";
$sql = mysqli_query($con, $call);
while($row= mysqli_fetch_array($sql))
{
 

  ?>
<div class = name>
<div id="<?php echo $row["id"];?>" class="comment-row">
<div class="container2-sm border"><?php echo $row["id"];?>..&nbsp; &nbsp;
<b><?php echo $row['uid']?>&nbsp;<?php echo $row['lid']?></b>&nbsp;posted on &nbsp;<?php echo $row['time']?></div><br>
<?php echo $row["post"];?><br></div><br>
<img src ="<?php echo $row["images"];?>" class = "responsive" width ="1200" height= "800"><br><br><br><br>

    

<?php

}?>
</div>

  </div>
 </body>
</html>
