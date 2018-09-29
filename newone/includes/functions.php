<?php
	function doesEmailExist($dbconn, $input){
		$result=false;
		$stmt = $dbconn->prepare("SELECT * FROM admin WHERE email=:em");
		$stmt->bindParam(":em", $input);
		$stmt->execute();
		if($stmt->rowCount() > 0){
			$result=true;
		}
		return $result;
	}


	function register($dbconn, $input){
		$hash = password_hash($input['pass'], PASSWORD_BCRYPT);
		$stmt = $dbconn->prepare("INSERT INTO users(title, last_name, first_name, email, mobile, location, plan, password, secured_password, meter_number) VALUES(:title, :lname, :fname, :email, :mobile, :location, :plan, :pword, :hsh, :mnum)");
        
		$data = [
                ":title"    => $input['gender-title'],
                ":lname"    => $input['last'],
                ":fname"    => $input['first'], 
				":email"    => $input['mail'],
                ":mobile"   => $input['phone'],
                ":location" => $input['location'],
                ":plan"     => $input['plan'],
				":pword"    => $input['pass'],
                ":hsh"      => $hash,
                ":mnum"     => $input['meternum']
			];
        
		$stmt->execute($data);
	}

	function login($dbconn, $input){
		$correct = [];
		$stmt = $dbconn->prepare("SELECT * FROM users WHERE email=:email");
		$stmt->bindParam(":email", $input['email']);
		$stmt->execute();
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		if($stmt->rowCount() > 0){
			if(password_verify($input['pword'], $row['secured_password'])){
				$correct[]=true;
				$correct[]=$row['user_id'];
				return $correct;
			}
		}
	}

function checkPlan($dbconn, $id) {
    $stmt = $dbconn->prepare("SELECT * FROM users WHERE user_id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_BOTH);
    $arr = [];
    $arr['plan'] = $row['plan'];
    return $arr['plan'];
}

function checkMeterNum($dbconn, $id) {
    $stmt = $dbconn->prepare("SELECT * FROM users WHERE user_id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_BOTH);
    $arr = [];
    $arr['meternum'] = $row['meter_number'];
    return $arr['meternum'];
}

function checkUnits($dbconn, $id) {
    $stmt = $dbconn->prepare("SELECT * FROM units WHERE user_id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_BOTH);
    $arr = [];
    $arr['units_used'] = $row['units_used'];
    return $arr['units_used'];
}

function checkLocation($dbconn, $id) {
    $stmt = $dbconn->prepare("SELECT * FROM users WHERE user_id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_BOTH);
    $arr = [];
    $arr['location'] = $row['location'];
    return $arr['location'];
}

function checkCost($dbconn, $id) {
    $stmt = $dbconn->prepare("SELECT * FROM units WHERE user_id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_BOTH);
    $arr = [];
    $arr['total_cost'] = $row['total_cost'];
    return $arr['total_cost'];
}

function insertPayment($dbconn, $input, $id) {
    $stmt = $dbconn->prepare("INSERT INTO payment(user_id, num_units, amount) VALUES(:id, :nu, :am)");
    $data = [
            ":id" => $id,
            ":nu" => $input['unit'],
            ":am" => 50 * $input['unit']
    ];
    
    $stmt->execute($data);
}

function clearBills($dbconn, $id) {
    $stmt = $dbconn->prepare("UPDATE units SET total_cost = 0 WHERE user_id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}



?>