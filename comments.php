<?php

funtion setComments($conn) {
  if (isset($_POST[commentSubmit])){
   $uid= $_POST['uid'];
     $date= $_POST['date'];
     $message= $_POST['messege'];
    $sql= "INSERT INTO comments (uid, date, message)VALUES('$uid', '$date', '$message')";
    $result= mysqli_query($conn,$sqli);
  }
  }
