<?php include 'db.php';?>
<?php
 
	$sql="INSERT
			INTO
			  `other_issue`(
				`issuetype`,
				`complainername`,
				`contact`,
				`email`,
				`address`,
				`description`,
				`otherdetails`,
				`status`
			  )
			VALUES(
				'".$_POST['issuetype']."',
				'".$_POST['complainername']."',
				'".$_POST['contact']."',
				'".$_POST['email']."',
				'".$_POST['address']."',
				'".$_POST['description']."',
				'".$_POST['otherdetails']."',
				'unread'
);";
		$target_dir = "others/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {
				   $uploadOk = 1;
				}
				
				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 50000000) {
						echo '<script> alert("Sorry, your file is too large.");';
							echo 'window.history.back();';
							echo '</script>';
					$uploadOk = 0;
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
						echo '<script> alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");';
							echo 'window.history.back();';
							echo '</script>';
						echo "";
						$uploadOk = 0;
					}
					
				else if ($uploadOk == 0) {				// Check if $uploadOk is set to 0 by an error
					echo '<script> alert("Sorry, your file was not uploaded.");';
							echo 'window.history.back();';
							echo '</script>';
			
				// if everything is ok, try to upload file
				} else {
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
						
						if($mysqli->query($sql))
						{
							 $id = $mysqli->insert_id;
							 rename ("$target_file", "others/$id");
							echo '<script> alert("complaint is registered");';
							echo 'window.location.href = "type.html";';
							echo '</script>';
						}
						
						
					} else {
						
						echo '<script> alert("Sorry, there was an error uploading your file register once again.");';
						echo 'window.location.href = "type.html";';
						echo '</script>';
					}
				}
	
?>