<?php
session_start();
?>
<?php
$uid='';
$name='';
$email='';
$phone='';
$address='';
$status='';
$password='';


if(isset($_REQUEST['id'])){
  $conn = mysqli_connect("localhost","root","","addressbook");
  $query = "SELECT * FROM contact WHERE uid='".$_SESSION['uid']."' and rid='".$_REQUEST['id']."'" ;
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
<style>
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
table{margin-left:auto;
margin-right:auto;
border-collapse:collapse;
font-size:1.00em;
font-family:Proxima Nova Soft;
font-style:bold;
border: 5px solid MediumSeaGreen;
 border-radius: 8px;

}
tr:nth-child(even) {background-color: #8cd9bb;}
tr:nth-child(odd) {background-color: #5dca9f;}

.paddingBetweenCols td
{
    padding:0 15px;
}
</style>

<body>
<br>

  <center>
    <div
    style="Margin-Top:25px;
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
                            <th>Password</th>
                            <th colspan='4'> Actions </th>


                        </tr>
                    </thead>
                    <tbody>
<?php
$conn = mysqli_connect("localhost","root","","addressbook");
$query = "SELECT * FROM registration WHERE uid='".$_SESSION['uid']."' ORDER BY name ASC" ;
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0) {
while ($row = mysqli_fetch_array($run_query )) {
  $uid=$row['uid'];
  $did=$uid;
  $name = $row['name'];
  $email = $row['email'];
  $phone = $row['phone'];
  $address = $row['address'];
  $status = $row['status'];
  $password=$row['password'];


    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$email</td>";
    echo "<td>$phone</td>";
    echo "<td>$address</td>";
    echo "<td>$status</td>";
    echo "<td>$password</td>";
    echo "<td align=centre><button><a href='editprofile.php?id=".$uid."' >Edit Profile</a></button><td>";
    echo "<td align=centre><button><a href='deleteprofile.php?id=".$did."'>Delete Profile </a></button><td>";



    }
    }
