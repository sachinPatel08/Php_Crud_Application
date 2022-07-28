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
    <title>UPDATE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="css/view.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
   
    <style>
       @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");
:root {
  --main-blue: #71b7e6;
  --main-purple: #9b59b6;
  --main-grey: #ccc;
  --sub-grey: #d9d9d9;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}


    </style>
</head>
<body>
    
<h2>WELCOME,</h2>
<h3><?php echo $user_name;  ?></h3>
<br><hr>


<div class="container" style="margin-top:10px;">
<table id="example" class="table table-striped table-bordered"  width="100%">

        <thead>
            <tr>
                <th class="th-sm">Id</th>
                <th class="th-sm">FName</th>
                <th class="th-sm">LName</th>
                <th class="th-sm">Age</th>
                <th class="th-sm">Gender</th>
                <th class="th-sm">Cuntry</th>
                <th class="th-sm">UName</th>
                <th class="th-sm">Email</th>
                
            </tr>
        </thead>
        <tbody>
<?php

$sql = "SELECT * FROM `project_1`.`reg_p1` WHERE 1";

$res = mysqli_query($con,$sql);

while($result =mysqli_fetch_array($res)){

?>

<tr>           
                <td> <?php  echo $result['id']   ?></td>
                <td> <?php  echo $result['fname']   ?></td>
                <td> <?php  echo $result['lname']   ?></td>
                <td> <?php  echo $result['age']   ?></td>
                <td> <?php  echo $result['radio']   ?></td>
                <td> <?php  echo $result['sel']   ?></td>
                <td> <?php  echo $result['uname']   ?></td>
                <td> <?php  echo $result['email']   ?></td>
               
                <td><a href="change.php?id=<?php echo $result['id']; ?> "><i class="fa fa-edit"></i></td>
     <td><a href="delet.php?id=<?php echo $result['id']; ?> "><i class="fa fa-trash-o"></i></a> </td>
            </tr>
        


<?php

}
?>

</tbody>
</table>

    
</body>
</html>