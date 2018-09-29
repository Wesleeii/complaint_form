<?php


if(isset($_POST['submitted'])) {
    
    include('connection.php');
    
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $mnumber=$_POST['matricnumber'];
    $course=$_POST['course'];
    $level=$_POST['level'];
    $item=$_POST['item'];
    $snumber=$_POST['serialnumber'];
    $description=$_POST['description'];
    
    $sqlinsert = "INSERT INTO studentitems (firstname, lastname, matricNumber, course, level, item, serialNumber, description) VALUES ('$fname', '$lname', '$mnumber', '$course', '$level', '$item', '$snumber', '$description')";
    
   
     $run = mysqli_query($conn,$sqlinsert);
    
}

?>
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
	<link href="style.css" rel='stylesheet' type='text/css' />
	
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
  </div>
</nav>
	<h1>Student Items Form </h1>
	<div class="w3ls-login">
		
		<form method="POST" action="register.php" >
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

			</div>
            <div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Matric Number :</label>
				<input type="text" name="matricnumber" placeholder=" " required="" />
			</div>
            <div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Course :</label>
				<input type="text" name="course" placeholder=" " required="" />
			</div>
            <div class="agile-field-txt">
				<label>
					<i class="fa fa-tasks" aria-hidden="true"></i> Level :</label>
				<input type="text" name="level" placeholder=" " required="" />
			</div>
            <div class="agile-field-txt">
				<label>
					<i class="fa fa-tag" aria-hidden="true"></i> Item :</label>
				<input type="text" name="item" placeholder=" " required="" />
			</div>
            <div class="agile-field-txt">
				<label>
					<i class="fa fa-lock" aria-hidden="true"></i> Serial Number :</label>
				<input type="text" name="serialnumber" placeholder=" " required="" />
			</div>
            <div class="agile-field-txt">
				<label>
					<i class="fa fa-pencil" aria-hidden="true"></i> Description :</label>
			<textarea type="text" name="description" placeholder=" " required="" style="margin: 0px; width: 455px; height: 117px;"></textarea>
			</div>
			
			
			<div class="w3ls-login  w3l-sub">
				<input type="submit" value="Register Item">
			</div>
            
		</form>

	</div>
	
</body>

</html>