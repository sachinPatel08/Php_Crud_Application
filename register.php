<?php
include 'db.php';

$user_name=$_SESSION['user_name'];

if($user_name == true){
    $_SESSION['user_name']=$user_name;
  
}
else{
    header("Location:index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/form.css" >

</head>
<body>

<body class="main">

<h2>WELCOME,</h2>
<h3><?php echo $user_name;  ?></h3>
<br><hr>

<div class="fo">
    <h1> Registration Form</h1>
  
    <form method="POST" action="insert.php" autocomplete="off"  >
        <div class="col">
            <div class="minput">
                <input type="text" name="fname" id="fname" dir="auto" required  >
                <span class="bar"></span>
                <label>First Name</label>
            </div>
            <div class="minput">
                <input type="text" name="lname" id="lname" dir="auto" required>
                <span class="bar"></span>
                <label>Last Name</label>
            </div>
            <div class="minput">
                <input type="number" name="age" id="age" dir="auto" required>
                <span class="bar"></span>
                <label>Age</label>
            </div>
            <div class="control-group">
                <span class="sex">Sex :</span>
                <label class="control control--radio">Male
                    <input type="radio" value="male" name="radio" id="male" />
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
                <input type="text" name="uname" id="pseudo" dir="auto" required>

                <span class="bar"></span>
                <label>Username</label>
            </div>

            <div class="minput">
                <input type="email" name="email" id="email" dir="ltr" class="" required>
                <span class="bar"></span>
                <label>Email</label>
            </div>

            <div class="minput">
                <input type="password" id="password" name="pass" dir="auto" required>
                <span class="bar"></span>
                <label>Passwrod</label>
            </div>

            <div class="minput">
                <input type="password" id="passwordConf" name="rpass" required>
                <span class="bar"></span>
                <label>Retype Password</label>
            </div>
            <div class="control-group">

               
            </div>

                
                <input type="submit" id="send" value="Submit"  >
            </div>
        </div>
    </form>
</div>
  </div>  
<footer style="height:50px; width:100%; background-color:#1abc9c">

<h4>&#169; SACHIN PATEL</h4>
</footer>

</body>
</html>

<!-- INSERT INTO `reg_p1` (`id`, `fname`, `lname`, `age`, `radio`, `sel`, `uname`, `email`, `pass`, `rpass`, `date`) VALUES (NULL, 'SACHIN', 'PATEL', '19', 'male', 'india', 'sp123', 'sp@gmail.com', '111', '111', current_timestamp()); -->
