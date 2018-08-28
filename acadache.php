<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "1234";
$db = "sms";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
//echo "Connected Successfully";
$a1 = $_POST['rollnum'];
$a2 = $_POST['award'];
$sql="insert into acadache  values ('$a1','$a2',NULL)";

$result = $conn->query($sql);

if($result)
{
echo "<br>";
echo ("<script>console.log( 'one record added' );</script>");
}
else
{
echo ("<script>console.log( 'Error' );</script>");
}
header('location:sms1.php');
?>
<?php
$target_dir = "acaddoc/";
$s=mysqli_insert_id($conn);
$target_file = $target_dir . ($s).".png";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo ("</script>console.log(' File is an image - ' . $check[mime] . '.')</script>");
        $uploadOk = 1;
    } else {
        echo ("<script>console.log('File is not an image.')</script>");
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo ("<script>console.log('Sorry, file already exists.')</script>");
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo ("<script>console.log( 'Sorry, your file is too large.' )</script>");
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo ("<script>console.log( 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.' )</script>");
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo ("<script>console.log('Sorry, your file was not uploaded.')</script>");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo ("<script>console.log('The file '. basename(". $_FILES['fileToUpload']['name']."). ' has been uploaded.')</script>");
    } else {
        echo "('<script>console.log('Sorry, there was an error uploading your file.')</script>)";
    }
}
?>