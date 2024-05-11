<?php
session_start();
$Id = $_SESSION['user_id'];
$query = "SELECT * FROM documents WHERE Id = '$Id'";
$query1 = "SELECT * FROM referees WHERE id = '$Id'";
$conn = new mysqli('db','user','pass','project');
	$result1 = mysqli_query($conn,$query);
	$result = mysqli_query($conn,$query1);
    $targetdir = 'documents/';
        $targetPath;
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
}
else {
	if($result1->num_rows == 0){
    //$dummy;
    $sql = "INSERT INTO documents(Id) VALUES ('$Id')";
	$conn->query($sql);
}

	if($result->num_rows == 0){
		$sql1 = "INSERT INTO referees(id,name1,position1,asso_ref1,insti1,email1,contact1,name2,position2,asso_ref2,insti2,email2,contact2,name3,position3,asso_ref3,insti3,email3,contact3) VALUES ('$Id','" . $_POST["ref_name1"] . "','" . $_POST["position1"] . "','" . $_POST["association_referee1"] . "','" . $_POST["org1"] . "','" . $_POST["email1"] . "','" . $_POST["phone1"] . "','" . $_POST["ref_name2"] . "','" . $_POST["position2"] . "','" . $_POST["association_referee2"] . "','" . $_POST["org2"] . "','" . $_POST["email2"] . "','" . $_POST["phone2"] . "','" . $_POST["ref_name3"] . "','" . $_POST["position3"] . "','" . $_POST["association_referee3"] . "','" . $_POST["org3"] . "','" . $_POST["email3"] . "','" . $_POST["phone3"] . "')";
    $conn->query($sql1);
	}else{
		$sql = "UPDATE referees SET 
        name1='" . $_POST["ref_name1"] . "', 
        position1='" . $_POST["position1"] . "', 
        asso_ref1='" . $_POST["association_referee1"] . "', 
        insti1='" . $_POST["org1"] . "', 
        email1='" . $_POST["email1"] . "', 
        contact1='" . $_POST["phone1"] . "', 
        name2='" . $_POST["ref_name2"] . "', 
        position2='" . $_POST["position2"] . "', 
        asso_ref2='" . $_POST["association_referee2"] . "', 
        insti2='" . $_POST["org2"] . "', 
        email2='" . $_POST["email2"] . "', 
        contact2='" . $_POST["phone2"] . "', 
        name3='" . $_POST["ref_name3"] . "', 
        position3='" . $_POST["position3"] . "', 
        asso_ref3='" . $_POST["association_referee3"] . "', 
        insti3='" . $_POST["org3"] . "', 
        email3='" . $_POST["email3"] . "', 
        contact3='" . $_POST["phone3"] . "' 
        WHERE id=" . $Id;

$result = $conn->query($sql);

	}
    if(isset($_FILES['userfile7']) && $_FILES['userfile7']['error'] == 0){
		$fileName = basename($_FILES["userfile7"]["name"]);
		$targetPath = $targetdir.$fileName;
		move_uploaded_file($_FILES["userfile7"]["tmp_name"], $targetPath);
		$sql = "UPDATE documents SET best_cert = '$targetPath' WHERE Id = '$Id'";
		$conn->query($sql);
	}
    if(isset($_FILES['userfile']) && $_FILES['userfile']['error'] == 0){
		$fileName = basename($_FILES["userfile"]["name"]);
		$targetPath = $targetdir.$fileName;
		move_uploaded_file($_FILES["userfile"]["tmp_name"], $targetPath);
		$sql = "UPDATE documents SET phd_cert = '$targetPath' WHERE Id = '$Id'";
		$conn->query($sql);
	}
    if(isset($_FILES['userfile1']) && $_FILES['userfile1']['error'] == 0){
		$fileName = basename($_FILES["userfile1"]["name"]);
		$targetPath = $targetdir.$fileName;
		move_uploaded_file($_FILES["userfile1"]["tmp_name"], $targetPath);
		$sql = "UPDATE documents SET pg_docs = '$targetPath' WHERE Id = '$Id'";
		$conn->query($sql);
	}
    if(isset($_FILES['userfile2']) && $_FILES['userfile2']['error'] == 0){
		$fileName = basename($_FILES["userfile2"]["name"]);
		$targetPath = $targetdir.$fileName;
		move_uploaded_file($_FILES["userfile2"]["tmp_name"], $targetPath);
		$sql = "UPDATE documents SET ug_docs = '$targetPath' WHERE Id = '$Id'";
		$conn->query($sql);
	}
    if(isset($_FILES['userfile3']) && $_FILES['userfile3']['error'] == 0){
		$fileName = basename($_FILES["userfile3"]["name"]);
		$targetPath = $targetdir.$fileName;
		move_uploaded_file($_FILES["userfile3"]["tmp_name"], $targetPath);
		$sql = "UPDATE documents SET docs_12 = '$targetPath' WHERE Id = '$Id'";
		$conn->query($sql);
	}
    if(isset($_FILES['userfile4']) && $_FILES['userfile4']['error'] == 0){
		$fileName = basename($_FILES["userfile4"]["name"]);
		$targetPath = $targetdir.$fileName;
		move_uploaded_file($_FILES["userfile4"]["tmp_name"], $targetPath);
		$sql = "UPDATE documents SET docs_10 = '$targetPath' WHERE Id = '$Id'";
		$conn->query($sql);
	}
    if(isset($_FILES['userfile9']) && $_FILES['userfile9']['error'] == 0){
		$fileName = basename($_FILES["userfile9"]["name"]);
		$targetPath = $targetdir.$fileName;
		move_uploaded_file($_FILES["userfile9"]["tmp_name"], $targetPath);
		$sql = "UPDATE documents SET pay_slip = '$targetPath' WHERE Id = '$Id'";
		$conn->query($sql);
	}
    if(isset($_FILES['userfile10']) && $_FILES['userfile10']['error'] == 0){
		$fileName = basename($_FILES["userfile10"]["name"]);
		$targetPath = $targetdir.$fileName;
		move_uploaded_file($_FILES["userfile10"]["tmp_name"], $targetPath);
		$sql = "UPDATE documents SET noc = '$targetPath' WHERE Id = '$Id'";
		$conn->query($sql);
	}
    if(isset($_FILES['userfile8']) && $_FILES['userfile8']['error'] == 0){
		$fileName = basename($_FILES["userfile8"]["name"]);
		$targetPath = $targetdir.$fileName;
		move_uploaded_file($_FILES["userfile8"]["tmp_name"], $targetPath);
		$sql = "UPDATE documents SET post_phd = '$targetPath' WHERE Id = '$Id'";
		$conn->query($sql);
	}
    if(isset($_FILES['userfile6']) && $_FILES['userfile6']['error'] == 0){
		$fileName = basename($_FILES["userfile6"]["name"]);
		$targetPath = $targetdir.$fileName;
		move_uploaded_file($_FILES["userfile6"]["tmp_name"], $targetPath);
		$sql = "UPDATE documents SET relevant = '$targetPath' WHERE Id = '$Id'";
		$conn->query($sql);
	}
    if(isset($_FILES['userfile5']) && $_FILES['userfile5']['error'] == 0){
		$fileName = basename($_FILES["userfile5"]["name"]);
		$targetPath = $targetdir.$fileName;
		move_uploaded_file($_FILES["userfile5"]["tmp_name"], $targetPath);
		$sql = "UPDATE documents SET sign = '$targetPath' WHERE Id = '$Id'";
		$conn->query($sql);
	}
    header("Location: page9.php");
    $conn->close();
}
?>
