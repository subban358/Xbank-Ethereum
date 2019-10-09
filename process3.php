<?php
//function OpenCon()
$host = "localhost";
$user = "root";
$password = "";
$db = "loginbase";

// Create connection
$conn = mysqli_connect($host, $user, $password, $db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

else{
if(isset($_POST['add']))
{
$x=$_POST['username'];		
$y=$_POST['password'];				
$query = "select password from users where username LIKE ". "'".$x."'";
$result = mysqli_query($conn,$query);
$ans = mysqli_fetch_array($result);
if ($ans[0] == $y)
{
    header("Location: http://127.0.0.1:1337/login/middle.php");
}
else
echo "Login Failed";
}
}

$conn->close();

?>
