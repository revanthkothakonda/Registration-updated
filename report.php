
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
    
       
      
    <div class="container">
<center>   <form action="" method="POST" name="myform">   
       Registered report:
        <select name="yyyy">
           <option value="">yyyy</option>
           <?php
          $year2=date('Y');
           echo  "<option>".$year2++."</option>"
           ?>
       </select>
       
       <select name="mm">
           <option value="">mm</option>
           <?php
           $mon2=1;
           while ($mon2<=12){
               echo "<option>".$mon2++."</option>";
           }
           ?>
       </select>
       
       <select name="dd">
           <option value="">dd</option>
           <?php
           $day2=1;
           while ($day2<=31)
           {
               echo "<option>".$day2++."</option>";
           }
                   ?>
       </select>
       
      
   <input type="submit" name="submit" value="Submit">    
   </form>
</center>
    </body>




<?php


require 'dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
    {
$date1=$_POST['yyyy']."-".$_POST['mm']."-".$_POST['dd'];


    $sql="SELECT * FROM  `users` where registered_date='".$date1."'";
    
$sql_run=  mysql_query($sql);
 echo "<center>"."<table class=table table-striped width=20%>";
 echo  "<tr bgcolor=red>"
         ."<th>  Sequence </th>"
         ."<th>  HALL TICKET NO </th>"
         . "<th><center>GENDER</center></th>"
         ."<th><center> EMAIL ID</center></th>"
         ."<th>MOBILE NO.</th>"
         ."<th>Date Of Birth</th>"
         ."<th>ipaddress</th>"
         ."<th>registered date</th>"
     ."</tr>";
while($row = mysql_fetch_array($sql_run)){
    
    echo "<tr class=info>";
    echo "<td>".$row['id'].'<br>'."</td>";
    echo "<td>".$row['hallticket_no'].'<br>'."</td>";
    echo "<td>".$row['gender'].'<br>'."</td>";
    echo "<td>".$row['email_id'].'<br>'."</td>";
    echo "<td>".$row['phone_no'].'<br>'."</td>";
    echo "<td>".$row['dob'].'<br>'."</td>";
    echo "<td>".$row['ipaddress'].'<br>'."</td>";
    $reg_date=$row['registered_date'];
    echo "<td>".$reg_date.'<br>'."</td>";
    echo  "<tr>";
       
}
echo "</table>"."</center>";

}  
?>


