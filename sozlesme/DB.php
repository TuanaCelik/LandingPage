<?php
       $conn = mysqli_connect('127.0.0.1:3307','root','','test');
	   /*$conn = mysqli_connect('localhost','root','','test');*/
	   
	if($conn->connect_errno > 0){
          die('Unable to connect to database [' . $db->connect_error . ']');
}   
	     
	   

?>