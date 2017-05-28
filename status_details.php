<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This project for online complaint box">
    <meta name="author" content="hanumanth.k.budihal">

    <title>Complaint Box</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style type="text/css">
input[readonly] {
  background-color: white !important;
  cursor: text !important;
}

 input[type=radio] {
    width: 1.8em;
    height: 1.8em;
    }
	
		input[type=text] {
    height: 3em;
	border:2px solid #dfdfdf;
	 border-radius: 10px;
	 font-size:20px
    }
	input[type=email] {
    height: 3em;
	border:2px solid #dfdfdf;
	 border-radius: 10px;
	 font-size:20px
    }
    .well {
	background-color:#BCBCBC;
	 
	}
	   .form-control:focus {
	border-color: #fddbab;
	outline: 0; 
	-webkit-box-shadow: inset 0;
		  box-shadow: inset 0;
	background-color: #E9F1F2;
}
  
    td>section>h4{
        text-align: left;
    }
    .jumbotron, .container-fluid .jumbotron{
        background-color:#BCBCBC;
        border-radius: 0;
        text-align: left;
    }
	 .container {
  background-color: #F2CD9E;
            border-radius: 10px;
            border: 1px solid #e5e5e5;
			text-align:center;
	   width:70%;
	 }
    .intro-hr , .form-hr{
        width:1080px;
        height:2px;
        background-color: #FF974F;
        margin-left:0px;
        padding-left: 0;
    }
    .form-control{
        border:0px;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
        -webkit-box-shadow: none ;
        -moz-box-shadow: none ;
        box-shadow: none ;
        text-align:left;
    }
    textarea:focus,
    input[type="radio"]:focus,
    input[type="radio"]:hover,
    input[type="text"]:focus,
    input[type="textbox"]:focus,
    input[type="password"]:focus,
    input[type="datetime"]:focus,
    input[type="datetime-local"]:focus,
    input[type="date"]:focus,
    input[type="month"]:focus,
    input[type="time"]:focus,
    input[type="week"]:focus,
    input[type="number"]:focus,
    input[type="email"]:focus,
    input[type="url"]:focus,
    input[type="search"]:focus,
    input[type="tel"]:focus,
    input[type="color"]:focus,
    .uneditable-input:focus,
    select:focus,
    select:hover,
    option:focus,
    option:hover{
        border-bottom: 2px solid #E9F1F2;
        -webkit-box-shadow: 0 2px 2px -6px grey;
        -moz-box-shadow: 0 2px 2px -6px grey;
        box-shadow: 0px 11px 6px 6px grey;
        outline: 0 none;
        margin-right:0px;
        text-align: left;
    }
    h5,h4,h2{
        text-align: left;
    }
    .ng-invalid.ng-dirty.ng-touched{
        background-color: lightpink;
    }
body {
    
    font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 400;
    margin-bottom: 150px;
    margin-top: 50px;
  
	background-color:red;
	 padding-top: 30px;
            background-color: #112b45;
	
}
h1,
h2,
h3,
h5,
h6 {
    font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 700;
}
h4{
font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 700;
	font-size:20px;
}

.topnav {
    font-size: 20px; 
}
.intro-header {
    padding-top: 20px; 
    padding-bottom: 50px;
    text-align: center;
    color:black;
    
    background-size: cover;
}
 textarea {
    width: 300px;
    height: 300px;
    border-radius: 10px;
    border: 1px solid #000;
}
</style>
<body>
<div class="container">	
    <!-- Navigation -->
    <header align="left">  <button class="btn btn-warning btn-xs"><a class="navbar-brand page-scroll" href="index.html">LOGOUT</a></button> </header>


<?php
			if(isset($_POST['submit']))
			{
				$email = $_POST['email'];
								$sql = "SELECT\n"
									. " * \n"								
									. "FROM\n"
									. " `public_issue`"
									. "WHERE\n"
									. " email = \"$email\"";
									
									 
							
							$res = $mysqli->query($sql);	
						?>
						
						

		
		
					   <div class="table-responsive">
						<table class="table" stlye="border: 1px solid black;">
							
	 
                      <tr> 
						 <div class="row">
								
				               <th>  
								 <div class="col-sm-2">
									<div class="form-group">
										<label for="dob" class="control-label col-sm-3"><h4>COMPLAINT ID:<span style="color:red;"> *</span></h4></label>										
									</div>
								 </div>
							  </th>
							<th>  
								<div class="col-sm-2">
									<div class="form-group">
										<label for="dob" class="control-label col-sm-3"><h4>ISSUE TYPE: <span style="color:red;"> *</span></h4></label>
										
												
										</div>
								</div>
							</th>
							<th>
									<div class="col-sm-2">
									<div class="form-group">
										<label for="dob" class="control-label col-sm-3"><h4>NAME: <span style="color:red;"> *</span></h4></label>
										
											
										</div>
									</div>
																									
	                 <th>         
						<div class="col-sm-2">
						  <div class="form-group">
								<label for="email" class="control-label col-sm-3"><h4>COMPLAINT TITLE: <span style="color:red">*</span></h4></label>
						  </div> 
						</div>
					</th>   
									
					<th> 
						<div class="col-sm-2">
						  <div class="form-group">
							<label for="address" class="control-label col-sm-3"><h4>STATUS:</h4></label>								 
						  </div>					
						</div>
					</th>
								
								
				  </div>
				</tr>
						
	
						
				<tr><?php while($row = $res->fetch_assoc()) { ?>
					<div class="row">
								
				           <td> 
						       <div class="col-sm-2">
									<div class="form-group">									
										<h4> PI<?php echo "$row[ID]";?> </h4>
									</div>
								</div>
							</td>
							<td>
				                <div class="col-sm-2">
									<div class="form-group">										
										<h4>Public Issue</h4>
									</div>
								</div>
							</td>
							<td>
									<div class="col-sm-2">
									<div class="form-group">
										
										
											<h4> <?php echo "$row[complainername]";?>  </h4>
										</div>
									</div>
							</td>		
							<td>	
									
									<div class="col-sm-2">
										<div class="form-group">
										   <h4> <?php echo "$row[title]";?>  </h4>
									</div>
									 </div>
							</td>
									 
								<td>	<div class="col-sm-2">
									<div class="form-group">
										
										
										  <h4> <?php echo "$row[status]";?> </h4>
										</div>
											
												
									</div>
								</td>
								</tr>
							</div>
						
					
								
								
						<?php } ?>
							 
					
                         
						 <?php
								$sql = "SELECT\n"
									. " * \n"
									. "FROM\n"
									. " `missing_cases`"
									. "WHERE\n"
									. " email = \"$email\"";
									$res = $mysqli->query($sql)	
						?>
						
						
						
						<?php while($row = $res->fetch_assoc()) { ?>
						   
						 
							<div class="row">
								
							<tr>	<td><div class="col-sm-2">
									<div class="form-group">
										
												<h4>MC<?php echo "$row[ID]";?> </h4>
										</div>
									</div>
									</td>
									<td>
									<div class="col-sm-2">
										<div class="form-group">
										
									
                                      <h4> Missing Cases </h4>
										</div>
									</div>
									</td>
									<td>
									<div class="col-sm-2">					
									<div class="form-group">
										<h4> <?php echo "$row[complainer]";?> </h4>
										
											
										</div>
									</div>

									
								</td>
<td>								
								<td>	
	                              <div class="col-sm-2">
								   <div class="form-group">
										
										
										   <h4> <?php echo "$row[missingperson]";?>  </h4>
										 </div>
									</div>
								</td>
								<td>
									 <div class="col-sm-2">
									<div class="form-group">
										
										
										  <h4> <?php echo "$row[status]";?> </h4>
										</div>
									</div>
									
								</td>
								</tr>
							</div>
							
							
	
		 	<?php } ?>
							 
							
							
							
	
							
							
							 <?php
							$sql = "SELECT\n"
									. " * \n"									
									. "FROM\n"
									. " `other_issue`"
									. "WHERE\n"
									. " email = \"$email\"";
									$res = $mysqli->query($sql)	
						?>
						
				

						<?php while($row = $res->fetch_assoc()) { ?>	
						   
						
							<div class="row">
								
						<tr>	<td>	<div class="col-sm-2">
									<div class="form-group">
						
												<h4>OI<?php echo"$row[ID]";?> </h4>
										</div>
									</div>
									</td>
									<td>
							<div class="col-sm-2">
									<div class="form-group">
										
										
												<h4>Other Issuse </h4>
										</div> 
									</div>
									</td>
									<td>
									<div class="col-sm-2">
									<div class="form-group">
									<h4> <?php echo"$row[complainername]";?>  </h4>
										</div>
									</div>
									</td>
									<td>
									<div class="col-sm-2">
									<div class="form-group">
										
										
											<h4>other Issues</h4>
										</div>
									</div>
</td>
									
								<td>
								<div class="col-sm-2">
									<div class="form-group">
										
										
										  <h4> <?php echo "$row[status]";?> </h4>
										</div>
									</div>
                 
				 
								</td>
								</tr>

							</div>
							
								
					
							
						
						<?php } } 	?>
						</table>
						</div>
					
		</div>				
				
         
</body>
</html>