<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/loginpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>

<div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="username" id="username"placeholder="Email or Phone" autocomplete="off">
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" >
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
        </form>
      </div>
    </div>    

</body>
</html>

<?php
include 'db.php';


if(isset($_POST['username']) && !empty($_POST['username']) && !empty($_POST['password']) ){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `project_1`.`login_p1` WHERE username = '$username' and password = '$password'"; 
   
    $result = mysqli_query($con,$sql);
    $total = mysqli_num_rows($result);
   
    if($total == 1){  
        ?>
        <script>
        alert("Login successful");

        </script>
        
        <?php
        $_SESSION['user_name']=$username;
        header("Location: first.php");
    
    }else{  
        ?>
        <script>
        alert(" Login failed. Invalid username or password.");  
        </script>
        
        <?php
       header("Location:index.php"); 
    }  

    
}

?>