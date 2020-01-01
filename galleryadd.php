<?php session_start(); ?>

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

$con = mysqli_connect("localhost","root","","addressbook");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['but_upload'])){

  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $extensions_arr = array("jpg","jpeg","png","gif");

  if( in_array($imageFileType,$extensions_arr) ){


     $query = "INSERT INTO images(uid,name,rid)
     VALUES ('".$_SESSION['uid']."','$name', '".$_REQUEST['id']."') ";
     mysqli_query($con,$query);

     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

  }

}
?>
<style>
.form {
  width: 500px;
  clear: both;
  border: 5px solid green;
   border-radius: 15px;
}

.form input {

  width: 50%;
  clear: both;
}
legend{
  color:white;
  font-size: 50px;
  background-color: black;}
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
  .custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
  body { background-color:#DEDDE3;color:black;
    border: 5px solid green;
     border-radius: 5px;}


  .button:hover {
    background-color: #10841d;
  }
</style>

<center>
<div class="form" align="center" style="
font-family:serif;
Margin-Top:120px;

color:black;
">
	<legend > Upload Image</legend>
<p>
<form method="post" action="" enctype='multipart/form-data'>
  <input type="hidden" id="hidid" name="hidname" value="<?=$rid; ?>">
  <input class="button" type='file' name='file'>
</p>


  <input class="button" type='submit' value='Upload' name='but_upload'>
</form>
</div>
</center>
<br>
<center>
<button class="back" style="float: center;"><a style="text-decoration:none" href="gallery.php"> Back</a></button>
</center>
