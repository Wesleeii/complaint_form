<?php
  require_once('connection.php');

   
if (isset($_POST['submitted'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $query = "SELECT * FROM studentitems WHERE firstname LIKE '%$fname%' || lastname LIKE '%$lname%'";
    
    $result= mysqli_query($conn, $query);
    $result_2=mysqli_fetch_assoc($result);
//    if (mysqli_num_rows($result) >0){
  //  while($row = mysqli_fetch_assoc($result)){
        
    //    $fname=$row['firstname'];
      //  $lname=$row['lastname'];
//        $matric=$row['matricNumber'];
  //      $course=$row['course'];
    //    $level=$row['level'];
      //  $item=$row['item'];
//        $serial=$row['serialNumber'];
       //  foreach ($row as $value) {
         //        echo $value['firstname']."|". $value["lastname"]." |". $value["matricNumber"]." |". $value["course"]." |". $value["level"]." |". $value["item"]." |". $value["serialNumber"]."\n";
           // }
        
  //  }
        
    }
  /*  else{
        echo "Uidentified student";
         $fname="";
    $lname="";
    $matric="";
    $course="";
    $level="";
    $item="";
$serial="";
$desc="";
    }
    mysqli_free_result($result);
    mysqli_close($conn);
}
else{
     $fname="";
    $lname="";
    $matric="";
    $course="";
    $level="";
    $item="";
$serial="";
$desc="";
}
 */
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
	
	
	<link href="css/css/font-awesome.css" rel="stylesheet">
	<link href="style.css" rel='stylesheet' type='text/css' />
	
	
	
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
                    <?php do { ?>
	<div class="w3ls-login">
       <div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Firstname :</label>
				<input type="text" name="firstname" readonly="readonly" value="<?php echo $result_2['firstname']; ?>"/>
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Lastname :</label>
				<input type="text" readonly="readonly" name="lastname"   value="<?php echo $result_2['lastname']; ?>"/>

			</div>
            <div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Matric Number :</label>
				<input type="text" name="matricnumber" readonly="readonly" value="<?php echo $result_2['matricNumber']; ?>"/>
			</div>
            <div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Course :</label>
				<input type="text" readonly="readonly" name="course" value="<?php echo $result_2['course']; ?>"/>
			</div>
            <div class="agile-field-txt">
				<label>
					<i class="fa fa-tasks" aria-hidden="true"></i> Level :</label>
				<input type="text" readonly="readonly" name="level" value="<?php echo $result_2['level']; ?>" />
			</div>
            <div class="agile-field-txt">
				<label>
					<i class="fa fa-tag" aria-hidden="true"></i> Item :</label>
				<input type="text" readonly="readonly" name="item" value="<?php echo $result_2['item']; ?>"/>
			</div>
            <div class="agile-field-txt">
				<label>
					<i class="fa fa-lock" aria-hidden="true"></i> Serial Number :</label>
				<input type="text" name="serialnumber" readonly="readonly" value="<?php echo $result_2['serialNumber']; ?>"/>
			</div> 
	</div>
        <?php } while ($result_2=mysqli_fetch_assoc($result)) ?>
	
</body>

</html>