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
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="css/main.css">
   <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/vnav.css">
   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <link rel="stylesheet" href="css/iframe.css">
 
</head>
<body>
 
<div class="main">
<nav class="navbar  ngbar">
  <div class="container-fluid">
    <a class="navbar-brand">Dashboard</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- vartical navbar -->
<div class="hamburger">
    <img class="ham" src="img/h1 (1).png" alt="" width="29px">
    <img   class="cross" src="img/h2.png" alt="" width="29px">
</div>
<nav class="vnav">
  <ul id="menu">
    <div>
   
    <a id="li1" href="#"> Welcome.. <br>   <?php echo $user_name ?></a><br><br><br><br>
    </div>
   
    <li><a href="register.php" target="if1">Register</a></li>
    <li><a href="view.php" target="if1">View</a></li>
    <li><a href="update.php" target="if1">Update</a></li>
    <li><a href="info.php" target="if1">Info</a></li>
    <a id="li" href="logout.php">LOGOUT</a>
  </ul>

  
</nav>

<div class="frame">

<iframe class="if1" src="register.php" name="if1"> </iframe>

</div>
<!-- mobile navbar -->
<div class="navigation sidebarGo">
<ul >
    <li><a href="register.php" target="if1">Register</a></li>
    <li><a href="view.php" target="if1">View</a></li>
    <li><a href=""# target="if1">Update</a></li>
    <li><a href="#" target="if1">Update</a></li>
    <li><a href="#">Info</a></li>
    <a id="li" href="logout.php">LOGOUT</a>
  </ul>

</div>

</div>
<script>
document.querySelector('.cross').style.display = 'none';
document.querySelector('.hamburger').addEventListener("click",()=>{

document.querySelector('.navigation').classList.toggle('sidebarGo');
if(document.querySelector('.navigation').classList.contains('sidebarGo')){

    document.querySelector('.ham').style.display = 'inline'
    document.querySelector('.cross').style.display = 'none'

}
else{
    document.querySelector('.cross').style.display = 'inline'
    document.querySelector('.ham').style.display = 'none'   
}


})


</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>


