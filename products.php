<?php
include("include/header.php");

if (isset($_SESSION['selim'])) {
    echo "Welcome our Product page";
} else {
    header("location:login.php");
}
?>

<span class="title">Image Gallery </span><br/>
<?php
echo $_SESSION['selim'];
echo "<br /> <font face='Verdana' size='4' color=red> Thanks for logging in</font>";
?>


<script type="text/javascript" src="expand.js"></script>

<br/>Look! here is some Image.<br/>
<img class="sample expando" border="0" src="images/Photoshop.jpg">
<img class="sample expando" border="0" src="images/Illustrator.jpg">
<img class="sample expando" border="0" src="images/Premiere.jpg">
<img class="sample expando" border="0" src="images/Flash.jpg">
<img class="sample expando" border="0" src="images/Word.jpg"><br/><br/> <br/> <br/> <br/> <br/> <br/>
<img class="sample expando" border="0" src="images/Excel.jpg">
<img class="sample expando" border="0" src="images/Office.jpg">
<img class="sample expando" border="0" src="images/Photoshop.jpg"/>
<img class="sample expando" border="0" src="images/Windows.jpg">
<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>

<?php include("include/footer.php");?>
