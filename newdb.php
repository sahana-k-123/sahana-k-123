<?php


// Update insert.php with current file(newdb.php) in registration.php file to observe data in the remotemysql
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
	$email = $_POST['email'];
        $phone = $_POST['phone'];

	
        $host = "remotemysql.com";
        $dbusername = "kt7kGUzfek";
        $dbpassword = "d6kPxnGxhl";
        $dbname = "kt7kGUzfek";

	$conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into project(firstname, lastname, password, gender, email, phone) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstname, $lastname, $password, $gender, $email, $phone);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully";
                header("Location:Abc.php");
		$stmt->close();
		$conn->close();
	}
?>

