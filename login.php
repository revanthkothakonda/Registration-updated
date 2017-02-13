<html lang="en">
<TITLE> Whatsapp users </TITLE>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src=js/bootstrap-datepicker.min.js"></script>
  <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
</head>
<body>
<?php
require 'dbconnect.php';

if(!isset($_SESSION['uid']))
{
   echo "<form action='loginsuccess.php' method='post' width='40%'>
    <table width=50%>
    <tr>
        <td>Username:</td>
        <td><input type='text' name='username' class='form-control' id='ex1' placeholder='username'></td>
    </tr>
     <tr>
        <td>Password:</td>
        <td><input type='password' name='password' class='form-control' id='ex1' placeholder='password'></td>
    </tr>
    <TR><TD></TD>
        <TD><input type='submit' name='login' value='Login'></TD></TR>
    </table>
        </form>";
    
}





?>
</body>
</html>