
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src=js/bootstrap-datepicker.min.js"></script>
  <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
</head>

<form action="post_success.php" method="post" name="posts" enctype="multipart/form-data">
   <table>
      <tr>
        <td>Title:</td>
        <td><input type="text" name="title" class="form-control" id="ex1" placeholder="title"></td>
    </tr>
     <tr>
         
        <td>Description:</td>
        <td><textarea name="description" rows="3" cols="15" class="form-control" id="ex1" placeholder="whats on your mind."></textarea></td>
    </tr>
     <tr>
       <td>Upload photo:</td>
       <td><input type="file" name="image" id="image[]" multiple="multiple"></td>
    </tr>

    <TR><TD></TD>
        <TD><input type="submit" name="post" value='Update status'></TD>
    </TR>
    </table>
    
        </form>
<?php    

echo "You are logged in as ".$_SESSION['username']." <a href='logout.php'>Log out</a>";
  $select_query="select title,description,image from posts order by date_time desc";
       
       $mysql_run=  mysql_query($select_query);
       if(mysql_num_rows($mysql_run)!=0){
          while($user_posts= mysql_fetch_assoc($mysql_run)){
               echo $user_posts['title'];
             echo  $user_posts['description'];
             if(strlen($user_posts['image'])!=0){
             echo "<img src=./".$user_posts['image']." alt='Smiley face' height='42' width='42'>";
             }
             echo "<br>";
           }
       }

    

//   <tr>
      //  <td>Upload photo:</td>
       // <td><input type="file" name="image" max class="form-control"></td>
    //</tr>
    ?>

