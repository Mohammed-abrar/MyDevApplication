<?php include 'db.php';?>
<?php
 
 
 $sql="INSERT INTO `register`
			(`username`, 
			 `email`, 
			 `passwd`) 
			VALUES(
			'".$_POST['username']."',
			'".$_POST['email']."',
			'".$_POST['passwd']."'
	)";
	
	if($_POST['passwd']!= $_POST['cpasswd'])
	{
		echo '<script> alert("password miss match"); window.location.href = "logsign.html"; </script>';
	}	
	else
	{
		try{
			$mysqli->query($sql);	
			echo '<script> alert("sucessfully registered");';
		echo 'window.location.href = "login.html";';
		echo '</script>';		
		}
	catch(Exception $e) {
		echo '<script> alert("email-id is already exists");';
			echo 'window.location.href = "logsign.html";';
		echo '</script>';
  echo 'Message: ' .$e->getMessage();
}
	}
?>