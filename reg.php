<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800&display=swap"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        
        html
      
      {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
      }
      body
      {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #03080a;
      }
      .container
      {
        width: 80%;
        padding: 20px;
      }
      .container h2
      {
        width: 100%;
        color: #ffec45;
        font-size: 36px;
        text-align: center;
        margin-bottom: 10px;
      }
      .container .row100
      {
        position: relative;
        width: 100%;
        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(300px,1fr));
      }
      .container .row100 .col
      {
        position: relative;
        width: 100%;
        padding: 0 10px;
        margin: 30px 0 10px;
        transition: 0.5s;
      }
      .container .row100 .inputBox
      {
        position: relative;
        width: 100%;
        height: 40px;
        color: #ffec45;

      }
      .container .row100 .inputBox input,
      .container .row100 .inputBox.textarea textarea
      {
        position: absolute;
        width: 100%;
        height: 100%;
        background: transparent;
        box-shadow: none;
        border: none;
        outline: none;
        font-size: 18px;
        padding: 0 10px;
        z-index: 1;
        color: #000;
      }
      .container .row100 .inputBox .text
     
      {
        position: absolute;
        top: 0;
        left: 0;
        line-height: 40px;
        font-size: 18px;
        padding: 0 10px;
        display: block;
        transition: 0.5s;
        pointer-events: none;
      }
      .container .row100 .inputBox input:focus + .text,
      .container .row100 .inputBox input:valid + .text
      {
        top: -35px;
        left: -10px;
      }
      .container .row100 .inputBox .line
      {
        position: absolute;
        bottom: 0;
        display: block;
        width: 100%;
        height: 2px;
        background: #ffec45;
        transition: 0.5s;
        border-radius: 2px;
        pointer-events: none;
      }
      .container .row100 .inputBox input:focus  ~ .line,
      .container .row100 .inputBox input:valid  ~ .line
      {
        height: 100%;
      }
      .container .row100 .inputBox.textarea
      {
        position: relative;
        width: 100%;
        height: 100px;
        padding: 10px 0;
      }
      .container .row100 .inputBox.textarea textarea
      {
        height: 100%;
        resize: none;
      }
      .container .row100 .inputBox textarea:focus + .text,
      .container .row100 .inputBox textarea:valid + .text
      {
        top: -35px;
        left: -10px;
      }
      .container .row100 .inputBox textarea:focus  ~ .line
      ,
      .container .row100 .inputBox textarea:valid  ~ .line
      {
        height: 100%;
      }
      input[type="submit"]
      {
        border: none;
        padding: 7px 35px;
        cursor: pointer;
        outline: none;
        background: #ffec45;
        color: #000;
        font-size: 18px;
        border-radius: 2px;

      }
      input[type="button"]
      {
        border: none;
        padding: 7px 35px;
        cursor: pointer;
        outline: none;
        background: #ffec45;
        color: #000;
        font-size: 18px;
        border-radius: 2px;

      }
          </style>
      <body>
        <div class = "container">
          <h2>REGISTER YOURSELF</h2><br>
          <form action = "reg2.php" method="POST">
          <div class = "row100">
            <div class = "col">
              <div class = "inputBox">
                <input type = "text" name = "firstname" required="required">
                <span class="text">First Name</span>
                <span class="line"></span>
              </div>
            </div>&nbsp;
                <div class = "col">
                  <div class = "inputBox">
                    <input type = "text" name = "lastname" required="required">
                    <span class="text">Last Name</span>
                    <span class="line"></span>
              </div>
            </div>
          </div><br><br>
          <div class = "row100">
            <div class = "col">
              <div class = "inputBox">
                <input type = "text" name = "email" required="required">
                <span class="text">Email</span>
                <span class="line"></span>
              </div>
              </div>
          </div><br><br>
          <div class = "row100">
            <div class = "col">
              <div class = "inputBox">
                <input type = "password" name = "password" required="required">
                <span class="text">Password</span>
                <span class="line"></span>
              </div>
              </div>
          </div><br><br>
      <div class = "row100">
        <div class = "col">
        <input type="submit" name = "submit" value="Send">
        </div>
        <div class = "col">
          <input type="button" value="Back" onclick="location.href='front.php';">
          </div>
    </form>
      </div>
 

      </body>
</html>
