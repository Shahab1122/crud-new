<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">

    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">fname</th>
      <th scope="col">lname</th>
      <th scope="col">city</th>
      <th scope="col">Gender</th>
      <th scope="col">Value</th>
      <th scope="col">image</th>
      <th scope="col">file</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "select * from `profile`";
    $result = mysqli_query($conn,$sql);
    if($result)
    while($row=mysqli_fetch_assoc($result)){
    $id= $row ['id'];
    $fname = $row['fname'];
    $lname = $row ['lname'];
    $city = $row ['city'];
    $radio = $row ['radio'];
    $file_image = $row ['file_image'];
    $file=$row['file'];
    echo '  <tr>
    <th scope="row">'.$id.'</th>
    <td>'.$fname.'</td>
    <td>'.$lname.'</td>
    <td>'.$city.'</td>
    <td>'.$radio.'</td>
    <td>'.$file_image.'</td>
    <td>'.$file.'</td>


    <td>
  <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
  <button  class="btn btn-danger"><a href="Delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
</td>
  </tr>';
    }   
  ?>


    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
   
  
  </tbody>
</table>
   
    </div>
    
</body>
</html>