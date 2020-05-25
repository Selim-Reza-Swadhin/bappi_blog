<?php
session_start();
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" ;/>
    <title>web example</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
    </style>

    <script type="text/javascript">
        let c = 0;
        let t;
        let timer_is_on = 0;

        function timedCount() {
            document.getElementById('txt').value = c;
            c = c + 1;
            t = setTimeout("timedCount()", 1000);
        }

        function doTimer() {
            if (!timer_is_on) {
                timer_is_on = 1;
                timedCount();
            }
        }
    </script>
</head>

<body onload="doTimer()">

<div id="wrapper">
    <div id="head">
        <div id="menu2">
            <ul class="menuitem2">
<!--                <li><a href="registration.php">Register</a></li>-->
<!--                <li><a href='login.php'>Log In</a></li>-->
                <?php
                if (isset($_SESSION['selim'])){
                    echo "<li><a href='logout.php' style='float:right;'>Logout</a></li>";
                }else{
                    if (!isset($_SESSION['selim'])){
                       echo "<li><a href='registration.php'>Register ||</a></li>";
                    }
                    if (!isset($_SESSION['selim'])){
                        echo "<li><a href='login.php'>Log In</a></li>";
                    }
                }
                ?>
            </ul>
        </div>
        <div id="logo"><img src="images/Logo.jpg" height="75" width="75" align="left"/>
            Nova Computer <br/>
            <span class="subtext">Learn from Beginning..... Don't late....late.. late.</span></div>
        <div id="menu">
            <ul class="menuitem">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="tutorials.php">Tutorials </a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <?php
                if (isset($_SESSION['selim'])){
                   echo '<li><a href="myforum.php">Forum</a></li>';
                }
                ?>
            </ul>
        </div>

        <div id="image"><img src="images/banner.jpg" height="300" width="850" align="left"/></div>
    </div>

    <div id="content">
        <div id="content_left">
            <br/>
            <form>
                <input type="text" id="txt" value="time" size="8"><br><b>Time Count</b>
            </form>
            <span class="title">Web/Blog</span><br/>
            Look! here is some link. Click to get related website <br/>
            <a href="http://novacomputerbd.com">Nova Computer</a><br/>
            <a href="https://selimrezaswadhin.blogspot.com">Swadhin's Blog </a><br/>
            <a href="https://google.com">Google</a>
            </p>

            <hr>
            <?php
            $host = "localhost"; // Host name
            $username = "root"; // Mysql username
            $password = ""; // Mysql password
            $database = "onlineuser"; // Database name
            $timeoutseconds = 60;

            //count the time
            $timestamp = time();
            $timeout = $timestamp - $timeoutseconds;

            //connect to database and insert value sent from form

            $conn = mysqli_connect("$host", "$username", "$password", "$database");
            $insert = mysqli_query($conn, "INSERT INTO totalonline VALUES('$timestamp','$REMOTE_ADDR','$PHP_SELF')");

            if (!($insert)) {
                print  "total online user Insert Failed > ";
            }

            //delete values when users leave
            $delete = mysqli_query($conn, "DELETE FROM totalonline WHERE timestamp < $timeout");
            if (!($delete)) {
                print  "total online user Delete Failed > ";
            }
            //grab the results
            $result = mysqli_query($conn, "SELECT DISTINCT ip FROM totalonline WHERE file='$PHP_SELF'");
            if (!($result)) {
                print  "total online user Select Error > ";
            }

            //number of rows = the number of people online
            $user = mysqli_num_rows($result);
            //spit out the results
            mysqli_close($conn);
            if ($user == 1) {
                print("now $user User is online");
            } else {
                print(" now $user Users are online ");
            }
            ?>
            <hr>
            <?php
            $filename = "counter.txt";
            // Open the file for reading
            $fp = fopen($filename, 'r');
            $counter = fread($fp, filesize($filename));
            fclose($fp);
            $counter = $counter + 1;
            echo "<p>Total Viewers:" . $counter . "</p>";
            $fp = fopen($filename, 'w');
            fwrite($fp, $counter);
            fclose($fp);
            ?>
            <?php
            $total = "5";
            $file_type = ".gif";
            $image_folder = "images";
            $start = "1";
            $random = mt_rand($start, $total);
            $image_name = $random . $file_type;
            echo "<img  src='$image_folder/$image_name' />";
            ?>

        </div>
        <div>