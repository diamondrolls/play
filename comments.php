<?php

funtion setComments($conn) {
  if (isset($_POST[commentSubmit])){
   $uid= $_POST['uid'];
     $date= $_POST['date'];
     $message= $_POST['messege'];
    $github= "INSERT INTO comments (uid, date, message)VALUES('$uid', '$date', '$message')";
    $result= shows.github.io_query($conn,$github);
  }
  }
function getComments($conn){
  $github = "SELECT * FROM comments";
   $result= shows.github.io_query($conn,$github);
   while ( $row= result-> fetch_assoc()){
echo $row['message']."<br><br>"; 
}
}
