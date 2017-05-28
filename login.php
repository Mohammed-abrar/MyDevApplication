<?php include 'db.php';?>
<?php
if(isset($_POST["login-submit"]))
{			
	$sql="SELECT
			`email`,
			`passwd`
		 FROM
			`register`
		WHERE
			email ='".$_POST['email']."';";
			
	if($res = $mysqli->query($sql))
	{
		if ($res->num_rows > 0) {
    // output data of each row
    while($row = $res->fetch_assoc()) {
    
		
		if($row['email'] == $_POST['email'] && $row['passwd'] == $_POST['passwd'])
		{
			echo '<script> window.location.href = "type.html";';
			echo '</script>';
		}
		else
		{
			echo "<script> alert('invalid username or password');";
		echo 'window.location.href = "login.html";';
			echo '</script>';
		}
	}
	} 
}
}
?>