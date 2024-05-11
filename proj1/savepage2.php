<?php
session_start();
$Id = $_SESSION['user_id'];
$university = $_POST['college_phd'];
$dept= $_POST['stream'];
$supervisor = $_POST['supervisor'];
$yoj_phd = $_POST['yoj_phd'];
$dod_phd  = $_POST['dod_phd'];
$doa_phd = $_POST['doa_phd'];
$thesis_title= $_POST['phd_title'];
$pg_degree= $_POST['pg_degree'];
$pg_college = $_POST['pg_college'];
$pg_subjects = $_POST['pg_subjects'];
$pg_yoj = $_POST['pg_yoj'];
$pg_yoc= $_POST['pg_yog'];
$pg_duration = $_POST['pg_duration'];
$pg_perce= $_POST['pg_perce'];
$pg_rank = $_POST['pg_rank'];
$ug_degree=$_POST['ug_degree'];
$ug_college= $_POST['ug_college'];
$ug_branch= $_POST['ug_subjects'];
$ug_yoj = $_POST['ug_yoj'];
$ug_yoc = $_POST['ug_yog'];
$ug_duration = $_POST['ug_duration'];
$ug_perce= $_POST['ug_perce'];
$ug_rank = $_POST['ug_rank'];
$school1 = $_POST['school1'];
$passing_year1= $_POST['passing_year1'];
$s_perce1= $_POST['s_perce1'];
$s_rank1= $_POST['s_rank1'];
$school2 = $_POST['school2'];
$passing_year2= $_POST['passing_year2'];
$s_perce2= $_POST['s_perce2'];
$s_rank2= $_POST['s_rank2'];


	// Database connection
	$conn = new mysqli('db','user','pass','project');
	$query = "SELECT * FROM acaddetails WHERE id = '$Id'";
	$result= mysqli_query($conn, $query);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    }
    else {
		if($result->num_rows == 0){
		$stmt = $conn->prepare("INSERT INTO acaddetails(Id, university,department,phdSupervisor,yearOfJoining,dateOfThesis,dateOfAward,titleOfThesis,school10th,school12th,yearOfPass10th,yearOfPass12th,percentage10th,percentage12th,division10th,division12th,pg_deg,pg_uni,pg_branch,pg_yoj,pg_yoc,pg_duration,pg_cgpa,pg_div,ug_deg,ug_uni,ug_branch,ug_yoj,ug_yoc,ug_duration,ug_cgpa,ug_div) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("isssisssssiiddsssssiiidssssiiids",$Id,$university,$dept,$supervisor,$yoj_phd,$dod_phd,$doa_phd,$thesis_title,$school2,$school1,$passing_year2,$passing_year1,$s_perce2,$s_perce1,$s_rank2,$s_rank1,$pg_degree,$pg_college,$pg_subjects,$pg_yoj,$pg_yoc,$pg_duration,$pg_perce,$pg_rank,$ug_degree,$ug_college,$ug_branch,$ug_yoj,$ug_yoc,$ug_duration,$ug_perce,$ug_rank);
		$execval = $stmt->execute();
		}else{
			$stmt = $conn->prepare("UPDATE acaddetails SET university=?, department=?, phdSupervisor=?, yearOfJoining=?, dateOfThesis=?, dateOfAward=?, titleOfThesis=?, school10th=?, school12th=?, yearOfPass10th=?, yearOfPass12th=?, percentage10th=?, percentage12th=?, division10th=?, division12th=?, pg_deg=?, pg_uni=?, pg_branch=?, pg_yoj=?, pg_yoc=?, pg_duration=?, pg_cgpa=?, pg_div=?, ug_deg=?, ug_uni=?, ug_branch=?, ug_yoj=?, ug_yoc=?, ug_duration=?, ug_cgpa=?, ug_div=? WHERE Id=?");

$stmt->bind_param("sssisssssiiidsssssiiidssssiiidsi", $university, $dept, $supervisor, $yoj_phd, $dod_phd, $doa_phd, $thesis_title, $school2, $school1, $passing_year2, $passing_year1, $s_perce2, $s_perce1, $s_rank2, $s_rank1, $pg_degree, $pg_college, $pg_subjects, $pg_yoj, $pg_yoc, $pg_duration, $pg_perce, $pg_rank, $ug_degree, $ug_college, $ug_branch, $ug_yoj, $ug_yoc, $ug_duration, $ug_perce, $ug_rank, $Id);

$execval = $stmt->execute();

		}
        if(isset($_POST["add_degree"])){
			$query = "DELETE FROM degreedetails WHERE id = '$Id'";
			mysqli_query($conn, $query);
			for ($a=0; $a < count($_POST["add_degree"]); $a++) { 
			$sql = "INSERT INTO degreedetails (Id, degree, university, branch, yearOfJoining, yearOfCompletion, duration, cgpa, division) VALUES ('$Id', '" . $_POST["add_degree"][$a] . "', '" . $_POST["add_college"][$a] . "', '" . $_POST["add_subjects"][$a] . "', '" . $_POST["add_yoj"][$a] . "', '" . $_POST["add_yog"][$a] . "', '" . $_POST["add_duration"][$a] . "', '" . $_POST["add_perce"][$a] . "', '" . $_POST["add_rank"][$a] . "')";
			mysqli_query($conn, $sql);
		}}
		header("Location: page3.php");
		$stmt->close();
		$conn->close();
	}
?>