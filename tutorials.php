<?php
include("include/header.php");
?>
<div>
    <span class="title">Tutotials </span><br/>

    <script>
        function getVote(int) {
            if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {// code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("poll").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "poll.php?vote=" + int, true);
            xmlhttp.send();
        }
    </script>
    <div id="poll">
        <h3>Do you like PHP and AJAX so far?</h3>
        <form>
            Yes:
            <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
            <br>No:
            <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
        </form>
    </div>


    <form id="form1" name="form1" method="post" action="pollingcheck.php">
        Do you love Photoshop?
        <input name="polling" type="radio" value="Yes"/>Yes
        <input name="polling" type="radio" value="No"/>No
        <input name="submit" type="submit" id="submit"
               value="Submit"/>
    </form>

    <br/> Look! here is Photoshop Tutorial<br/>
    <img class="sample" src="images/Photoshop.jpg"/><br/>
    <h1>How to create a Text Effect </h1> <br/>
    First you have to ...... go on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go
    on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go
    on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go on..go
    on..go on..go on..go on..go on..go on..go on..
</div>
<?php
    $quotes[] = "You can edit your photo using Photoshop Tutorials.";
    $quotes[] = "You can illustrate your document using Illustratrator  Tutorials.";
    $quotes[] = "You can edit your movie using Premiere Tutorials.";
    $quotes[] = "You can make animation using Flash Tutorials.";
    $quotes[] = "You can make web page using HTML Tutorials.";
    $quotes[] = "You can make document using Word Tutorials.";

srand((double)microtime() * 1000000);
$auto = rand(0, count($quotes) - 1);

echo "<p><center><font face='Verdana' size='4' color=red><b>" . $quotes[$auto] . "</center></font></p>";
echo "<p>
<center>
<font face='Verdana' size='4' color=green><b>" .$_SESSION['selim'] . "</center>
</font>
</p>";
?>


<br/>
<br/><br/><br/><br/><br/><br/><br/><br/>

<?php
include("include/footer.php");
?>
