<?php include 'db.php';?>
<?php
    $ID=$_GET['ID'];
	$email=$_GET['email'];
	$table=$_GET['table'];
	$status=$_GET['status'];
	
	$sql =  "UPDATE\n"
    . " $table\n"
    . "SET\n"
    . " `status` = \"$status\"\n"
    . "WHERE\n"
    . " email = \"$email\" AND ID=$ID";
	
	$res = $mysqli->query($sql);
	echo '<script> alert("status updated"); window.location.href ="admin.html";</script> ';
?>