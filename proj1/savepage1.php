<?php
session_start();
$Id = $_SESSION['user_id'];
$Email = $_POST['email'];
$adv_num = $_POST['adv_num'];
$dateapp = $_POST['doa'];
$app_num = $_POST['ref_num'];
$post_app  = $_POST['post'];
$dpt = $_POST['dept'];
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$mname = $_POST['mname'];
$national = $_POST['nationality'];
$dob = $_POST['dob'];
$gen = $_POST['gender'];
$marit_st= $_POST['mstatus'];
$category = $_POST['cast'];
$id_pr = $_POST['id_proof'];
$fth_name = $_POST['father_name'];
$street=$_POST['cadd'];
$city = $_POST['cadd1'];
$state = $_POST['cadd2'];
$country = $_POST['cadd3'];
$pin = $_POST['cadd4'];
$pstreet = $_POST['padd'];
$pcity = $_POST['padd1'];
$pstate = $_POST['padd2'];
$pcountry = $_POST['padd3'];
$ppin = $_POST['padd4'];
$mobile= $_POST['mobile'];
$amobile= $_POST['mobile_2'];
$aemail= $_POST['email_2'];
$land_num= $_POST['landline'];


	// Database connection
	$conn = new mysqli('db','user','pass','project');
	$query = "SELECT * FROM personal_details WHERE Id = '$Id'";
	$result = mysqli_query($conn,$query);
	$targetdir = 'userdetails/';
	$targetPath;
	$targetFile;
	
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    }
	
    else if($result->num_rows == 0) {
		$stmt = $conn->prepare("insert into personal_details(Id, Email,AdvertisementNumber,DateofApplication,ApplicationNumber,PostAppliedfor,Department_School,FirstName,LastName,MiddleName,Nationality,DateofBirth,Gender,MaritalStatus,Category,IDProof,FathersName,Street, City,State,Country,PIN_ZIP,Street1,City2,State1,Country1,PIN_ZIP1,Mobile,AlternateMobile, AlternateEmail,LandlineNumber) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("isssissssssssssssssssissssiiisi",$Id, $Email,$adv_num,$dateapp,$app_num,$post_app,$dpt,$fname,$lname,$mname,$national,$dob,$gen,$marit_st,$category,$id_pr,$fth_name,$street,$city,$state,$country,$pin,$pstreet,$pcity,$pstate,$pcountry,$ppin,$mobile,$amobile,$aemail,$land_num);
		$execval = $stmt->execute();
		header("Location: page2.php");
		$stmt->close();
		$conn->close();
	}else{
		$stmt = $conn->prepare("UPDATE personal_details
		SET 
			Email = ?,
			AdvertisementNumber = ?,
			DateofApplication = ?,
			ApplicationNumber = ?,
			PostAppliedfor = ?,
			Department_School = ?,
			FirstName = ?,
			LastName = ?,
			MiddleName = ?,
			Nationality = ?,
			DateofBirth = ?,
			Gender = ?,
			MaritalStatus = ?,
			Category = ?,
			IDProof = ?,
			FathersName = ?,
			Street = ?,
			City = ?,
			State = ?,
			Country = ?,
			PIN_ZIP = ?,
			Street1 = ?,
			City2 = ?,
			State1 = ?,
			Country1 = ?,
			PIN_ZIP1 = ?,
			Mobile = ?,
			AlternateMobile = ?,
			AlternateEmail = ?,
			LandlineNumber = ?
		WHERE
			Id = ?;
		");
		$stmt->bind_param("sssissssssssssssssssissssiiisii",$Email,$adv_num,$dateapp,$app_num,$post_app,$dpt,$fname,$lname,$mname,$national,$dob,$gen,$marit_st,$category,$id_pr,$fth_name,$street,$city,$state,$country,$pin,$pstreet,$pcity,$pstate,$pcountry,$ppin,$mobile,$amobile,$aemail,$land_num, $Id );
		$execval = $stmt->execute();
		header("Location: page2.php");
		$stmt->close();
	}
	if(isset($_FILES['userfile2']) && $_FILES['userfile2']['error'] == 0){
		$fileName = basename($_FILES["userfile2"]["name"]);
		$targetPath = $targetdir.$fileName;
		move_uploaded_file($_FILES["userfile2"]["tmp_name"], $targetPath);
		$sql = "UPDATE personal_details SET UpdateIDProof = '$targetPath' WHERE id = '$Id'";
		$conn->query($sql);
	}
	
	if(isset($_FILES['userfile']) && $_FILES['userfile']['error'] == 0){
		$fileName = basename($_FILES["userfile"]["name"]);
		$targetFile = $targetdir.$fileName;
		move_uploaded_file($_FILES["userfile"]["tmp_name"], $targetFile);
		$sql = "UPDATE personal_details SET Filename = '$targetFile' WHERE id = '$Id'";
		$conn->query($sql);
	}
	
	$conn->close();
?>