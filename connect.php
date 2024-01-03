<?php
   $name1 = $_POST['name1'];
   $email1 = $_POST['email'];
   $mess1 = $_POST['mess1'];

   $conn = new mysqli('localhost','root','','portfolio');
   if($conn->connect_error){
      die('connection Failed: '.$conn->connect_error);
   }
   else{
      $stmt = $conn->prepare("insert into contact(Name,Email,Message)
      values($name1,$email1,$mess1)");
      $stmt -> execute();
      echo "Registration Sucessfully...";
      $stmt->close();
      $conn->close();
   }
?>