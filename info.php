<?php
include 'db.php';
$user_name=$_SESSION['user_name'];

if($user_name==true){
    $_SESSION['user_name']=$user_name;
    
  }else{
      header("Location:index.php");
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFO</title>
</head>
<body>
<h2>&#169; SACHIN PATEL</h2>    

</body>
</html>