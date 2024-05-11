<?php
	$Email = $_POST['email'];
	$Password = $_POST['password'];
  
// Initialize the session 
session_start(); 
       
// Store the submitted data sent 
// via POST method, stored  
  
// Temporarily in $_POST structure. 

$_SESSION['email_address'] 
        = $_POST['email']; 

        	// Database connection
	$conn = new mysqli('db','user','pass','project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
    $query = "SELECT * FROM users WHERE Email = '$Email' AND Password = '$Password'";
    //$result = $conn->query($query);
    // $row = []; 
     $sql=mysqli_query($conn,"SELECT * FROM users WHERE Email = '$Email' AND Password = '$Password'");
     $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($sql);
    if($result->num_rows == 1){
        $_SESSION['user_id'] = $row['id'];
       header("Location: page1.php");
    }else{
        header("Location: index.php");
    }
    $conn->close();
?>