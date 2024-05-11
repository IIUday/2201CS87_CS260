<?php
	$FirstName = $_POST['firstname'];
	$LastName = $_POST['lastname'];
	$Category = $_POST['cast'];
	$Email = $_POST['email'];
	$Password = $_POST['password'];
    $Repassword = $_POST['re_password'];

	// Database connection
	$conn = new mysqli('db','user','pass','project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} elseif($Password != $Repassword){
        echo "Passwors do not match.";
    }
    else {
		$stmt = $conn->prepare("insert into users(FirstName, LastName,Email, Category, Password) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $FirstName, $LastName,$Email, $Category,  $Password);
		$execval = $stmt->execute();
		echo '<script type="text/javascript">
                alert("User has been registered successfully.");
                window.location.assign("index.php");
        </script>';
		$stmt->close();
		$conn->close();
	}
?>