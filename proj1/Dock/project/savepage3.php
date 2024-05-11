<?php
session_start();
$Id = $_SESSION['user_id'];
$prs_posi = $_POST['pres_emp_position'];
$prs_org= $_POST['pres_emp_employer'];
$prs_status = $_POST['pres_status'];
$prs_doj = $_POST['pres_emp_doj'];
$prs_dol = $_POST['pres_emp_dol'];
$prs_duration = $_POST['pres_emp_duration'];
$area_spl = $_POST['area_spl'];
$area_rese=$_POST['area_rese'];



	// Database connection
	$conn = new mysqli('db','user','pass','project');
	$query = "SELECT * FROM employmentdetails WHERE Id = '$Id'";
	$result = mysqli_query($conn,$query);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    }
    else {
		if($result->num_rows == 0){
		$stmt = $conn->prepare("insert into employmentdetails  (Id, position,organization,status,dateOfJoining,dateOfLeaving,duration,areaOfSpecialization,currentAreaOfResearch) values(?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("isssssiss",$Id, $prs_posi,$prs_org,$prs_status,$prs_doj,$prs_dol,$prs_duration,$area_spl,$area_rese);
		$execval = $stmt->execute();
	}else{
		$stmt = $conn->prepare("UPDATE employmentdetails SET position=?, organization=?, status=?, dateOfJoining=?, dateOfLeaving=?, duration=?, areaOfSpecialization=?, currentAreaOfResearch=? WHERE Id=?");

$stmt->bind_param("ssssssisi", $prs_posi, $prs_org, $prs_status, $prs_doj, $prs_dol, $prs_duration, $area_spl, $area_rese, $Id);

$execval = $stmt->execute();

	}
		if(isset($_POST["position"])){
			$query = "DELETE FROM employmenthistory WHERE id = '$Id'";
			mysqli_query($conn, $query);
			for ($a=0; $a < count($_POST["position"]); $a++) { 
			$sql = "INSERT INTO employmenthistory (Id, position, organization,dateOfJoining,dateOfLeaving,duration) VALUES ('$Id', '" . $_POST["position"][$a] . "', '" . $_POST["employer"][$a] . "', '" . $_POST["doj"][$a] . "', '" . $_POST["dol"][$a] . "', '" . $_POST["exp_duration"][$a] . "')";
			mysqli_query($conn, $sql);
		}}
		if(isset($_POST["te_position"])){
			$query1 = "DELETE FROM teachingexperience WHERE id = '$Id'";
			mysqli_query($conn, $query1);
			for ($b=0; $b < count($_POST["te_position"]); $b++) { 
			$sql1 = "INSERT INTO teachingexperience (Id, position,employer,courseTaught,ug_pg,noOfStudents,dateOfJoining,dateOfLeaving,duration) VALUES ('$Id', '" . $_POST["te_position"][$b] . "', '" . $_POST["te_employer"][$b] . "', '" . $_POST["te_course"][$b] . "', '" . $_POST["te_ug_pg"][$b] . "', '" . $_POST["te_no_stu"][$b] . "', '" . $_POST["te_doj"][$b] . "', '" . $_POST["te_dol"][$b] . "', '" . $_POST["te_duration"][$b] . "')";
			mysqli_query($conn, $sql1);
		}}
		if(isset($_POST["r_exp_position"])){
			$query2 = "DELETE FROM researchexperience WHERE id = '$Id'";
			mysqli_query($conn, $query2);
			for ($c=0; $c < count($_POST["r_exp_position"]); $c++) { 
			$sql2 = "INSERT INTO researchexperience (Id, position,institute,supervisor,dateOfJoining,dateOfLeaving,duration) VALUES ('$Id', '" . $_POST["r_exp_position"][$c] . "', '" . $_POST["r_exp_institute"][$c] . "', '" . $_POST["r_exp_supervisor"][$c] . "', '" . $_POST["r_exp_doj"][$c] . "', '" . $_POST["r_exp_dol"][$c] . "', '" . $_POST["r_exp_duration"][$c] . "')";
			mysqli_query($conn, $sql2);
		}}
		if(isset($_POST["org"])){
			$query3 = "DELETE FROM industrialexperience WHERE id = '$Id'";
			mysqli_query($conn, $query3);
			for ($d=0; $d < count($_POST["org"]); $d++) { 
			$sql3 = "INSERT INTO industrialexperience (Id,organization,workprofile,dateOfJoining,dateOfLeaving,duration) VALUES ('$Id', '" . $_POST["org"][$d] . "', '" . $_POST["work"][$d] . "', '" . $_POST["ind_doj"][$d] . "', '" . $_POST["ind_dol"][$d] . "', '" . $_POST["period"][$d] . "')";
			mysqli_query($conn, $sql3);
		}}
		header("Location: page4.php");
		$stmt->close();
		$conn->close();
	}
?>