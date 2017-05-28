	<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style type="text/css">
        
			
        .container {
            background-color: #F2CD9E;
            border-radius: 10px;
            border: 1px solid #e5e5e5;
			text-align:center;
        }
        
        body {
            font-family: Roboto, sans-serif;
            font-weight: 400;
            margin-bottom: 150px;
            margin-top: 50px;
            padding-top: 0;
            background-color: #112b45;
        }
        
      
    </style>
</head>
<body>
   
         <?php 
            $table = $_GET['table'];
        ?>
        <div class="container">
		<br/>	
		 <header align="left">  <button class="btn btn-warning btn-xs"><a class="navbar-brand page-scroll" href="index.html">LOGOUT</a></button> </header>
            <h1 style="font-size:40px;color:black;font-weight:bold"> <span class="glyphicon glyphicon-envelope" style="color:#9DABB0" >&nbsp </span>COMPLAINT INBOX</h1>
			 
            <hr size=4 />
            <div class="col col-sm-2">
                <a href="viewcomplaint.php?table=<?php echo "$table"; ?>&status=success">
                    <button class="btn btn-success btn-lg" name="btnsubmit" id="btnsubmit" value="success">SUCCESS</button>
                </a>
            </div>
			<br/>
            <div class="col col-sm-2">
                <a href="viewcomplaint.php?table=<?php echo "$table"; ?>&status=accepted">
                    <button class="btn btn-primary btn-lg">ACCEPTED</button>
                </a>
            </div>
			<br/>
            <div class="col col-sm-2">
                <a href="viewcomplaint.php?table=<?php echo "$table"; ?>&status=processing">
                    <button class="btn btn-warning btn-lg">PROCESSING</button>
                </a>
            </div>
			<br/>
            <div class="col col-sm-2">
                <a href="viewcomplaint.php?table=<?php echo "$table"; ?>&status=rejected">
                    <button class="btn btn-danger btn-lg">REJECTED</button>
                </a>
            </div>
			<br/>
			
            <div class="col col-sm-2">
                <a href="viewcomplaint.php?table=<?php echo "$table"; ?>&status=unread">
                    <button class="btn btn-primary btn-lg">NOT READ</button>
                </a>
            </div>
			<br/>
            <div class="col col-sm-2">
                <a href="graph.php?table=<?php echo "$table"; ?>">
                    <button class="btn btn-info btn-lg">ANALYSIS</button>
					</a>	
            </div>

			<h1>
			<br/><br/>
			</h1>		
        </div>
</body>
</html>