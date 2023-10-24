 <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $showAlert = false;

 @include 'connection.php';

  $Fname =$_POST['myName'];
  $Lname = $_POST['Last_name'];
  $email =$_POST['UserEmail'];
  $Mobileno = $_POST['mobile_no'];
  $Dob = $_POST['MyDate'];
  $Password = $_POST['Password'];
  $cPassword = $_POST['cPassword'];
  $exists = false;
  if(($Password == $cPassword) && $exists == false){
    $sql = "INSERT INTO `users` (`myName`, `Last_name`, `UserEmail`, `mobile_no`, `MyDate`, `Password`, `cPassword`) VALUES ('$Fname', '$Lname' , '$email' , '$Mobileno' , '$Dob' , '$Password' , '$cPassword')";
    $result = mysqli_query($conn, $sql);
    if($result){
      //$showAlert =  true;
      echo "<script>alert('data inserted into database:')</script>";
    
    }else{
      echo "<script>alert('Login failed')</script>";
    }

  }



}





// @include 'connection.php';


// if(isset($_POST['submit'])){
//   $Fname = mysqli_real_escape_string($conn,$_POST['myName']);
//   $Lname = mysqli_real_escape_string($conn,$_POST['Last_name']);
//   $email = mysqli_real_escape_string($conn,$_POST['UserEmail']);
//   $Mobileno =mysqli_real_escape_string ($_POST['mobile_no']);
//   $Dob = mysqli_real_escape_string($_POST['MyDate']);
//   $pass = md5($_POST['Password']);
//   $cpass = md5($_POST['cPassword']);

//   $select = "SELECT * FROM register_user WHERE UserEmail = '$email' && Password = '$pass' ";
//   $result = mysqli_query($conn, $select);

//   if(myaqli_run_rows($result) >0){
//     $error[] = "user already exist! ";

  
//   }else{
//     if($pass != $cpass){
//       $error = 'password not matched!';
//     }else{
//       $insert = "INSERT INTO register_user(First Name,Last Name,Email id,	Mobile no.,	Date Of Birth,	Password,	Confirm Password) VALUES('$Fname','$Lname','$email',$Mobileno','$pass',$cpass')";
//       mysqli_query($conn,$insert);
//       header('location:login.php');
//     }
//   }
  
// };



// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration_form</title>
    <link rel="stylesheet" href="mystyle.css">
    
</head>

<body>
   
    
<div class="form_container">

<form action="" method="post">
    <div class="login">

   <h1>REGISTER NOW</h1>
     
  //<?php
    // if(isset($result)){
      // foreach($error as $error){
        // echo '<span class="error-msg">'.$error.'</span>';
      // };
    // }; 

// ?>

    <div class="name">
      First Name: <input type="F.name" name= "myName">
    </div>
    <br>
    <div class="name">
       Last Name: <input type="L.name" name="Last_name">
    </div>
    <br>
     <div class="name">
    Email id:<input type="email" name="UserEmail" placeholder="enter your email">
    </div>
     <br>
    <div class="name">
     Mobile no.: <input type="Number" name="mobile_no">
    </div>
    <br>
   
     <div class="name">
     Date Of Birth: <input type="date" name="MyDate" id="">
     </div>
     <br>
      
     
     <div class="name">
     Password: <input type="password" name="Password" placeholder="enter your password">
     </div>
     
     <br>
     <div class="name">
     Password: <input type="password" name="cPassword" placeholder="confirm your password">
     </div>
     
     <br>
     
     <div class="btn">
     <button type="submit" name="submit">REGISTER NOW</button>
     </div>
     <br> 
     <div class="btn">
       <button type="reset">Reset</button>

     </div>
     <p>alredy have an account? <a href="login.php"> login now</a></p>
</div>

</form>
</div>
</body>
</html>