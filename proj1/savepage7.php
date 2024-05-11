<?php
session_start();
$Id = $_SESSION['user_id'];
$re_stmt = $_POST['research_statement'];
$te_stmt = $_POST['teaching_statement'];
$re_in = $_POST['rel_in'];
$prof_serve = $_POST['prof_serv'];
$jour_det = $_POST['jour_details'];
$conf_det = $_POST['conf_details'];


	// Database connection
	$conn = new mysqli('db','user','pass','project');
	$query = "SELECT * FROM relinfo WHERE Id = '$Id'";
	$result = mysqli_query($conn,$query);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    }
    else if($result->num_rows == 0){
        $stmt = $conn->prepare("insert into relinfo(Id,reContri,teContri,otherRelevant,profService,journalPub,cnfPub) values(?,?,?,?,?,?,?)");
		$stmt->bind_param("issssss",$Id, $re_stmt,$te_stmt,$re_in,$prof_serve,$jour_det,$conf_det);
		$execval = $stmt->execute();
    } else{
		$stmt = $conn->prepare("UPDATE relinfo SET reContri=?, teContri=?, otherRelevant=?, profService=?, journalPub=?, cnfPub=? WHERE Id=?");
$stmt->bind_param("ssssssi", $re_stmt, $te_stmt, $re_in, $prof_serve, $jour_det, $conf_det, $Id);
$execval = $stmt->execute();

	}
	header("Location: page8.php");
		$stmt->close();
		$conn->close();
	
?>