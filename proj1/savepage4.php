<?php
session_start();
$Id = $_SESSION['user_id'];
$int_jou = $_POST['summary_journal_inter'];
$int_conf = $_POST['summary_conf_inter'];
$nat_jou = $_POST['summary_journal'];
$nat_conf = $_POST['summary_conf_national'];
$no_patent = $_POST['patent_publish'];
$no_books = $_POST['summary_book'];
$no_chapt= $_POST['summary_book_chapter'];
$link=$_POST['google_link'];



	// Database connection
	$conn = new mysqli('db','user','pass','project');
	$query = "SELECT * FROM summpublication WHERE Id = '$Id'";
	$result = mysqli_query($conn,$query);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    }
    else {
		if($result->num_rows == 0){
		$stmt = $conn->prepare("insert into summpublication(Id,noOfIntJnlPps,noOfIntCnfPps,noOfNatJnlPps,noOfNatCnfPps,noOfPatents,noOfBooks,noOfBookChpt,googleLink) values(?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("iiiiiiiis",$Id, $int_jou,$int_conf,$nat_jou,$nat_conf,$no_patent,$no_books,$no_chapt,$link );
		$execval = $stmt->execute();
		}else{
			$stmt = $conn->prepare("UPDATE summpublication SET noOfIntJnlPps=?, noOfIntCnfPps=?, noOfNatJnlPps=?, noOfNatCnfPps=?, noOfPatents=?, noOfBooks=?, noOfBookChpt=?, googleLink=? WHERE Id=?");
$stmt->bind_param("iiiiiiiis", $int_jou, $int_conf, $nat_jou, $nat_conf, $no_patent, $no_books, $no_chapt, $link, $Id);
$execval = $stmt->execute();

		}
		//echo $execval;
		if(isset($_POST["author"])){
			$query1 = "DELETE FROM bestpublications WHERE id = '$Id'";
			mysqli_query($conn, $query1);
			for ($a=0; $a < count($_POST["author"]); $a++) { 
			$sql = "INSERT INTO bestpublications (Id, author, title,name,year,impactFactor,doi,status) VALUES ('$Id', '" . $_POST["author"][$a] . "', '" . $_POST["title"][$a] . "', '" . $_POST["journal"][$a] . "', '" . $_POST["year"][$a] . "', '" . $_POST["impact"][$a] . "', '" . $_POST["doi"][$a] . "', '" . $_POST["status"][$a] . "')";
			mysqli_query($conn, $sql);
		}}
		if(isset($_POST["ptitle"])){
			$query2 = "DELETE FROM patents WHERE id = '$Id'";
			mysqli_query($conn, $query2);
			for ($b=0; $b < count($_POST["ptitle"]); $b++) { 
			$sql2 = "INSERT INTO patents (Id, inventor,title,country,patentNo,dof,dop,status) VALUES ('$Id', '" . $_POST["pauthor"][$b] . "', '" . $_POST["ptitle"][$b] . "', '" . $_POST["p_country"][$b] . "', '" . $_POST["p_number"][$b] . "', '" . $_POST["pyear_filed"][$b] . "', '" . $_POST["pyear_published"][$b] . "', '" . $_POST["pyear_issued"][$b] . "')";
			mysqli_query($conn, $sql2);
		}}
		if(isset($_POST["btitle"])){
			$query3= "DELETE FROM books WHERE id = '$Id'";
			mysqli_query($conn, $query3);
			for ($c=0; $c < count($_POST["btitle"]); $c++) { 
			$sql3 = "INSERT INTO books (Id,author,title,yop,isbn) VALUES ('$Id', '" . $_POST["bauthor"][$c] . "', '" . $_POST["btitle"][$c] . "', '" . $_POST["byear"][$c] . "', '" . $_POST["bisbn"][$c] . "')";
			mysqli_query($conn, $sql3);
		}}
		if(isset($_POST["bc_title"])){
			$query4 = "DELETE FROM bookchapter WHERE id = '$Id'";
			mysqli_query($conn, $query4);
			for ($d=0; $d < count($_POST["bc_title"]); $d++) { 
			$sql4 = "INSERT INTO bookchapter(Id,author,title,yop,isbn) VALUES ('$Id', '" . $_POST["bc_author"][$d] . "', '" . $_POST["bc_title"][$d] . "', '" . $_POST["bc_year"][$d] . "', '" . $_POST["bc_isbn"][$d] . "')";
			mysqli_query($conn, $sql4);
		}}
		header("Location: page5.php");
		$stmt->close();
		$conn->close();
	}
	// }else{
	// 	$stmt = $conn->prepare("UPDATE personal_details
	// 	SET 
	// 		Email = ?,
	// 		AdvertisementNumber = ?,
	// 		DateofApplication = ?,
	// 		ApplicationNumber = ?,
	// 		PostAppliedfor = ?,
	// 		Department_School = ?,
	// 		FirstName = ?,
	// 		LastName = ?,
	// 		MiddleName = ?,
	// 		Nationality = ?,
	// 		DateofBirth = ?,
	// 		Gender = ?,
	// 		MaritalStatus = ?,
	// 		Category = ?,
	// 		IDProof = ?,
	// 		FathersName = ?,
	// 		Street = ?,
	// 		City = ?,
	// 		State = ?,
	// 		Country = ?,
	// 		PIN_ZIP = ?,
	// 		Street1 = ?,
	// 		City2 = ?,
	// 		State1 = ?,
	// 		Country1 = ?,
	// 		PIN_ZIP1 = ?,
	// 		Mobile = ?,
	// 		AlternateMobile = ?,
	// 		AlternateEmail = ?,
	// 		LandlineNumber = ?
	// 	WHERE
	// 		Id = ?;
	// 	");
	// 	$stmt->bind_param("sssissssssssssssssssissssiiisii",$Email,$adv_num,$dateapp,$app_num,$post_app,$dpt,$fname,$lname,$mname,$national,$dob,$gen,$marit_st,$category,$id_pr,$fth_name,$street,$city,$state,$country,$pin,$pstreet,$pcity,$pstate,$pcountry,$ppin,$mobile,$amobile,$aemail,$land_num, $Id );
	// 	$execval = $stmt->execute();
	// 	echo $execval;
	// 	echo "Updation successfully...";
	// 	$stmt->close();
	// 	$conn->close();
	// }
?>