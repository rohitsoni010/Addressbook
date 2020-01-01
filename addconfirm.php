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
  $sql = "UPDATE contact SET name='".$_POST["name"]."',email='".$_POST["email"]."',phone='".$_POST["phone"]."',address='".$_POST["address"]."',status='".$_POST["status"]."',relation='".$_POST["relation"]."' WHERE uid='".$_SESSION['uid']."' and rid='".$_POST['hidname']."' ";
  if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">';

    echo 'window.location.href = "contact.php";';
    echo '</script>';
  }
  else {
      echo "Error updating record: " . $conn->error;
       }
}
else{
$sql = "INSERT INTO contact(uid,name,email,phone,address,status,relation)
VALUES ('".$_SESSION['uid']."','".$_POST["name"]."', '".$_POST['email']."', '".$_POST['phone']."','".$_POST['address']."','".$_POST['status']."','".$_POST['relation']."') ";


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
