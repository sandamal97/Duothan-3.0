<?php

   $connection = mysqli_connect('localhost','root','','mydb');

   if(mysqli_connect_errno()){
      die('Database Connection failed'.mysqli_connect_error());
   }
 
?>


<?php
      $name = $_POST['name'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $number = $_POST['number'];
      $lnumber = $_POST['lnumber'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];
      
      $request = " insert into user values('{$name}','{$email}','{$address},'{$number}','{$lnumber}','{$password}','{$cpassword}') ";
      $result=mysqli_query($connection, $request);

      
if($result){
  
   header("location: Signin.html");
}

//header("location: index.html");
?>





   
 



