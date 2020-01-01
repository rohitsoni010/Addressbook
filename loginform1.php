<?php
session_start();

if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","addressbook");
$_SESSION['email'] = $_POST["email"];




 $result = mysqli_query($conn,"SELECT * FROM registration WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
  // $user=$_POST["email"];
$row  = mysqli_fetch_array($result);
	$count  = mysqli_num_rows($result);
	if($count==0) {

	 echo '<script type="text/javascript">';
	echo 'alert("Incorrect Username or Password!");';
echo 'window.location.href = "loginpage.php";';
	echo '</script>';

	} else {

		$_SESSION["email"]==$row['email'];
		  $_SESSION["uid"] = $row['uid'];

	  header('Location:contact.php');
	}
}
?>
</html>
