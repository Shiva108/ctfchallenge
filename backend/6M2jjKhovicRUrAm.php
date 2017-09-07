<?php
  include_once('layout/header.php'); // includes header
  include_once('backend/connect.php')
?>
<?php
  
$user_name = "guest";
$hashedPassword = md5('1234'); // hashes the password
$query="SELECT * FROM users WHERE user_name = '".$user_name."' AND password = '".$hashedPassword."'"; //sql query

$conn->close();
$conn = new mysqli($servername, $username, $password, $dbname);


$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row=mysqli_fetch_assoc($result);

if(strcmp($hashedPassword,$row['password'])!=0) {
 echo "<br> Login failed";
}
else {
 # Start the session
 session_start();
 $_SESSION['user_name'] = $user_name;
 echo "<head> <meta http-equiv=\"Refresh\" content=\"0;url=home.php\" > </head>";
}
?>