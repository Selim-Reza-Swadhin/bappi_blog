<?php
include("include/header.php");
?>

<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "onlineuser"; // Database name
$tbl_name = "comments"; // Table name

$conn = mysqli_connect("$host", "$username", "$password", "$db_name") or die("cannot connect");
$id = $_POST['id'];

$sql = "SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result);

if ($rows) {
    $Max_id = $rows['Maxa_id'] + 1;
} else {
    $Max_id = 1;
}
$a_name = $_POST['a_name'];
$a_email = $_POST['a_email'];
$a_answer = $_POST['a_answer'];

// Insert answer
$sql2 = "INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', now())";
$result2 = mysqli_query($conn, $sql2);

if ($result2) {
    echo "<p><center><font face='Verdana' size='4' color=red><b>" . $_SESSION['bappi'] . "</center></font></p>";
    echo "<center><font face='Verdana' size='4' color=red><b>Your Comments is succesfully added </b></font></center>";
    echo "<a href='comments.php?id=" . $id . "'><br><center><font face='Verdana' size='4' color=green><b>Click ME to View Your Comments </b></font></center><br /></a>";

    $tbl_name2 = "tropics";
    $sql3 = "UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
    $result3 = mysqli_query($conn, $sql3);
    header('localhost:comments.php');

} else {
    echo "ERROR";
}

mysqli_close($conn);
?>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php
include("include/footer.php");
?>