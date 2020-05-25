<?php
session_start();
?>
<?php
$host = "localhost"; // Host name
$username = "root"; // Mysql username
$password = ""; // Mysql password
$db_name = "onlineuser"; // Database name
$tbl_name = "studentinfo"; // Table name

// Connect to server and select database.
$conn = mysqli_connect("$host", "$username", "$password", "$db_name")
or die("cannot connect");

// username,  password and email sent from form 
$myusername = $_POST['name'];
$mypassword = $_POST['password'];
$myemail = $_POST['email'];

$sql = "SELECT * FROM $tbl_name WHERE name='$myusername' and password='$mypassword'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if ($result) {
// store session data
    $row = mysqli_fetch_assoc($result);
  //echo $row['name'];
   $_SESSION['selim'] = $row['name'];
    header("location:index.php");
} else {
    header("location:login.php");
}
mysqli_close($conn);
mail($myemail, "Registration Success", "Congratulation, your registration has been successfully completed <br /> please click the follig link https://selimrezaswadhin.com");
?>