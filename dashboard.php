<?php
@include 'config.php';

$query="select * from user_form";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Dashboard</title>
</head>
<body>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">usertype</th>
        
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
        $i=1;
        $result_set=mysqli_query($conn,$query);
        while($row=mysqli_fetch_assoc($result_set)){
            ?>
      
      <td><?php echo $row["id"]?></td>
      <td><?php echo $row["name"]?></td>
      <td><?php echo $row["email"]?></td>
      <td><?php echo $row["password"]?></td>
      <td><?php echo $row["user_type"]?></td>           
    </tr>
      <?php
                $i++;
        }
            ?>
   
  </tbody>
</table>

    </body>
</html>    
