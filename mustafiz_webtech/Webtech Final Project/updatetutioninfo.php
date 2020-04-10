<?php
 include ( "inc/connection.inc.php" );

ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	header("Location: index.php");
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

if (isset($_REQUEST['uid'])) {
	$pstid = mysqli_real_escape_string($con, $_REQUEST['uid']);
	$result1 = $con->query("SELECT * FROM teacher WHERE teacher_id='$user' ORDER BY id DESC");
	$get_tutor_name = $result1->fetch_assoc();
	$tid_db = $get_tutor_name['teacher_id'];
	$id_db = $get_tutor_name['id'];
	$uinst_db = $get_tutor_name['name_of_institution'];
	$medium = $get_tutor_name['medium'];
	$cls = $get_tutor_name['class'];
	$sub = $get_tutor_name['prefer_subject'];
	$f_sal = $get_tutor_name['salary'];
	$plocation_db = $get_tutor_name['prefer_location'];

	if($user != $_REQUEST['uid']){
		header('location: index.php');
	}else{

	}
}else {
	header('location: index.php');
}


//posting
if (isset($_POST['updatetutioninfo'])) {

	$f_loca = $_POST['location'];
	$f_sal = $_POST['sal_range'];


	try {
				if(($user == $_REQUEST['uid']) && ($utype_db == "teacher"))
				{
					
					//throw new Exception('Email is not valid!');
					$sublist = implode(',', $_POST['sub_list']);
					$classlist = implode(',', $_POST['class_list']);
					$mediumlist = implode(',', $_POST['medium_list']);

					//not working!!!!!!!!!!!!
					//$result3 = mysqli_query($con, "UPDATE teacher SET prefer_subject='$sublist',class='$classlist',medium='$mediumlist',salary='$f_sal',prefer_location='$f_loca', WHERE t_id='$user'");

					if($result4 = $con->query("INSERT INTO teacher (teacher_id,	name_of_institution,prefer_subject,prefer_location,class,medium,salary) VALUES ('$user','$uinst_db','$sublist','$_POST[location]','$classlist','$mediumlist','$_POST[sal_range]')")){
						$result = $con->query("DELETE FROM teacher WHERE id='$id_db'");
						
					}
				
				//success message
				$success_message = '
				<div class="signupform_content"><h2><font face="bookman">Successfully Posted!</font></h2>
				<div class="signupform_text" style="font-size: 18px; text-align: center;"></div></div>';

				header("Location: aboutme.php?uid=".$user."");
				}
			}
			catch(Exception $e) {
				$error_message = $e->getMessage();
		}
}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
</head>
<body class="body1">
<div>
	<div>
		<header class="header">

			<div class="header-cont">

				<?php
					include 'inc/banner.inc.php';
				?>

			</div>
		</header>
		<div class="w3-sidebar w3-bar-block w3-collapse w3-card-2 w3-animate-left" stylRe="width:100px;" id="mySidebar">
		  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
		  <a href="index.php" class="w3-bar-item w3-button">Tution</a>

		</div>
		<div class="topnav">
	
			<a class="navlink" href="index.php" style="margin: 0px 0px 0px 100px;">DashBoard Information</a>
			<a class="navlink" href="#news">Find A Teacher</a>
			<?php 
			if($utype_db == "teacher")
				{

				}else {
					echo '<a class="navlink" href="postform.php">Post</a>';
				}

			 ?>
			<a class="navlink" href="#contact">Contact</a>

			<div style="float: right;" >
				<table>
					<tr>
						<?php
							if($user != ""){
								echo '<td>
							<a class="active navlink" href="profile.php?uid='.$user.'">'.$uname_db.'</a>
						</td>
						<td>
							<a class="navlink" href="logout.php">Logout</a>
						</td>';
							}else{
								echo '<td>
							<a class="navlink" href="login.php">Login</a>
						</td>
						<td>
							<a class="navlink" href="registration.php">Register</a>
						</td>';
							}
						?>
						
					</tr>
				</table>
			</div>
		</div>
	</div>

	<!-- newsfeed -->
	<div style="margin: 20px; overflow: hidden;">
		<div style="width: 1000px; margin: 0 auto;">
		
			<ul>
				<li style="float: left;">
					<div class="settingsleftcontent">
						<ul>
							<li><?php echo '<a href="profile.php?uid='.$user.'" >Post</a>'; ?></li>
							<li><?php echo '<a href="aboutme.php?uid='.$user.'">About</a>'; ?></li>
							<li><?php echo '<a href="settings.php">Settings</a>'; ?></li>
						</ul>
					</div>
				</li>
				<li style="float: right;">
								<form action="" method="POST" class="registration">
								<?php 
									echo '
										<div class="holecontainer">
										<div class="nfbody">
										<div class="p_body">';
													if (isset($error_message)) {
														echo '<div class="signup_error_msg" style="
                                                          color: #A92A2A;">'.$error_message.'</div>';
													}elseif(isset($succs_message)){
														echo '<div class="signup_error_msg" style="
                                                              color: #A92A2A;">'.$succs_message.'</div>';
													}
												echo'
											<h2 style="text-align: center;">Update Tution Informaion</h2>'; ?>
											<div class="itemrow">
									  			<div style="width: 20%; float: left;">
									  				<label>Medium: </label>
									  			</div>
									  			<div style="width: 80%; float: left;">
									  				<div class="divp50"><input <?php $medium1=strstr($medium, "BANGLA"); if($medium1 != '') echo 'checked'; ?> type="checkbox" name="medium_list[]" value="BANGLA"><span>BANGLA</span></div>
													<div class="divp50"><input <?php $medium1=strstr($medium, "ENGLISH"); if($medium1 != '') echo 'checked'; ?> type="checkbox" name="medium_list[]" value="ENGLISH"><span>ENGLISH</span></div>
													<div class="divp50"><input <?php $medium1=strstr($medium, "Any"); if($medium1 != '') echo 'checked'; ?> type="checkbox" name="medium_list[]" value="Any"><span>Any</span></div>
									  		</div>
									  		</div>
											<div class="itemrow">
									  			<div style="width: 20%; float: left;">
									  				<label>Prefer Subject: </label>
									  			</div>
									  			<div style="width: 80%; float: left;">
									  				<div class="divp50"><input <?php $sub1=strstr($sub, "BANGLA"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="BANGLA"><span>BANGLA</span></div>
													<div class="divp50"><input <?php $sub1=strstr($sub, "ENGLISH"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="ENGLISH"><span>ENGLISH</span></div>
													<div class="divp50"><input <?php $sub1=strstr($sub, "MATH"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="MATH"><span>MATH</span></div>
													 <div class="divp50"><input <?php $sub1=strstr($sub, "HIGHER MATH"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="Higher Math"><span>HIGHER MATH</span></div>
													<div class="divp50"><input <?php $sub1=strstr($sub, "SOCIAL SCIENCE"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="SOCIAL SCIENCE"><span>SOCIAL SCIENCE</span></div>
													<div class="divp50"><input <?php $sub1=strstr($sub, "GENERAL SCIENCE"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="GENERAL SCIENCE"><span>GENERAL SCIENCE</span></div>
													<div class="divp50"><input <?php $sub1=strstr($sub, "HISTORY"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="HISTORY"><span>HISTORY</span></div>
													<div class="divp50"><input <?php $sub1=strstr($sub, "RELIGION"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="RELIGION"><span>RELIGION</span></div>
													<div class="divp50"><input <?php $sub1=strstr($sub, "ICT"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="ICT"><span>ICT</span></div>
													<div class="divp50"><input <?php $sub1=strstr($sub, "PHYSICS"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="PHYSICS"><span>PHYSICS</span></div>
													<div class="divp50"><input <?php $sub1=strstr($sub, "CHEMISTRY"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="CHEMISTRY"><span>CHEMISTRY</span></div>
													
													<div class="divp50"><input <?php $sub1=strstr($sub, "BIOLOGY"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="BIOLOGY"><span>BIOLOGY</span></div>
													<div class="divp50"><input <?php $sub1=strstr($sub, "SOCIOLOGY"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="SOCIOLOGY"><span>SOCIOLOGY</span></div>
													<div class="divp50"><input <?php $sub1=strstr($sub, "ECONOMICS"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="ECONOMICS"><span>ECONOMICS</span></div>
													<div class="divp50"><input <?php $sub1=strstr($sub, "ACCOUNTING"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="ACCOUNTING"><span>ACCOUNTING</span></div>
												   <div class="divp50"><input <?php $sub1=strstr($sub, "FINANCE"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="FINANCE"><span>FINANCE</span></div>
													<div class="divp50"><input <?php $sub1=strstr($sub, "STATISTICS"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="STATISTICS"><span>STATISTICS</span></div>
													<div class="divp50"><input <?php $sub1=strstr($sub, "COMPUTER SCIENCE"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="COMPUTER SCIENCE"><span>COMPUTER SCIENCE</span></div>
													<div class="divp50"><input <?php $sub1=strstr($sub, "ART"); if($sub1 != '') echo 'checked'; ?> type="checkbox" name="sub_list[]" value="ART"><span>ART</span></div>
									  			</div>
									  		</div>
											<div class="itemrow">
									  			<div style="width: 20%; float: left;">
									  				<label>Prefer Class: </label>
									  			</div>
									  			<div style="width: 80%; float: left;">
									  				<div class="divp50"><input <?php $class1=strstr($cls, "Play-Two"); if($class1 != '') echo 'checked'; ?> type="checkbox" name="class_list[]" value="Play-Two"><span>Play-Two</span></div>
													<div class="divp50"><input <?php $class1=strstr($cls, "Three-Siz"); if($class1 != '') echo 'checked'; ?> type="checkbox" name="class_list[]" value="Three-Six"><span>Three-Six</span></div>
													<div class="divp50"><input <?php $class1=strstr($cls, "Seven"); if($class1 != '') echo 'checked'; ?> type="checkbox" name="class_list[]" value="Seven"><span>Seven</span></div>
													<div class="divp50"><input <?php $class1=strstr($cls, "Eight"); if($class1 != '') echo 'checked'; ?> type="checkbox" name="class_list[]" value="Eight"><span>Eight</span></div>
													<div class="divp50"><input <?php $class1=strstr($cls, "Nine-Ten"); if($class1 != '') echo 'checked'; ?> type="checkbox" name="class_list[]" value="Nine-Ten"><span>Nine-Ten</span></div>
													<div class="divp50"><input <?php $class1=strstr($cls, "Eleven-Twelve"); if($class1 != '') echo 'checked'; ?> type="checkbox" name="class_list[]" value="Eleven-Twelve"><span>Eleven-Twelve</span></div>
													<div class="divp50"><input <?php $class1=strstr($cls, "College/University"); if($class1 != '') echo 'checked'; ?> type="checkbox" name="class_list[]" value="College/University"><span>College/University</span></div>
									  		<?php	echo '</div>
									  		</div>
											<div class="itemrow">
									  			<div style="width: 20%; float: left;">
									  				<label>Prefer Location: </label>
									  			</div>
									  			<div style="width: 80%; float: left;">
									  				<input type="text" name="location" value="'.$plocation_db.'"/>
									  			</div>
									  		</div>
											<div class="itemrow">
									  			<div style="width: 20%; float: left;">
									  				<label>Salary: </label>
									  			</div>
									  			<div style="width: 80%; float: left;">
									  				<select name="sal_range">';
														if($f_sal!="") echo '<option value="'.$f_sal.'">'.$f_sal.'</option>';
													  echo '<option value="None">None</option>
													  <option value="1500-3000">1000-2000</option>
													  <option value="3000-6000">2000-5000</option>
													  <option value="6000-12000">5000-10000</option>
													  <option value="12000-18000">10000-15000</option>
													  <option value="18000-30000">15000-25000</option>
													</select>
									  			</div>
									  		</div>
									  		<input type="submit" class="sub_button" name="updatetutioninfo" value="Update"/><br></div><br>
										</div></div>'
								 ?>
							</form>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div>
	<?php
		include 'inc/footer.inc.php';
	?>
	</div>

	




</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>