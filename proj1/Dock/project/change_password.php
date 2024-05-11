<?php
session_start();
$id = $_SESSION['user_id'];
$conn = new mysqli('db','user','pass','project');
$curr_password = $_POST['cr_password'];
$new_password = $_POST['n_password'];
$cnf_new_password = $_POST['cn_password'];
$query = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_array($result);
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
}else{
if($curr_password == $user["Password"]){
    if($new_password == $cnf_new_password){
        $stmt = $conn->prepare("UPDATE users SET Password=? WHERE id = ?");
		$stmt->bind_param("si", $new_password, $id);
		$execval = $stmt->execute();
        $stmt->close();
        echo '<script type="text/javascript">
                alert("Password has been changed successfully.");
                window.location.assign("page1.php");
        </script>';
    }else{
        echo '<script type="text/javascript">
                alert("New Password and Confirm new password is not matched!");
                window.location.assign("page1.php");
        </script>';
    }
}else{
    echo '<script type="text/javascript">
                alert("Current Password is incorrect!");
                window.location.assign("page1.php");
        </script>';
}

$conn->close();
}
?>