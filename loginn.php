<?php
session_start();
?>


<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "sms";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
//echo "Connected Successfully";
$a1 = $_POST['username'];
$a2 = $_POST['password'];


$sql="select * from registration where userid='$a1' and password = '$a2' ";
$result = $conn->query($sql);
//echo "$num_rows Rows\n";
if (mysqli_num_rows($result) == 1) {
    header('location:sms1.php');
} else {
    echo" The username/passowrd you entered is wrong";
}
?>
 <?php
      $_SESSION["name"]=$_POST['username'];
      ?>