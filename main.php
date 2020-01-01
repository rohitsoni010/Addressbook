<html>
<style type="text/css">
a { color: white; }
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
   border-radius: 5px;
   background-image: url(main2.jpg);
   background-size: cover;

 }
table{margin-left:auto;
margin-right:auto;
border-collapse:collapse;
font-size:1.00em;
font-family:arial;
font-style:bold;
border: 10px solid;
border-color: MediumSeaGreen;
border-radius: 1000px;
background-color: #DFDEE4;
}
.form {
  width: 500px;
  clear: both;
  border: 5px solid black;
   border-radius: 15px;
   background-color: #DFDEE4;
}

.form input {

  width: 50%;
  clear: both;
}
legend{
  color:white;
  font-size: 55px;
  background-color: #32cd60;
}

.addressbook legend{
  color:white;
  font-size: 55px;
  background-color: #981523;
  //#981523;
}
</style>
<body>
  <center>
  <div class="addressbook"
  style="
  font-family:serif;
  font-size:15pt;
  Margin-Top:10px;
  ">

  	<legend class="addressbook">ADDRESSBOOK</legend>
  </form>
</div>
<center>
<div>
</div>
<div class="form"
style="
font-family:serif;
font-size:15pt;
Margin-Top:75px;
">
<form action="mainform.php" method="post">
	<legend class="title"> Registration Form</legend>
	<br> Please Enter the Following Information
	<p>
		<label>Your Name :
			<input type="text" name="name" size="35" style="margin-left:26px;" ></label>
		<br/>
		<label>Email:
			<input type="email" name="email" size="35" style="margin-left:74px;"></label><br/>
		<label>Phone Number:
				<input type="number" name="phone" min="1000000" max="9999999999"size="35" style="margin-left:0px;"></label> <br/>
    <label>Address:
    				<input type="text" name="address" size="35" style="margin-left:55px;"></label> <br/>
    <label>Status:
				<select name="status" value="status" style="width:250px;padding:6px; margin-left:73px;">
					<option name="ACTIVE" value="ACTIVE">ACTIVE</option>
					<option value="INACTIVE" >INACTIVE</option>
				</select><br/>

        <label>Password:
    			<input type="text" name="password" size="35" required style="margin-left:45px;"></label>
    		<br/>
	</p>

<input class="button" type="submit" value="Sign Up" />
 <button class="button" type="reset" value="Reset">Reset</button>

</div1>
</form></div>

<br>
<center>
<button class="back" style="float: center;"><a style="text-decoration:none" href="loginpage.php"> Already Registered? Login now</a></button>
</center>
</body>

</html>
