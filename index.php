

<html lang="en">
<TITLE> Whatsapp users </TITLE>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  

<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">

<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

</head>


<BODY>
    <font size="6" color="orange">ABOUT</font><br>
    <pre> <font color="blue" size="4">  HERE,
        Registration page Sample
</font> </pre>

     <?php
require 'index2.php';
$today = date("Y-m-d H:i:s");
?>
    
    
    <div class="container">
   <form action="" method="POST" name="myform" onSubmit="return ValidateForm(this)">   
     <table class="table table-striped" width=50%>
   
    
       
    <center><thead>
        <tr>
  <th><p class="bg-success">SCCE UPDATES REGISTRATION</p></th>
        </tr>
        </thead></center>
                                     <tr> <td>Hall ticket no.:</td>
        <TD><input class="form-control" id="ex1" type="text" placeholder="Hallticketno"  name="hallticket_no" onblur="htvalidation()"></TD><td id="htval"></td>
                </TR>
   
        <TD>gender:</TD>
                <TD><select name="gender">
                        <option>Gender</option>
                        <option>Male</option>
                        <option>FeMale</option>
            </select>
                </TD>
    </TR>
    <TR>
        <TD>Email id:</TD>
        <TD><input type="email" id="gen" name="email_id" class="form-control" id="ex1" placeholder="name@gmail.com"></TD>
    </TR>
    <TR>
        <TD>phone number:</TD>
        <TD><input type="text" name="phone_no" class="form-control" id="ex1" placeholder="mobile no" maxlength="10" onblur="phonevalidation()"></TD><td id="phval"></td>
    </TR>
     <tr>
        <td>Date of Birth:</td>
        <td>
            
            <select name="db">
                <option value="">dd</option>
                <?php
                $day=1;
                while($day<=31)
                {
                 echo "<option>".$day++."</option>";   
                }
                
                
                ?>
            </select>
            
            
            
            
            <select name="mb">
                <option value="">mm</option>
                <?php
                $mon=1;
                while($mon<=12)
                {
                 echo "<option>".$mon++."</option>";   
                }
                
                
                ?>
            </select>
            
            
            <select name="yb">
                <option value="">yyyy</option>
                <?php
                $year=date('Y')-19;
                $lyear=date('Y')-30;
                
                
                while($year>=$lyear)
                {
                 echo "<option>".$year--."</option>";   
                }
                
                
                ?>
            </select>
            
            
            
            
        </td>
    </tr>
    <tr>
        <td>Username:</td>
        <td><input type='text' name='username' class='form-control' id='ex1' placeholder='username'></td>
    </tr>
     <tr>
        <td>Password:</td>
        <td><input type='password' name='password' class='form-control' id='ex1' placeholder='password'></td>
    </tr>
    <TR><TD></TD>
        <TD><input type="submit" name="register" value="register"></TD></TR>
    
</form>
    </TABLE>
</DIV>
   
    
    <script>
        function phonevalidation(){
            var a = myform.phone_no.value;
   if(a=="")
   {
document.getElementById("phval").innerHTML="please Enter the Contact Number";
myform.phone_no.focus();
return false;
   }
if(isNaN(a))
  {
document.getElementById("phval").innerHTML="Enter the valid Mobile Number(Like : 9566137117)";
myform.phone_no.focus();
return false;
  }
if((a.length != 10))
  {
document.getElementById("phval").innerHTML=" Your Mobile Number must be 10 digit number";
myform.phone_no.focus();
return false;
  }
        }
        
        
        
        
        function htvalidation()
{
if(myform.hallticket_no.value=="")
    {
        document.getElementById("htval").innerHTML="Name of the HallticketNo cannot Be Blank Please e Enter Name  Ex 10N01A0501 ";
        myform.hallticket_no.focus();
        return false;
    }
if(myform.hallticket_no.value.length!=10)
    {
        document.getElementById("htval").innerHTML="Please Enter Correct HallticketNo";
        myform.hallticket_no.focus();
        return false
    }
    if(myform.hallticket_no.value.charAt(3)=='o'|| Reg.HallticketNo.value.charAt(3)=='O')
    {
        document.getElementById("htval").innerHTML="Enter zero value after N ";
        myform.hallticket_no.focus();
        return false;
   
    }
    }



      </script>
    
    
    
</BODY>
</html>





 
   