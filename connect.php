<?php
		 $a=$_POST['a'];
		 $b=$_POST['b'];
		 $c=$_POST['c'];
		 $d=$_POST['d'];
		  $e=$_POST['e'];
		  
		  $conn=new mysqli('localhost','root','','emp');
		  if($conn-> connect_error){
		  		echo "$conn->connect_error";
		  die("Connection Failed: ".$conn->connect_error);
		  }
		  else
		  {		  $stmt=$conn->prepare("insert into emptr(uname,pwd,fullname,mob,email) values( ?, ?, ?, ?, ?)");
					$stmt ->bind_param("sssss",$a, $b, $c, $d, $e);
					$execval = $stmt->execute();
				echo $execval;
		echo "successful";
		$stmt->close();
		$conn->close();
		}		
?>