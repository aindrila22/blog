
<html>
<body>
<h1>CONVERSIONS</h1><br><br>
<form method ="POST">
    <input type ="text" name="box"><br><br><br>
    <select name = "selection">
        <option value = "celsius"  name = "celsius">CELSIUS</option>
        <option value = "fahrenheit" name = "fahrenheit" >FAHRENHEIT</option>
    </select><br><br><br>
    <button type="submit" name="submit">SUBMIT</button><br><br>
</form>
<?php
if(isset($_POST['submit'])){
    $num = $_POST['box'];
  
    $selection = $_POST['selection'];
    switch( $selection){
        case 'celsius': 
            $val1 = (($num * 9/5) + 32 );
            echo "the fahrenheit value is : $val1" ;
        break;
        case 'fahrenheit': 
            $val4 = (($num - 32 ) * 5/9);
            echo "the celsius value is : $val4" ;
        break;

    
    }
}

?>
</body>
</html>



