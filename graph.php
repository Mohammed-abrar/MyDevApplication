<!DOCTYPE html>
<?php
function status($status)
{
	include 'db.php';
	$table = $_GET['table'];
	$sql = "SELECT COUNT(*) as count \n"
    . "FROM\n"
    . " $table\n"
    . "WHERE STATUS\n"
    . " = \"$status\"";
	
	$res = $mysqli->query($sql);
	
	while($row = $res->fetch_assoc()) {
		$count = $row['count'];
	}
	
	return $count;
}
?>
<?php
	
	$accepted = status("accepted");
	$rejected = status("rejected");
	$processing = status("processing");
	$success = status("success");
	$unread = status("unread");
	
	$table = $_GET['table'];
		include 'db.php';
	$sql = "SELECT COUNT(*) as count \n"
    . "FROM\n"
    . " $table\n";
	
	$res = $mysqli->query($sql);
	
	while($row = $res->fetch_assoc()) {
		$total = $row['count'];
	}
	
?>

<html>
<head>
  
  
  <title>Complaint Analysis</title>
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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
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
  

	 padding-top: 30px;
            background-color: #FFD1AB;
	
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
   <header align="left">  <button class="btn btn-warning btn-xs"><a class="navbar-brand page-scroll" href="index.html">LOGOUT</a></button> </header>
<center>
  <canvas id="piechart" width="400" height="400"></canvas></center>
  
  <script type="text/javascript">
    // Get the context of the canvas element we want to select
    var ctx = document.getElementById("piechart").getContext("2d");
var data = {
    labels: ["Recived","Unread","Accepted", "Rejected", "Processing", "Success"],
    datasets: [
        {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,0.8)",
            highlightFill: "rgba(151,187,205,0.75)",
            highlightStroke: "rgba(151,187,205,1)",
            data: [<?php echo "$total" ?>,<?php echo "$unread" ?>,<?php echo "$accepted" ?>, <?php echo "$rejected" ?>,<?php echo "$processing" ?>, <?php echo "$success" ?>]
        }
        
    ]
};
    
    var options = {
      animateScale: true,
	  scaleStepWidth: 20,
	  scaleGridLineWidth : 1
	  
    };

var myBarChart = new Chart(ctx).Bar(data, options);
  </script>
  
</body>
</html>