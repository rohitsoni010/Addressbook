<?php
session_start();
?>
<?php
$conn = mysqli_connect("localhost","root","","addressbook");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_POST['hidname']!='')
{
  $sql = "UPDATE registration SET name='".$_POST["name"]."',email='".$_POST["email"]."',phone='".$_POST["phone"]."',address='".$_POST["address"]."',status='".$_POST["status"]."',password='".$_POST["password"]."' WHERE uid='".$_SESSION['uid']."' and uid='".$_POST['hidname']."' ";
  if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "profile.php";';
    echo '</script>';
  }
  else {
      echo "Error updating record: " . $conn->error;
       }
}
else{
$sql = "INSERT INTO registration(uid,name,email,phone,address,status,password)
VALUES ('".$_SESSION['uid']."','".$_POST["name"]."', '".$_POST['email']."', '".$_POST['phone']."','".$_POST['address']."','".$_POST['status']."','".$_POST['password']."') ";


  if ($conn->query($sql) === TRUE) {
  echo '<script type="text/javascript">';

  echo 'window.location.href = "contact.php";';
  echo '</script>';
  }
  else {
    echo "Error updating record: " . $conn->error;
       }
}

$conn->close();
?>
