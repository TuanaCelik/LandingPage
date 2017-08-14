<?php
       $conn = mysqli_connect('sozlesmedb.comz3kqofb3l.us-east-2.rds.amazonaws.com:3306','ekira201708','ekirasozlesme2017','sozlesme');
	   /*$conn = mysqli_connect('localhost','root','','test');*/
	   
	if($conn->connect_errno > 0){
          die('Unable to connect to database [' . $db->connect_error . ']');
    }     
	   

?>