<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "1234";
$db = "sms";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
//echo "Connected Successfully";
$a1 = $_POST['cid'];
$a2 = $_POST['cname'];
$a3 = $_POST['grade'];

$sql="insert into onecredd  values  ('$a1','$a2','$a3')";

$result = $conn->query($sql);
if($result)
{

echo ("<script>console.log( 'one record added' );</script>");
}
else
{
echo ("<script>console.log( 'Error' );</script>");
}

?>
