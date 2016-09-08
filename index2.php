<?php

require 'dbconnect.php';



?>



  <?php
 
if($_SERVER["REQUEST_METHOD"] == "POST")
  
   
{
 $ip=$_SERVER['REMOTE_ADDR'];

$hallticket_no=  strtoupper($_POST['hallticket_no']); 
$gender= $_POST['gender'];
$email_id=  strtolower($_POST['email_id']);
$phone_no=$_POST['phone_no'];
$dob=$_POST['yb']."-".$_POST['mb']."-".$_POST['db'];
$today = date("Y-m-d H:i:s");//20152112


if(!empty($hallticket_no)&&!empty($gender)&&!empty($email_id)&&!empty($phone_no)&&!empty($dob))
    {
    
    $Mvalidation="Select count(phone_no) from users where phone_no=".$phone_no;

$Mvalidationrun=  mysql_query($Mvalidation);
$Mvalidationvalue= mysql_result($Mvalidationrun,0);

if($Mvalidationvalue==0)
    {
    if(isset($_POST['register'])){
    $query="INSERT INTO `whatsapp`.`users` "
            . "(`id`, `hallticket_no`, `gender`, `email_id`, `phone_no`,`dob`,`ipaddress`,`registered_date`)"
            . " VALUES (NULL, '$hallticket_no', '$gender','$email_id','$phone_no','$dob','$ip','$today')";
    $query_run=  mysql_query($query);
  echo '<font color="blue" size="5">'. 'Thank you' . 
           'Your registion is done successfully.</font>'.'<br>';                                
    }

    }
    else{
  echo '<font color="red">'."This phone number already exists".'</font>';
}
    }
else {
        echo "PLEASE FILL ALL THE BLOCKS";    
    }
    }
?>