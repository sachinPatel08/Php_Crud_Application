<?php
include 'db.php';
$user_name = $_SESSION['user_name'];

if( isset($_POST['pass']) && $_POST['pass'] === $_POST['rpass']){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $radio = $_POST['radio'];
    $sel = $_POST['sel'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $rpass = $_POST['rpass'];
    
    $sql = "INSERT INTO `project_1`.`reg_p1` (`id`, `fname`, `lname`, `age`, `radio`, `sel`, `uname`, `email`, `pass`, `rpass`, `date`) VALUES (NULL, '$fname', '$lname', '$age', '$radio', '$sel', '$uname', '$email', '$pass', '$rpass', current_timestamp());";
    
    
    
    
    $query = mysqli_query($con,$sql);
    
    
    if($query){
        ?>
        <script>
            alert("thanks for filling this form..");
        </script>
        <?php
        echo "good!";
        $_SESSION['user_name']=$user_name;
        header("Location:register.php");
    }else{
        echo "not";
    }


}else{
    ?>
    <script>
        alert("please enter the currect password");
    </script>
    <?php
    echo "please enter the currect password";
    header("Location:register.php");
}

?>

<!--  -->