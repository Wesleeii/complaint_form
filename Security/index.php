
<!DOCTYPE HTML>
<html>

<head>
	<title>Security</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet" type="text/css" />
	
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Student Items</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul>
  </div>
</nav>
	<h1>Student Items Form </h1>
	<div class="w3ls-login">
		
		<form action="landing.php" method="POST">
            <input type="hidden" name="submitted" value="true" />
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Firstname :</label>
				<input type="text" name="firstname" placeholder=" " required="" />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Lastname :</label>
				
				<input type="text" name="lastname" placeholder=" " required="" id="myInput" />
				<div class="agile_label">
					
				</div>
			</div>
			
			
			<div class="w3ls-login  w3l-sub">
				<input type="submit" value="Search Items">
                
			</div>
            
            
		</form>
	</div>
	
</body>

</html>