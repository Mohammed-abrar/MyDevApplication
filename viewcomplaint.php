<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="hanumanth.k.budihal">
  <title>Admin page</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
    rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

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
</head>
<body>
                        <?php include 'db.php';?>
						<?php
							$table = $_GET['table'];
                            $status = $_GET['status'];
                         ?>
                   <div class="container">    
 <br/>	
		 <header align="left">  <button class="btn btn-warning btn-xs"><a class="navbar-brand page-scroll" href="index.html">LOGOUT</a></button> </header>				   
  				   <h2><?php echo "$status"; ?> </h2>  </div>
					<div class="container">
					  <div class="table-responsive">
							<table class="table" border="2.0">
							
                        <tr>
							<td class="col-lg-2"><h4><label >COMPLAINT ID</label></h4></td>
                            <td class="col-lg-2"><h4><label >ISSUE TYPE</label></h4></td>
							<td class="col-lg-3"><h4><label >COMPLAINTER EMAIL</label></h4></td>
							<td class="col-lg-2"><h4><label>READ THE COMPLAINT</label></h4></td>
                           
                        </tr>
						
                        
                         <?php
								$sql = "SELECT * from $table where status =\"$status\"";						
							$res = $mysqli->query($sql);
							while($row = $res->fetch_assoc()) {
						?>
						
						<?php if($table == 'public_issue') 
						{?>		
						   <tr>
							<td class="col-lg-2" align="center"><h4><?php echo "$row[ID]"; ?></h4> </td>
                             <td class="col-lg-2" align="center"><h4>Public Issue</h4>  </td>
							 <td class="col-lg-2" align="center"><h4></h4><?php echo "$row[email]"; ?></td>				
							 <td class="col-lg-2" align="center"> <a href='display.php?ID=<?php echo "$row[ID]";?>&email=<?php echo "$row[email]"; ?>&table=public_issue' ><input class="btn btn-primary" type="button"  value="READ"></a></td> 	
							 </tr>
						<?php } ?>
							 
							<?php if($table == 'missing_cases') 
						{?>		
						   <tr>
							<td class="col-lg-2" align="center"><h4><?php echo "$row[ID]"; ?> </h4></td>
                             <td class="col-lg-2" align="center"><h4>Missing Cases</h4></td>
							 <td class="col-lg-2" align="center"><h4><?php echo "$row[email]"; ?></h4></td>				
							 <td class="col-lg-2" align="center"> <a href='display.php?ID=<?php echo "$row[ID]";?>&email=<?php echo "$row[email]"; ?>&table=public_issue' ><input class="btn btn-primary" type="button"  value="READ"></a></td> 	
							 </tr>
						<?php } ?>
                       
						<?php if($table == 'other_issue') 
						{?>		
						   <tr>
							 <td class="col-lg-2" align="center"><h4><?php echo "$row[ID]"; ?> </h4></td>
                             <td class="col-lg-2" align="center"><h4>Other Issue</h4> </td>
							 <td class="col-lg-2" align="center"><h4><?php echo "$row[email]"; ?></h4></td>
							 <td class="col-lg-2" align="center"> <a href='display.php?email=<?php echo "$row[email]"; ?>&table=other_issue' ><input class="btn btn-primary" type="button"  value="READ"></a></td> 	
							</tr>
						<?php } ?>
						 
					<?php } ?>
				
                    </table>
						</div>
  </div>
  </body>
  </html>