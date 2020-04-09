<?php
 include ( "inc/connection.inc.php" );
 ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	$user = "";
	$utype_db = "";
}
else {
	$user = $_SESSION['user_login'];
	$result = $con->query("SELECT * FROM registration WHERE id='$user'");
		$get_user_name = $result->fetch_assoc();
			$uname_db = $get_user_name['fullname'];
			$utype_db = $get_user_name['type'];
}


if (isset($_REQUEST['app_tut'])) {
	$pstid = mysqli_real_escape_string($con, $_REQUEST['app_tut']);
	$up = $con->query("UPDATE record SET job_confirm='1' WHERE post_id='$pstid'");
	header("Location: notification.php");
}else {
	header('location: index.php');
}

if (isset($_REQUEST['slct_tut'])) {
	$slcttid = mysqli_real_escape_string($con, $_REQUEST['slct_tut']);
	$result = mysqli_query($con, "INSERT INTO record (applied_by,applied_to) VALUES ('$user','$slcttid')");
	header("Location: aboutme.php?uid=".$slcttid."");
}else {
	header('location: index.php');
}

?>