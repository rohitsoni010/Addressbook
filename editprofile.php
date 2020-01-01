<?php
session_start();
?>
<?php
if($_SESSION["email"]) {
?>
<br>

<center><b>
Welcome <?php echo $_SESSION["email"]; ?>.</b> </center>
<br>
<button class="button" style="float: right;"><a style="text-decoration:none" href='logout.php'>LOGOUT</a></button>
<br>
<?php
}else {
header("Location:loginpage.php");
}
?>


<?php
$uid='';
$name='';
$email='';
$phone='';
$address='';
$status='';
$relation='';
$password='';


if(isset($_REQUEST['id'])){
  $conn = mysqli_connect("localhost","root","","addressbook");
  $query = "SELECT * FROM registration WHERE uid='".$_SESSION['uid']."' and uid='".$_REQUEST['id']."'" ;
  $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
  if (mysqli_num_rows($run_query) > 0) {
  if ($row = mysqli_fetch_array($run_query )) {
      $uid=$row['uid'];
      $name = $row['name'];
      $email = $row['email'];
      $phone = $row['phone'];
      $address = $row['address'];
      $status = $row['status'];
      $password=$row['password'];
      }
      }
    }
?>


<html>
<style type="text/css">
.h {
  margin-left:auto;
  margin-right: 10px;
  background-color: black;
  border-radius: 12px;
  border: none;
  color: white;
  padding: 8px 10px;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  font-weight: bold;
}

.h:hover {
  background-color: green;
}
a { color: white; }
.button {
  margin-left:auto;
  margin-right: 10px;
  background-color: black;
  border-radius: 12px;
  border: none;
  color: white;
  padding: 8px 10px;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  font-weight: bold;
}

.button:hover {
  background-color: red;
}
.back{
  margin-left:auto;
  margin-right:auto;
  background-color: black;
  border: none;
  border-radius: 8px;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration-color: white;
  font-size: 20px;
  cursor: pointer;
  font-weight: bold;

}
.back:hover {
  background-color: grey;
}
body { background-color:#DEDDE3;color:black;
  border: 5px solid black;
   border-radius: 5px;}
table{margin-left:auto;
margin-right:auto;
border-collapse:collapse;
font-size:1.00em;
font-family:arial;
font-style:italic;
border: 5px solid MediumSeaGreen;
 border-radius: 8px;
}
.form {
  width: 500px;
  clear: both;
  border: 5px solid black;
   border-radius: 15px;
}

.form input {

  width: 50%;
  clear: both;
}
legend{
  color:white;
  font-size: 55px;
  background-color:#32cd60;
}


</style>


<body>
<center>
<div class="form"
style="
font-family:serif;
font-size:15pt;
Margin-Top:95px;
">
<form action="editprofileconfirm.php" method="post">
	<legend class="title"> Edit Profile</legend>
	<p>
		<label>Contact Name :
			<input type="text" name="name" size="35" required style="margin-left:10px;" value="<?=$name; ?>"></label>
		<br/>
		<label>Email:
			<input type="email" name="email" size="35" style="margin-left:80px;" value="<?=$email; ?>"></label><br/>
		<label>Phone Number:
				<input type="number" name="phone" min="1000000" max="9999999999"size="35" style="margin-left:8px;" value="<?=$phone; ?>"></label> <br/>
    <label>Address:
    				<input type="text" name="address" size="35" style="margin-left:63px;" value="<?=$address; ?>"></label> <br/>
    <label>Status:
				<select name="status"  style="width:250px ; padding:5px; margin-left:80px;" value="<?=$status; ?>">
					<option name="ACTIVE" value="ACTIVE">ACTIVE</option>
					<option value="INACTIVE" >INACTIVE</option>
				</select><br/>
        <br/>
        <label>Password:
          <input type="text" name="password" size="35" required style="margin-left:45px;" value="<?=$password; ?>"></label>
        <br/>
	</p>
<input type="hidden" id="hidid" name="hidname" value="<?=$uid; ?>">
<input class="h" type="submit" value="Submit" />
 <button class="h" type="reset" value="Reset">Reset</button>


</form></div>
<br>
<button class="back" style="float: center;"><a style="text-decoration:none" href="profile.php"> BACK</a></button>
</html>
