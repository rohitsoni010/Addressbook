<?php
session_start();
?>

<html>
<style type="text/css">
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
  background-color: black;
}


</style>
<body>
  <?php
if($_SESSION["email"]) {
?>
<br>

<center> Welcome <?php echo $_SESSION["email"]; ?>. Click here to <a href="logout.php" title="Logout">Logout.</a></center>
<?php
}else {
header("Location:loginpage.php");
}
?>
<center>
<div class="form"
style="
font-family:serif;
font-size:15pt;
Margin-Top:165px;
">


<form action="deleteconfirm.php" method="post">
	<legend class="title"> Delete Contact</legend>
	<p>
		<label>Contact Name :
			<input type="text" name="name" size="35" required style="margin-left:50px;"></label>
		<br/>

<input type="submit" value="Submit" />
 <button type="reset" value="Reset">Reset</button>


</form></div>
