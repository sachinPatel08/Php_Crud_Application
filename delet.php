<?php

include 'db.php';

$id= $_GET['id'];
$user_name=$_SESSION['user_name'];
echo $user_name;

$sql = "DELETE FROM `project_1`.`reg_p1` WHERE id=$id";

$query = mysqli_query($con, $sql);

if($query){
    $_SESSION['user_name']=$user_name;
    header("Location:update.php");
}else{

    echo "please enter the currect password";
    header("Location:update.php");
}
?>