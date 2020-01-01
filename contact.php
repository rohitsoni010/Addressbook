<?php
session_start();
?>
<html>
<style>
thead {
  display: table-header-group;
  vertical-align: middle;
  border-color: inherit;
  border-width:5px;
      border-bottom-style:dotted;
}

body { background-color:#DEDDE3;color:black;
  border: 5px solid black;
   border-radius: 5px;
background-image: url(contact.jpg);
   background-size:cover;
 }
   </style>

<style>
.add{
margin-left:auto;
  margin-right:120px;
  background-color: #3ac584;
  border: none;
  border-radius: 8px;
  color: white;
  padding: 10px 15px;
  text-align: center;
  font-size: 20px;
  cursor: pointer;
  font-weight: bold;

}
.add:hover {
  background-color: #1ba43b;
}
.button {

  margin-left:auto;
  margin-right: 10px;
  background-color: #3ac584;
  border-radius: 12px;
  border: none;
  color: white;
  padding: 8px 10px;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  font-weight: bold;
}
.abc { color: white; }

.button:hover {
  background-color: red;
}
table{margin-left:auto;
margin-right:auto;
border-collapse:collapse;
font-size:1.00em;
font-family:Proxima Nova Soft;
font-style:bold;
border: 5px solid MediumSeaGreen;
 border-radius: 8px;

}
tr:1 {border-bottom-style:dotted;}
tr:nth-child(even) {background-color: #8cd9bb;}
tr:nth-child(odd) {background-color: #5dca9f;}

.paddingBetweenCols td
{ padding:0 15px;
}

</style>
<body>
  <?php
if($_SESSION['email'] && $_SESSION['uid']) {

?>

  <br>

  <center><b>

Welcome <?php echo $_SESSION["email"]; ?>.</b> </center>

<button class="button" style="float: right;"><a class="abc" style="text-decoration:none" href='logout.php'>LOGOUT</a></button>
<br>
<br>
<br>
<?php include'abc.php' ?>

<?php
}else {
header("Location:loginpage.php");
}
?>
<br>
<?php include'search.php' ?>
<br>
<button class="add" style="float: right;"><a class="abc" style="text-decoration:none" href="add.php"> ADD</a></button>
<br>
<br>
<br>
  <center>
    <div
    style="Margin-Top:35px;
    font-size:15pt;" >


    <form method="post">
                <table class="paddingBetweenCols">


                <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone </th>
                            <th>Address</th>
                            <th>Status </th>
                            <th>Relation</th>
                            <th colspan='4'> Actions </th>
                            <tr  height = 0px></tr>
                        </tr>
                    </thead>
                    <tbody>
    <?php
    $conn = mysqli_connect("localhost","root","","addressbook");
    $query = "SELECT * FROM contact WHERE uid='".$_SESSION['uid']."' ORDER BY name ASC" ;
    $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if (mysqli_num_rows($run_query) > 0) {
    while ($row = mysqli_fetch_array($run_query )) {
        $rid=$row['rid'];
        $did=$row['rid'];
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $address = $row['address'];
        $status = $row['status'];
        $relation = $row['relation'];


        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$email</td>";
        echo "<td>$phone</td>";
        echo "<td>$address</td>";
        echo "<td>$status</td>";
        echo "<td>$relation</td>";
        echo "<td align=centre><button><a href='add.php?id=".$rid."' >EDIT</a></button><td>";
        echo "<td align=centre><button><a href='deleteconfirm.php?id=".$did."'>Delete</a></button><td>";

        }
        }

    ?>
  </center>
</table>
  <!-- <center>
<table cellspacing="10" cellpadding="10" style="background-color:white;
font-family:serif;
Margin-Top:175px;
font-size:25pt;">
<tr>
  <th><a href="add.php"> ADD</a></th>
  <th><a href="edit.php"> EDIT</a></th>
  <th><a href="delete.php"> DELETE</a></th>

</center> -->
</body>
</html>


<!-- <div class="form"
style="
font-family:serif;
font-size:15pt;
">
<form action="mainform.php" method="post">
	<legend class="title"> Registration Form : Please Enter the Following Information</legend>
	<p>
		<label>Your Name :
			<input type="text" name="name" size="35" required style="margin-left:50px;"></label>
		<br/>
		<label>Email:
			<input type="email" name="email" size="35" style="margin-left:108px;"></label><br/>
		<label>Phone Number:
				<input type="number" name="phone" min="1000000" max="9999999999"size="35" style="margin-left:5px;"></label> <br/>
    <label>Address:
    				<input type="text" name="address" size="35" style="margin-left:5px;"></label> <br/>
    <label>Status:
				<select name="status" value="status" style="padding:5px; margin-left:170px;">
					<option name="ACTIVE" value="ACTIVE">ACTIVE</option>
					<option value="INACTIVE" >INACTIVE</option>
				</select><br/>
				<br/>
        <label>Password:
    			<input type="text" name="password" size="35" required style="margin-left:50px;"></label> &nbsp&nbsp&nbsp
    		<br/>
	</p>

<input type="submit" value="Submit" />
 <button type="reset" value="Reset">Reset</button>


</form></div>

<table cellspacing="10" cellpadding="10" style="background-color:white;
font-family:serif;
font-size:15pt;">
<tr>
  <th><a href="loginpage.php"> Already registered? Login</a></th>
</body>
 -->
