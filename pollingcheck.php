<?php
include("include/header.php");
?>

<?php
$polling = $_POST['polling'];
$status = "OK";
$msg = "";
if (empty($polling)) {
    $msg .= "Select a Radio button Yes or No and Click on Submit button";
    $status = "NOT OK";
}
if ($status == "OK") {

    $con = mysqli_connect("localhost", "root", "", "onlineuser");
    if (!$con) {
        die('Mysql could not connect: ' . mysqli_error());
    }
    mysqli_query($con, "INSERT INTO result (polling) VALUE ('$polling')");
    $result = mysqli_query($con,"SELECT polling, COUNT(id) FROM result GROUP BY polling");

    echo "<font face='Verdana' size='2' color=green>Thanks  for voting us.</font></br></br><font size ='4' color='red'>Vote Polling Result</font></br>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['polling'] . " = " . $row ['COUNT(id)'];
        echo "</br>";
    }
    $total = mysqli_query($con, "SELECT * FROM result");
    $num_rows = mysqli_num_rows($total);
    echo "Total Polling vote = $num_rows <br /> <a href='tutorials.php'> Click to back Tutorials Page</a>";
} else {
    echo "<b> Sorry. Try Again $name</b>";
    echo "<center><font face='Verdana' size='4' color=red>$msg</font></center><br />";
    echo "<a href='tutorials.php'>Click to back Tutorials Page</a>";
}
?>

    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <br/><br/><br/>
<?php
include("include/footer.php");
?>