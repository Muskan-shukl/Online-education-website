 <!-- <?php


// $conn = mysqli_connect("localhost","root","","testing")
// if(mysqli_connect_error()){
//     echo"<script>alert('cannot connect to the database');</script>"
//     exit();
// }
?>  -->

<?php
$_SERVER = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($_SERVER,$username,$password,$database);

// if(!$conn){
// //     echo "success";
// // }
// // else{
//     die("error" mysqli_connect_error());
// }

// ?>
