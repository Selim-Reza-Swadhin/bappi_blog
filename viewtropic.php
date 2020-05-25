<?php
include("include/header.php");
?>

<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "onlineuser"; // Database name
$tbl_name = "tropics"; // Table name
$conn = mysqli_connect("$host", "$username", "$password", "$db_name") or die("cannot connect");

// get data that sent from form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //$id = $_GET['id'];
    $tropic = $_POST['tropic'];
    $detail = $_POST['detail'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    //$datetime = date("d/m/y h:i:s:a"); //create date time

    $sql = "INSERT INTO $tbl_name(tropic, detail, name, email, date_time)VALUES('$tropic', '$detail', '$name', '$email', now())";
    $result = mysqli_query($conn, $sql);

    if ($result) {
echo "<p><center><font face='Verdana' size='4' color=red><b>" . $_SESSION['bappi'] .  "</center></font></p>";
        echo "<center><font face='Verdana' size='4' color=red><b>Your Tropic  is succesfully added </b></font></center>";
/*        echo "<a href='comments.php?id=<?= $id; ?>'><br><center><font face='Verdana' size='4' color=green><b>Click ME to View Your Tropic </b></font></center><br /></a>";*/
        header('location:myforum.php');
    } else {
        echo "ERROR";
    }
    mysqli_close($conn);
}
?>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php
include("include/footer.php");
?>