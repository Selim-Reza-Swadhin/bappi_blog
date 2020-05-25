<?php
	include ("include/header.php");
?>
<?php

$polling= $_POST['polling'];


$con = mysqli_connect("localhost","root","", "poll");
if (!$con)
  {
  die('Mysql could not connect: ' . mysqli_error());
  }

$polling= $_POST['polling'];
$status = "OK";
$msg="";

if(empty($polling)){
$msg .="Enter your id, "; 
$status= "NOT OK";
}
mysqli_query ($con, "INSERT INTO result (polling) VALUE ('$polling')");

$result = mysqli_query($con, "SELECT polling, COUNT(id) FROM result GROUP BY polling");


echo "<font face='Verdana' size='2' color=green>Thank You for voting.</font></br></br><font size ='4' color='red'>Poll Result</font></br>";

while($row= mysqli_fetch_array($result))
  {
  echo $row['polling'] . " = " .$row ['COUNT(id)'];
  echo "</br>";
  }
  
$total =mysqli_query($con, "SELECT * FROM result");

$num_rows = mysqli_num_rows($total);
echo "Total Polling vote = $num_rows <br /> <a href='tutorials.php'> Previous</a>";



?>
 <?php
	include ("include/footer.php");
	?>