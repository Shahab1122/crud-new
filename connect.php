<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "crudnew";
$conn= mysqli_connect ($server,$username,$password,$database);
if (!$conn){
    die("Error" . mysqli_connect_error());
    // echo 'sucessfuly';
}

// $conn = mysqli_connect('localhost', 'root', '', 'crudnew');
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";


?> 