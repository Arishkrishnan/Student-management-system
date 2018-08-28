<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "sms";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
//echo "Connected Successfully";
$a1 = $_POST['username'];
$a2 = $_POST['email'];
$a3 = $_POST['mobile'];
$a4 = $_POST['password'];
$a5 = $_POST['cpassword'];



$sql="insert into registration values ('$a1','$a2','$a3','$a4','$a5')";
$result = $conn->query($sql);
if($result)
{
echo "<br>";
//echo "1 record added";
            
echo"<html>
     <head>
     <style>
     body, html {
    height: 100%;
}

.bg { 
    background-image: url('regsucc.jpg');
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
     </style>
     </head>
    <body class='bg'>
    <br><br><br><center>
    <h1 style='color:blue'><b>Registered Succesfully...!</b></h1>
    <br><center>To return to log in page : <a href='login.html'>Click Here</a></button><br><br>
    <img src='robot.jpg' alt='img' width='300' height='500'>
    </center>
    </center>
    </body>
    </html>";
}
else
{
echo mysqli_error($conn);
}

?>