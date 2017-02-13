<?php
session_start();
require 'dbconnect.php';

?>
<?php
    
    
    date_default_timezone_set("Asia/Kolkata");;
    $datetime=date('Y-m-d H:i:s');
    $title=$_POST['title'];
    $descriiption=$_POST['description'];
    
$target_dir = "postimages/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}*/
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    //Here we will get the extension of the file being uploaded
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
    $query="INSERT INTO posts(title, description, date_time,uid,image)VALUES ('".$title."','".$descriiption."','".$datetime."',".$_SESSION['uid'].",'".$target_file."')";
    $query_run=  mysql_query($query);
    if($query_run===TRUE)
    {
        echo 'inserted';
       $select_query="select title,description,image from posts where uid=".$_SESSION['uid']." order by date_time desc";
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
    }
    else
        {
        echo 'no';
        header("Location : postForm.php");
        
        }


?>