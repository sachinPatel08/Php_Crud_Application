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
    <title>VIEW</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="css/view.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
   
</head>
<body>
    <div class="main">
    <h2>WELCOME,</h2>
<h3><?php echo $user_name;  ?></h3>
<br><hr>




<div class="container" style="margin-top:10px;">
<table id="example" class="table table-striped table-bordered"  >
        <thead>
            <tr>
                <th class="th-sm">FName</th>
                <th class="th-sm">LName</th>
                <th class="th-sm">Age</th>
                <th class="th-sm">Gender</th>
                <th class="th-sm">Cuntry</th>
                <th class="th-sm">UName</th>
                <th class="th-sm">Email</th>
                <th class="th-sm">Date</th>
            </tr>
        </thead>
        <tbody>
<?php

$sql = "SELECT * FROM `project_1`.`reg_p1` WHERE 1";

$res = mysqli_query($con,$sql);

while($result =mysqli_fetch_array($res)){

?>

<tr>
                <td> <?php  echo $result['fname']   ?></td>
                <td> <?php  echo $result['lname']   ?></td>
                <td> <?php  echo $result['age']   ?></td>
                <td> <?php  echo $result['radio']   ?></td>
                <td> <?php  echo $result['sel']   ?></td>
                <td> <?php  echo $result['uname']   ?></td>
                <td> <?php  echo $result['email']   ?></td>
                <td> <?php  echo $result['date']   ?></td>
            </tr>
        


<?php

}
?>

</tbody>
</table>

    </div>
   

<script>
$(document).ready(function () {
    $('#example').DataTable();
});
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
