<!-- D:\xampp\htdocs\blogsite\index.php -->
<!-- 117500671259-fl5a0un898tfhvs36lkackjhbpbv3973.apps.googleusercontent.com     Client Id -->
 <!-- HXx6TfnLQcRcZQmpsCR9f8vH      Client Secret  -->
 <?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login using Google Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 </head>
 <style>
 @media screen and (max-width: 1024px) {
  .container a {
    float: none;
    text-align: left;
 
  }
  .panel-heading{
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
 @media screen and (min-width: 768px) {
  .container a {
    float: none;
    text-align: left;
 
  }
  .panel-heading{
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
.navbar-collapse hover{
  color:blue;
}

  
 </style>
 <body>
  <div class="container">
   <br />
  
   <h2 align="center"></h2>
   <br />
   <div class="panel panel-default">
   <?php
   if($login_button == '')
   {
     ?>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Profile<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
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
<?php
    echo '<div align="center" class="panel-heading">Welcome</div><div class="panel-body"><br>';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail img-center" /><br><br>';
    echo '<h3 ><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3><br>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3><br>';
   
   ?>
   <form action="action.php" method="post" enctype="multipart/form data">
   <div class="form-group">
      <label for="post"> Write Your Blog</label>
      <textarea type="text" class="form-control" id="post" name="post"></textarea><br><br>
      <label for="file">Post Your Images</label><br>
      <input  type="file" name="file" />
    </div><br>
    <button type="submit" class="btn2" id="btn2" name="btn2">POST</button>
  </form><br><br>
</div>

   
   </form>
<?php

}
else
{
 echo '<div align="center">'.$login_button . '</div>';
}
?>
   </div>
  </div>
 </body>
</html>
