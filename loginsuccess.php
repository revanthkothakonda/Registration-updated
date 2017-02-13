<?php
session_start();
require  'dbconnect.php';
if(isset($_POST['username']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT  * FROM `users` WHERE username='".$username."' AND password='".$password."' LIMIT 1";
    $sql_run=  mysql_query($sql) or die(mysql_error());
    if(mysql_num_rows($sql_run) == 1)
    {
        $row=  mysql_fetch_assoc($sql_run);
        $_SESSION['uid']=$row['id'];
        $_SESSION['username']=$row['username'];
           include 'postform.php';
        header("Location : login.php");
        exit();
    }
    else{
        echo 'invalid username and password';
        exit();
    }
    
}
    

?>

