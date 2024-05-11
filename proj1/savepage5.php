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
        if(isset($_POST["mname"])){
			$query = "DELETE FROM memprofsociety WHERE id = '$Id'";
			mysqli_query($conn, $query);
			for ($a=0; $a < count($_POST["mname"]); $a++) { 
			$sql = "INSERT INTO memprofsociety (Id, name,status) VALUES ('$Id', '" . $_POST["mname"][$a] . "', '" . $_POST["mstatus"][$a] . "')";
			mysqli_query($conn, $sql);
		}}
		if(isset($_POST["trg"])){
			$query1 = "DELETE FROM professionaltraining WHERE id = '$Id'";
			mysqli_query($conn, $query1);
			for ($a=0; $a < count($_POST["trg"]); $a++) { 
			$sql = "INSERT INTO professionaltraining (Id,type,organization,year,duration) VALUES ('$Id', '" . $_POST["trg"][$a] . "', '" . $_POST["porg"][$a] . "', '" . $_POST["pyear"][$a] . "', '" . $_POST["pduration"][$a] . "')";
			mysqli_query($conn, $sql);
		}}
		if(isset($_POST["award_nature"])){
			$query2 = "DELETE FROM awards WHERE id = '$Id'";
			mysqli_query($conn, $query2);
			for ($b=0; $b < count($_POST["award_nature"]); $b++) { 
			$sql1 = "INSERT INTO awards (Id,name,awardedBy,year) VALUES ('$Id', '" . $_POST["award_nature"][$b] . "', '" . $_POST["award_org"][$b] . "', '" . $_POST["award_year"][$b] . "')";
			mysqli_query($conn, $sql1);
		}}
		if(isset($_POST["agency"])){
			$query3 = "DELETE FROM sponsoredprojects WHERE id = '$Id'";
			mysqli_query($conn, $query3);
			for ($c=0; $c < count($_POST["agency"]); $c++) { 
			$sql2 = "INSERT INTO sponsoredprojects (Id,agency,title,amount,period,role,status) VALUES ('$Id', '" . $_POST["agency"][$c] . "', '" . $_POST["stitle"][$c] . "', '" . $_POST["samount"][$c] . "', '" . $_POST["speriod"][$c] . "','" . $_POST["s_role"][$c] . "','" . $_POST["s_status"][$c] . "')";
			mysqli_query($conn, $sql2);
		}}
		if(isset($_POST["c_org"])){
			$query4 = "DELETE FROM consultancyprojects WHERE id = '$Id'";
			mysqli_query($conn, $query4);
			for ($d=0; $d < count($_POST["c_org"]); $d++) { 
			$sql3 = "INSERT INTO consultancyprojects(Id,organization,title,amount,period,role,status) VALUES ('$Id', '" . $_POST["c_org"][$d] . "', '" . $_POST["ctitle"][$d] . "', '" . $_POST["camount"][$d] . "', '" . $_POST["cperiod"][$d] . "','" . $_POST["c_role"][$d] . "','" . $_POST["c_status"][$d] . "')";
			mysqli_query($conn, $sql3);
		}}
		header("Location: page6.php");
    }
	
?>