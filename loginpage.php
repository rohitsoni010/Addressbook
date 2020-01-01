<?php
session_start();
?>
<html>
<style>
.button {
  margin-left:auto;
  margin-right: 10px;
  background-color: #042408;
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
  background-color: #10841d;
}
a { color: white; }
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
body{
background-image: url(login1.jpg);
  background-size: cover;
  Margin-Top:95px;

}
label1{
  font-size: 35px;
}
label2{
  font-size: 35px;
}
legend{
  color:white;
  font-size: 50px;
  background-color: #32cd60;
  /* color:white;
  font-size: 55px;
  width: 500px;
  clear: both;
  background-color: black;
  border: 5px solid black;
border-radius: 15px; */
}
table{margin-left:auto;
margin-right:auto;
border-collapse:collapse;
font-size:1.00em;
font-family:arial;
font-style:bold;
border: 5px solid MediumSeaGreen;
 border-radius: 25px;
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


</style>
<body>
  <center>
<div align="center" class="form"
style="
font-family:serif;
Margin-Top:150px;

color:black;
">

<form action="loginform1.php" method="post" align="middle">
	<legend > Login credentials</legend>
	<p>
				<label1>Email:</label1>
			<input type="email" name="email" size="35" style="margin-left:60px;"><br/>
        <label2>Password:</label2>
    			<input type="password" name="password" size="35" required style="margin-left:10px;">
    		<br/>
	</p>

<input class="button" type="submit" size="20" value="Login" />
 <button class="button" type="reset" size="20" value="Reset">Reset</button>

</form>
</center>
</div>
</div>
<br>
<center>
<button class="back" style="float: center;"><a style="text-decoration:none" href="main.php"> Create Account</a></button>
</center>

</body>
</html>
