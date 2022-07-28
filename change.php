<?php

include 'db.php';

$user_name=$_SESSION['user_name'];
echo $user_name;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/form.css" >
</head>
<body>
<div class="fo">

    <form method="POST" action="" >

    <?php


$id = $_GET['id'] ;
$sql = "SELECT * FROM `project_1`.`reg_p1` WHERE id=$id ";
$res = mysqli_query($con,$sql);
$result =mysqli_fetch_array($res);


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
    
    // $sql = "INSERT INTO `project_1`.`reg_p1` (`id`, `fname`, `lname`, `age`, `radio`, `sel`, `uname`, `email`, `pass`, `rpass`, `date`) VALUES (NULL, '$fname', '$lname', '$age', '$radio', '$sel', '$uname', '$email', '$pass', '$rpass', current_timestamp());";
    
    $updatesql="UPDATE `project_1`.`reg_p1` SET`fname`='$fname',`lname`='$lname',`age`='$age',`radio`='$radio',`sel`='$sel',`uname`='$uname',`email`='$email',`pass`='$pass',`rpass`='$rpass',`date`=current_timestamp() WHERE `id`='$id' ";
    
    
    $query = mysqli_query($con,$updatesql);
    
    
    if($query){
        ?>
        <script>
            alert("thanks for filling this form..");
        </script>
        <?php
        echo "good!";
        $_SESSION['user_name']=$user_name;
        header("Location:update.php");
    }else{
        echo "not";
    }


}

?>
    



        <div class="col">
            <div class="minput">
                <input type="text" value="<?php echo $result['fname'] ?>"  name="fname" id="fname" dir="auto" required>
                <span class="bar"></span>
                <label>First Name</label>
            </div>
            <div class="minput">
                <input type="text" value="<?php echo $result['lname'] ?>" name="lname" id="lname" dir="auto" required>
                <span class="bar"></span>
                <label>Last Name</label>
            </div>
            <div class="minput">
                <input type="number" value="<?php echo $result['age'] ?>" name="age" id="age" dir="auto" required>
                <span class="bar"></span>
                <label>Age</label>
            </div>
            <div class="control-group">
                <span class="sex">Sex :</span>
                <label class="control control--radio">Male
                    <input type="radio"  value="male" name="radio" id="male" />
                    <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">Female
                    <input type="radio" value="female" name="radio" id="femelle" />
                    <div class="control__indicator"></div>
                </label>
            </div>
            <div class="minput">
                <div class="select">
                    <select id="pays" name="sel">
                        <option value="">-- Country --</option>
                        <option value="India">INDIA</option>
                        <option value="algeria">Algeria</option>
                        <option value="tunisia">Tunisia</option>
                    </select>
                    <div class="select__arrow"></div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="minput">
                <input type="text" value="<?php echo $result['uname'] ?>" name="uname" id="pseudo" dir="auto" required>

                <span class="bar"></span>
                <label>Username</label>
            </div>

            <div class="minput">
                <input type="email" name="email" value="<?php echo $result['email'] ?>" id="email" dir="ltr" class="" required>
                <span class="bar"></span>
                <label>Email</label>
            </div>

            <div class="minput">
                <input type="password" id="password" value="<?php echo $result['pass'] ?>" name="pass" dir="auto" required>
                <span class="bar"></span>
                <label>Passwrod</label>
            </div>

            <div class="minput">
                <input type="password" id="passwordConf" value="<?php echo $result['rpass'] ?>" name="rpass" required>
                <span class="bar"></span>
                <label>Retype Password</label>
            </div>
            <div class="control-group">

                <label class="control control--checkbox">Join Our Newsletter & Marketing Communication.
                    <input type="checkbox" checked/>
                    <div class="control__indicator"></div>
                </label>
            </div>

                
                <input type="submit" id="send" value="Submit"  >
            </div>
        </div>
    </form>
</div>
  </div>  
</body>
</html>