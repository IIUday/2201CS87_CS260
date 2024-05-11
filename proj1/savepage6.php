<?php
session_start();
$Id = $_SESSION['user_id'];


	// Database connection
	$conn = new mysqli('db','user','pass','project');
	
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    }
    else{
        if(isset($_POST["phd_scholar"])){
			$query = "DELETE FROM phd_supervision WHERE id = '$Id'";
			mysqli_query($conn, $query);
			for ($a=0; $a < count($_POST["phd_scholar"]); $a++) { 
			$sql = "INSERT INTO phd_supervision (Id, name,title,role,status,yop) VALUES ('$Id', '" . $_POST["phd_scholar"][$a] . "', '" . $_POST["phd_thesis"][$a] . "', '" . $_POST["phd_role"][$a] . "', '" . $_POST["phd_ths_status"][$a] . "', '" . $_POST["phd_ths_year"][$a] . "')";
			mysqli_query($conn, $sql);
		}}
		if(isset($_POST["pg_scholar"])){
			$query1 = "DELETE FROM pg_supervision WHERE id = '$Id'";
			mysqli_query($conn, $query1);
			for ($b=0; $b < count($_POST["pg_scholar"]); $b++) { 
			$sql1 = "INSERT INTO pg_supervision (Id, name,title,role,status,yop) VALUES ('$Id', '" . $_POST["pg_scholar"][$b] . "', '" . $_POST["pg_thesis"][$b] . "', '" . $_POST["pg_role"][$b] . "', '" . $_POST["pg_status"][$b] . "', '" . $_POST["pg_ths_year"][$b] . "')";
			mysqli_query($conn, $sql1);
		}}
        if(isset($_POST["ug_scholar"])){
			$query2 = "DELETE FROM ug_supervision WHERE id = '$Id'";
			mysqli_query($conn, $query2);
			for ($c=0; $c < count($_POST["ug_scholar"]); $c++) { 
			$sql1 = "INSERT INTO ug_supervision (Id, name,title,role,status,yop) VALUES ('$Id', '" . $_POST["ug_scholar"][$c] . "', '" . $_POST["ug_thesis"][$c] . "', '" . $_POST["ug_role"][$c] . "', '" . $_POST["ug_status"][$c] . "', '" . $_POST["ug_ths_year"][$c] . "')";
			mysqli_query($conn, $sql1);
		}}
		header("Location: page7.php");
		//echo "Registered";
    }
	
?>